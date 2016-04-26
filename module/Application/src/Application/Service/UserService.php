<?php

namespace Application\Service;

use Zend\Session\Container;

class UserService {

    public $sm = null;

    public function __construct($sm) {
        $this->sm = $sm;
    }

    public function getServiceManager() {
        return $this->sm;
    }

    
    public function login($params) {
        $db = $this->sm->get('UsersTable');
        return $db->login($params);
    }
    
    public function addUser($params) {
        $adapter = $this->sm->get('Zend\Db\Adapter\Adapter')->getDriver()->getConnection();
        $adapter->beginTransaction();
        try {
            $userDb = $this->sm->get('UsersTable');
            $result = $userDb->addUserDetails($params);
            if ($result > 0) {
                $adapter->commit();
                $container = new Container('alert');
                $container->alertMsg = 'User added successfully';
            }
        } catch (Exception $exc) {
            error_log($exc->getMessage());
            error_log($exc->getTraceAsString());
        }
    }
    
    public function updateUser($params) {
        $adapter = $this->sm->get('Zend\Db\Adapter\Adapter')->getDriver()->getConnection();
        $adapter->beginTransaction();
        try {
            $userDb = $this->sm->get('UsersTable');
            $result = $userDb->updateUserDetails($params);
            if ($result > 0) {
                $adapter->commit();
                $container = new Container('alert');
                $container->alertMsg = 'User details updated successfully';
            }
        } catch (Exception $exc) {
            error_log($exc->getMessage());
            error_log($exc->getTraceAsString());
        }
    }
    
    public function getAllUsers($parameters){
        $userDb = $this->sm->get('UsersTable');
        //$acl = $this->sm->get('AppAcl');
        return $userDb->fetchAllUsers($parameters);
    }
    
    public function getUser($id){
        $userDb = $this->sm->get('UsersTable');
        return $userDb->fetchUser($id);
    }
}