<?php
namespace Admin\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select;
use Zend\Paginator\Adapter\DbSelect;
use Zend\Paginator\Paginator;

class MessageTable {
    
    //output
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    //wszystkie wiadomości
    public function fetchAll($paginated=false, $id)
    {
        if($paginated) {
            
             $select = new Select('message'); 
             $select->order('messageId DESC');
             $select->where(array('messageOfferId' => $id));
             // create a new result set based on the Contact entity
             $resultSetPrototype = new ResultSet();
             
             $resultSetPrototype->setArrayObjectPrototype(new Message());
             
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
    
    public function getMessage($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('messageId' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
    public function getMessages($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('messageOfferId' => $id));        
        if (!$rowset) {
            throw new \Exception("Could not find row $id");
        }
        return $rowset;
    }
    
    public function saveMessage(Message $message)
    {
        $data = array(
         'messageName'     => $message->messageName,
         'messageTitle'    => $message->messageTitle,
         'messageEmail'    => $message->messageEmail,
         'messageText'     => $message->messageText,
         'messageOfferId'  => $message->messageOfferId,
         'messageInsert'   => time(),
          
        );

        $id = (int)$message->messageId;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getContact($id)) {
                unset($data['messageInsert']);
                $this->tableGateway->update($data, array('messageId' => $id));
            } else {
                throw new \Exception('Message id does not exist');
            }
        }
    }
    
    public function deleteMessage($id)
    {
        $this->tableGateway->delete(array('messageId' => $id));
    }
}