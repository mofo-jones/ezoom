<?php

class User extends CI_Model
{
    private $entity = 'users';

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        return $this->db->get($this->entity)->result();
    }

    public function get($id)
    {
        return $this->db->get_where($this->entity, array('id' => $id))->row();
    }
    
    public function delete($id)
    {
        $this->db->delete($this->entity, array('id' => $id));
    }
    
    public function save($row)
    {
        if (empty($row['id'])){
            $this->db->insert($this->entity, $row);
        } else {
            $this->db->where('id', $row['id']);
            $this->db->update($this->entity,$row);
        }
    }

    public function  validate($usr) {
        return $this->db->get_where($this->entity, array('email' => $usr['email'],'password'=>$usr['password'] ))->row();
    }

}
