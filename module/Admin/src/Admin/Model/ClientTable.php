<?php
namespace Admin\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select;
use Zend\Paginator\Adapter\DbSelect;
use Zend\Paginator\Paginator;

class ClientTable {
    
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
            
             $select = new Select('client');   
             $select->order('clientId DESC');
             // create a new result set based on the Client entity
             $resultSetPrototype = new ResultSet();
             
             $resultSetPrototype->setArrayObjectPrototype(new Client());
             
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
    
    public function getClient($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('clientId' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
    public function saveClient(Client $client)
    {
        $data = array(

            'clientName'        => $client->clientName,
            'clientPhone'       => $client->clientPhone,
            'clientEmail'       => $client->clientEmail,
            'clientAttach'      => $client->clientAttach,
            'clientMessage'     => $client->clientMessage,
            'clientInsert'      => time(),
                   
          
        );

        $id = (int)$client->clientId;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getClient($id)) {
                unset($data['clientInsert']);
                $this->tableGateway->update($data, array('clientId' => $id));
            } else {
                throw new \Exception('Client id does not exist');
            }
        }
    }
    
    public function deleteClient($id)
    {
        $this->tableGateway->delete(array('clientId' => $id));
    }
}