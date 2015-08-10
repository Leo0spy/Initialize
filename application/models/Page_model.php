<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
            $this->world = $this->load->database('world', TRUE);
    }

    public function check_guild($id)
    {
    	$query = $this->world->select('*')
    					  ->from('guilds')
    					  ->where('Id', $id)
    					  ->get();
    	if($query->num_rows() > 0){
    		return TRUE;
    	}
    }

    public function get_info_guild($id)
    {
    	return $this->world->select('*')
    					->from('guilds')
    					->where('Id', $id)
    					->get()
    					->first_row();
    }

    public function get_guild_members($id)
    {
    	return $this->world->select('*')
    					->from('guild_members')
    					->where('GuildId', $id)
    					->order_by('RankId', 'ASC')
    					->get()
    					->result();
    }

    public function count_members($id)
    {
    	$query = $this->world->select('*')
    					  ->from('guild_members')
    					  ->where('GuildId', $id)
    					  ->get();
    	return $query->num_rows();
    }

    public function get_info_player($guid)
    {
    	return $this->world->select('*')
    					->from('characters')
    					->where('Id', $guid)
    					->get()
    					->first_row();
    }

    public function get_info_menor($guild_id)
    {
    	return $this->world->select('*')
    					->from('guild_members')
    					->where('GuildId', $guild_id)
    					->where('RankId', '1')
    					->get()
    					->first_row();
    }

    public function check_player($guid)
    {
    	$query = $this->world->select('*')
    					  ->from('characters')
    					  ->where('Id', $guid)
    					  ->get();
    	if($query->num_rows() > 0){
    		return TRUE;
    	}
    }

    public function player_has_guild($id)
    {
    	$query = $this->world->select('*')
    					  ->from('guild_members')
    					  ->where('CharacterId', $id)
    					  ->get();
    	if($query->num_rows() > 0){
    		return TRUE;
    	}
    }

    public function get_info_guild_members($id)
    {
    	return $this->world->select('*')
    					->from('guild_members')
    					->where('CharacterId', $id)
    					->get()
    					->first_row();
    }

    public function get_info($id)
    {
    	return $this->db->select('*')
    					->from('accounts')
    					->where('Id', $id)
    					->get()
    					->first_row();
    }

    public function change_view_armor($guid, $type)
    {
    	$data = array(
    		'cms_view_armor' => $type,
    	);
    	return $this->world->where('Id', $guid)
    					   ->update('characters', $data);
    }

    public function change_message($guid, $message)
    {
    	$data = array(
    		'cms_message' => $message,
    	);
    	return $this->world->where('Id', $guid)
    					   ->update('characters', $data);
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

    public function get_account_player($Id)
    {
        return $this->db->select('*')
                        ->from('worlds_characters')
                        ->where('CharacterId', $Id)
                        ->get()
                        ->first_row();
    }

    public function get_last_level_honor()
    {
        return $this->world->select('*')
                            ->from('experiences')
                            ->where('AlignmentHonor !=', '-1')
                            ->order_by('AlignmentHonor', 'DESC')
                            ->get()
                            ->first_row();
    }

    public function get_level_honor()
    {
        return $this->world->select('*')
                            ->from('experiences')
                            ->where('AlignmentHonor !=', '-1')
                            ->order_by('AlignmentHonor', 'ASC')
                            ->get()
                            ->result();
    }

    public function get_spells_player($id)
    {
        return $this->world->select('*')
                            ->from('characters_spells')
                            ->where('OwnerId', $id)
                            ->get()
                            ->result();
    }

    public function get_name($id)
    {
        return $this->world->select('*')
                            ->from('langs')
                            ->where('Id', $id)
                            ->get()
                            ->first_row();
    }

    public function get_info_spell($id)
    {
        return $this->world->select('NameId')
                            ->from('spells_templates')
                            ->where('Id', $id)
                            ->get()
                            ->first_row();
    }

    public function get_items_player($id)
    {
        return $this->world->select('*')
                            ->from('characters_items')
                            ->where('OwnerId', $id)
                            ->get()
                            ->result();
    }

    public function get_info_item($id)
    {
        return $this->world->select('NameId, IconId, TypeId, Level')
                            ->from('items_templates')
                            ->where('Id', $id)
                            ->get()
                            ->first_row();
    }
}