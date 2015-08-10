<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Points_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_info($guid)
    {
    	return $this->db->select('*')
    					->from('accounts')
    					->where('Id', $guid)
    					->get()
    					->first_row();
    }

    public function check_ip($ip)
    {
        $query = $this->db->select('*')
                          ->from('cms_ip_vote')
                          ->where('ip', $ip)
                          ->get();
        if($query->num_rows() > 0){
            return TRUE;
        }
    }

    public function accept_vote($ip, $date)
    {
        $data = array(
            'heurevote' => $date,
        );
        return $this->db->where('ip', $ip)
                        ->update('cms_ip_vote', $data);
    }

    public function add_vote($guid, $vote, $points, $date)
    {
        $data = array(
            'Tokens' => $points,
            'cms_votes' => $vote,
            'cms_heurevote' => $date,
        );
        return $this->db->where('Id', $guid)
                        ->update('accounts', $data);
    }

    public function add_vote_ip($ip, $date)
    {
        $data = array(
            'ip' => $ip,
            'heurevote' => $date,
        );
        return $this->db->insert('cms_ip_vote', $data);
    }

    public function get_info_ip($ip)
    {
        return $this->db->select('*')
                        ->from('cms_ip_vote')
                        ->where('ip', $ip)
                        ->get()
                        ->first_row();
    }

    public function add_points($guid, $vote, $points)
    {
        $data = array(
            'Tokens' => $points,
            'cms_votes' => $vote,
        );
        return $this->db->where('Id', $guid)
                        ->update('accounts', $data);
    }

    public function add_logs($type, $date, $param0 = '', $param1 = '', $param2 = '')
    {
        $data = array(
            'type' => $type,
            'date' => $date,
            'param0' => $param0,
            'param1' => $param1,
            'param2' => $param2,
        );
        return $this->db->insert('cms_logs', $data);
    }
}