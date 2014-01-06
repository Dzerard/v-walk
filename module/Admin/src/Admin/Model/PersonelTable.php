<?php
namespace Admin\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select;
use Zend\Paginator\Adapter\DbSelect;
use Zend\Paginator\Paginator;

class PersonelTable {
    
    //output
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    //wszystkie wiadomości
    public function fetchAll($paginated=false)
    {
        if($paginated) {
            
             $select = new Select('personel');     
             $select->order('personelId DESC');
             // create a new result set based on the Personel entity
             $resultSetPrototype = new ResultSet();
             
             $resultSetPrototype->setArrayObjectPrototype(new Personel());
             
             // create a new pagination adapter object
             $paginatorAdapter = new DbSelect(
                 // our configured select object
                 $select,
                 // the adapter to run it against
                 $this->tableGateway->getAdapter(),
                 // the result set to hydrate
                 $resultSetPrototype
             );
             $paginator = new Paginator($paginatorAdapter);
             return $paginator;
         }

        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function getPersonel($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('personelId' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
    public function savePersonel(Personel $personel)
    {
        $data = array(

            'personelName'        => $personel->personelName,
            'personelPhone'       => $personel->personelPhone,
            'personelEmail'       => $personel->personelEmail,
            'personelAttach'      => $personel->personelAttach,
            'personelMessage'     => $personel->personelMessage,
            'personelInsert'      => time(),
                   
          
        );

        $id = (int)$personel->personelId;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getPersonel($id)) {
                unset($data['personelInsert']);
                $this->tableGateway->update($data, array('personelId' => $id));
            } else {
                throw new \Exception('Personel id does not exist');
            }
        }
    }
    
    public function deletePersonel($id)
    {
        $this->tableGateway->delete(array('personelId' => $id));
    }
}