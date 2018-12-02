<?php

class Product extends CI_Model
{
    private $entity = 'products';

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        return $this->db->query("SELECT pro.id, pro.name, pro.amount, pro.price, cat.name as cat_name FROM products as pro INNER JOIN categories as cat on cat.id=pro.categories_id")->result();
        // return $this->db->get($this->entity)->result();
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

}
