<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_news($epp, $limit)
    {
    	return $this->db->select('*')
    					->from('cms_news')
    					->order_by('date', 'DESC')
    					->limit($limit, $epp)
    					->get()
    					->result();
    }

    public function get_info_news($id)
    {
        return $this->db->select('*')
                        ->from('cms_news')
                        ->where('id', $id)
                        ->get()
                        ->first_row();
    }

    public function get_comments($id)
    {
        return $this->db->select('*')
                        ->from('cms_news_comments')
                        ->where('news_id', $id)
                        ->order_by('date', 'DESC')
                        ->get()
                        ->result();
    }

    public function count_comments($id)
    {
        return $this->db->select('*')
                        ->from('cms_news_comments')
                        ->where('news_id', $id)
                        ->get()
                        ->num_rows();
    }

    public function get_info_account($id)
    {
        return $this->db->select('*')
                        ->from('accounts')
                        ->where('Id', $id)
                        ->get()
                        ->first_row();
    }

    public function add_comment($id, $date, $author, $content)
    {
        $data = array(
            'news_id' => $id,
            'date' => $date,
            'author' => $author,
            'content' => $content,
        );
        return $this->db->insert('cms_news_comments', $data);
    }

    public function count_news()
    {
        return $this->db->select('*')
                        ->from('cms_news')
                        ->get()
                        ->num_rows();
    }
}