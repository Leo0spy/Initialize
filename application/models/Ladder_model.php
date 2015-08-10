<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ladder_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
            $this->world = $this->load->database('world', TRUE);
    }

    public function pvm($limit)
    {
    	return $this->world->select('*')
    					->from('characters')
    					->order_by('Experience', 'DESC')
    					->limit($limit)
    					->get()
    					->result();
    }

    public function pvp($limit)
    {
    	return $this->world->select('*')
    					->from('characters')
    					->order_by('Honor', 'DESC')
                        ->limit($limit)
    					->get()
    					->result();
    }

    public function guild($limit)
    {
    	return $this->world->select('*')
    					->from('guilds')
    					->order_by('Experience', 'DESC')
                        ->limit($limit)
    					->get()
    					->result();
    }

    public function count_members($id)
    {
        return $this->world->select('*')
                        ->from('guild_members')
                        ->where('GuildId', $id)
                        ->get()
                        ->num_rows();
    }

    public function vote($limit)
    {
        return $this->db->select('*')
                        ->from('accounts')
                        ->order_by('cms_votes', 'DESC')
                        ->limit($limit)
                        ->get()
                        ->result();
    }

    public function get_last_level()
    {
        return $this->world->select('*')
                            ->from('experiences')
                            ->order_by('Level', 'DESC')
                            ->get()
                            ->first_row();
    }

    public function get_level()
    {
        return $this->world->select('*')
                            ->from('experiences')
                            ->order_by('Level', 'ASC')
                            ->get()
                            ->result();
    }
}