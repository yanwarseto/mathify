<?php
class m_quisioner extends CI_Model
{
    public function getAllQuisioner()
    {
        return $this->db->get('quisioner')->result_array();
    }
}
