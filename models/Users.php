<?php
class Users extends AbstractModel {
    
    private $user_group, $user_hash, $user_id, $user_login, $user_password;
    public $date;
    
    public function getUsers(){
        
        $db = new DB;
        $query = "SELECT user_login, user_id, user_group FROM users";
        $date = $db->query($query);
        
        return $date;
    }    
}