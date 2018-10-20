<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/20
 * Time: 15:17
 */
class User_model extends CI_Model{
    public function save($name,$password){
        $data = array(
            "name"=>$name,
            "password" =>$password
        );
        $return = $this->db->insert('mytest', $data);
        return $return;
    }
    public function get_data_by_name($name,$pwd){
        $data = array(
            "name"=>$name,
            "password"=>$pwd
        );
        $query = $this->db->get_where('mytest', $data);
        return $query->row();
//        return $query->result();
    }
}
