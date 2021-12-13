<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud
{
    //action to insert data
    public function Insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    //action to update data
    public function Update($table, $id_data, $data)
    {
        $this->db->update($table, $data, $id_data);
    }

    //action to delete data
    //WARNING!!! Data will be delete permanently
    public function Delete($table, $id_data, $data)
    {
        $this->db->delete($table, $data, $id_data);
    }

    //action to soft_delete data where delete field name is 'is_deleted'
    public function Soft_Delete($table, $id_data)
    {
        $data = array(
            'is_deleted' => '1'
        );

        $this->db->update($table, $data, $id_data);
    }
}
