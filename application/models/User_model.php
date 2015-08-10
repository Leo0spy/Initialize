<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
            $this->world = $this->load->database('world', TRUE);
    }

    public function get_info($Id)
    {
        return $this->db->select('*')
                        ->from('accounts')
                        ->where('Id', $Id)
                        ->get()
                        ->first_row();
    }

    public function account_exist($login, $password)
    {
    	$query = $this->db->select('*')
                          ->from('accounts')
                          ->where('Login', $login)
                          ->where('PasswordHash', $password)
                          ->get();
        if($query->num_rows() > 0){
            return TRUE;
        }
    }

    public function get_informations($login)
    {
        return $this->db->select('*')
                        ->from('accounts')
                        ->where('Login', $login)
                        ->get()
                        ->first_row();
    }

    public function already_mail($mail)
    {
        $query = $this->db->select('*')
                          ->from('accounts')
                          ->where('Email', $mail)
                          ->get();
        if($query->num_rows() > 0){
            return TRUE;
        }
    }

    public function already_login($login)
    {
        $query = $this->db->select('*')
                          ->from('accounts')
                          ->where('Login', $login)
                          ->get();
        if($query->num_rows() > 0){
            return TRUE;
        }
    }

    public function already_pseudo($pseudo)
    {
        $query = $this->db->select('*')
                          ->from('accounts')
                          ->where('Nickname', $pseudo)
                          ->get();
        if($query->num_rows() > 0){
            return TRUE;
        }
    }

    public function add_account($login, $pass, $pseudo, $email, $question, $answer)
    {
        $data = array(
            'Login' => $login,
            'PasswordHash' => $pass,
            'Nickname' => $pseudo,
            'Email' => $email,
            'SecretQuestion' => $question,
            'SecretAnswer' => $answer,
            'Role' => '1',
            'Lang' => 'pt',
            'CreationDate' => '0001-01-01 00:00:00',
            'SubscriptionEnd' => '0001-01-01 00:00:00',
        );
        $this->db->insert('accounts', $data);
    }

    public function get_players($id)
    {
        return $this->db->select('*')
                        ->from('worlds_characters')
                        ->where('AccountId', $id)
                        ->get()
                        ->result();
    }

    public function get_info_player($id)
    {
        return $this->world->select('*')
                           ->from('characters')
                           ->where('Id', $id)
                           ->get()
                           ->first_row();
    }

    public function update_avatar($guid, $id)
    {
        $data = array(
            'cms_avatar' => $id,
        );
        $this->db->where('Id', $guid)
                 ->update('accounts', $data);
    }

    public function update_mail($guid, $mail)
    {
        $data = array(
            'Email' => $mail,
        );
        $this->db->where('Id', $guid)
                 ->update('accounts', $data);
    }

    public function update_pass($guid, $pass)
    {
        $data = array(
            'PasswordHash' => $pass,
        );
        $this->db->where('Id', $guid)
                 ->update('accounts', $data);
    }

    public function recup_appearance_id($id)
    {
        return $this->db->select('*')
                        ->from('item_template')
                        ->where('id', $id)
                        ->get()
                        ->first_row();
    }

    public function table_item($guid)
    {
        return $this->db->select('*')
                        ->from('items')
                        ->where('guid', $guid)
                        ->get()
                        ->first_row();
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

    public function get_items_player($Id)
    {
        return $this->world->select('*')
                           ->from('characters_items')
                           ->where('OwnerId', $Id)
                           ->get()
                           ->result();
    }

    public function get_info_item($Id)
    {
        return $this->world->select('*')
                           ->from('items_templates')
                           ->where('Id', $Id)
                           ->get()
                           ->first_row();
    }
}