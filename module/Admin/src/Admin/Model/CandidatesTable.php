<?php
namespace Admin\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select;
use Zend\Paginator\Adapter\DbSelect;
use Zend\Paginator\Paginator;

class CandidatesTable {
    
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
            
             $select = new Select('candidates');             
             $select->order('candidatesId DESC');
             // create a new result set based on the Candidates entity
             $resultSetPrototype = new ResultSet();
             
             $resultSetPrototype->setArrayObjectPrototype(new Candidates());
             
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
    
    public function getCandidates($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('candidatesId' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
    public function saveCandidates(Candidates $candidates)
    {
        $data = array(

            'candidatesName'        => $candidates->candidatesName,
            'candidatesPhone'       => $candidates->candidatesPhone,
            'candidatesEmail'       => $candidates->candidatesEmail,
            'candidatesAttach'      => $candidates->candidatesAttach,
            'candidatesSubject'     => $candidates->candidatesSubject,
            'candidatesMessage'     => $candidates->candidatesMessage,
            'candidatesInsert'      => time(),
                   
          
        );

        $id = (int)$candidates->candidatesId;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getCandidates($id)) {
                unset($data['candidatesInsert']);
                $this->tableGateway->update($data, array('candidatesId' => $id));
            } else {
                throw new \Exception('Candidates id does not exist');
            }
        }
    }
    
    public function deleteCandidates($id)
    {
        $this->tableGateway->delete(array('candidatesId' => $id));
    }
}