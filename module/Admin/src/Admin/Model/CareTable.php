<?php
namespace Admin\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select;
use Zend\Paginator\Adapter\DbSelect;
use Zend\Paginator\Paginator;

class CareTable {
    
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
            
             $select = new Select('care');  
             $select->order('careId DESC');
             // create a new result set based on the Care entity
             $resultSetPrototype = new ResultSet();
             
             $resultSetPrototype->setArrayObjectPrototype(new Care());
             
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
    
    public function getCare($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('careId' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
    public function saveCare(Care $care)
    {
        $data = array(
            'careName'       => $care->careName,
            'careDate'       => $care->careDate,
            'careCellphone'  => $care->careCellphone,
            'carePhone'      => $care->carePhone,
            'careEmail'      => $care->careEmail,
            'careRegion'     => $care->careRegion,
            'careCity'       => $care->careCity,
            'careExp'        => $care->careExp,
            'careSmoke'      => $care->careSmoke,
            'careDriving'    => $care->careDriving,            
            'careLanguage'   => $care->careLanguage,
            'careChange'     => $care->careChange,
            'careExtraPhone' => $care->careExtraPhone,
            'careSex'        => $care->careSex,
            'careWhenStart'  => $care->careWhenStart,
            'careInsert'     => time(),            
          
        );

        $id = (int)$care->careId;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getCare($id)) {
                unset($data['careInsert']);
                $this->tableGateway->update($data, array('careId' => $id));
            } else {
                throw new \Exception('Care id does not exist');
            }
        }
    }
    
    public function deleteCare($id)
    {
        $this->tableGateway->delete(array('careId' => $id));
    }
}