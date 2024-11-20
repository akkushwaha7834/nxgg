<?php

class Contact_us_model extends CI_Model
{
    public function contact_submit_data($page_data)
    {
        return $this->db->insert('contact-us', $page_data);
        
    }
}