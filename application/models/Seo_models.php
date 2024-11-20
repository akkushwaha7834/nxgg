<?php 

class Seo_model extends CI_Model
{
    public function seo_submit_data($data)
    {
        $data = 
        [
            'page_name'=>$data['page_name'],
            'seo_title'=>$data['seo_title'],
            'seo_desc'=>$data['seo_desc'],
            'seo_keywords'=>$data['seo_keywords'],
        ];
        if ($this->db->insert('seodata', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

    public function seo_view()
    {
    $result = $this->db->query("SELECT * FROM `seodata`;");
    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function seo_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('seodata');
    }

    public function seo_update_data($data)
    {
        $newdata =  [
            'page_name'=>$data['page_name'],
            'seo_title'=>$data['seo_title'],
            'seo_desc'=>$data['seo_desc'],
            'seo_keywords'=>$data['seo_keywords'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('seodata', $newdata)) 
        {
            return $newdata;
        } 
        else 
        {
            return false;
        }
    }

    public function seo_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `seodata` where id=$id");
        if ($result->num_rows() > 0) 
        {
            return $result->result();
        } 
        else 
        {
            return 0;
        }
    }

    public function role_fetch()
    {
        $role_data = $this->db->query("SELECT * FROM `pages`");
        $fetch = $role_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $role_data->result_array();
        } else {
            return false;
        }
    }
    
    	public function getseo_data($page)
        {
            // $query=$this->db->get_where('seodata',array('pagename'=>$page));
            // $query = $this->db->query("SELECT * FROM `seodata` WHERE pagename=?", array($page));
            $query=$this->db->get_where('seodata',array('pagename'=>$page))->result_array();

        if ($query) {
        return $query;  //$query->result();
    } else {
        return false;
    }
}
}
?>