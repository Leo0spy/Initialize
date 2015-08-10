<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Support_model extends CI_Model {

	public function get_info($guid)
	{
		return $this->db->select('*')
						->from('accounts')
						->where('Id', $guid)
						->get()
						->first_row();
	}

	public function get_tickets_open($guid)
	{
		return $this->db->select('*')
						->from('cms_tickets')
						->where('author', $guid)
						->where('closed', '0')
						->order_by('date', 'DESC')
						->get()
						->result();
	}

	public function get_tickets_close($guid)
	{
		return $this->db->select('*')
						->from('cms_tickets')
						->where('author', $guid)
						->where('closed', '1')
						->order_by('date', 'DESC')
						->get()
						->result();
	}

	public function get_nbr_answer($id)
	{
		$query = $this->db->select('*')
						  ->from('cms_tickets_answers')
						  ->where('ticket_id', $id)
						  ->get();
		return $query->num_rows();
	}

	public function add_ticket($title, $date, $guid, $label, $content)
	{
		$data = array(
			'title' => $title,
			'date' => $date,
			'author' => $guid,
			'label' => $label,
			'post' => $content,
		);
		return $this->db->insert('cms_tickets', $data);
	}

	public function get_info_ticket($id)
	{
		return $this->db->select('*')
						->from('cms_tickets')
						->where('id', $id)
						->get()
						->first_row();
	}

	public function get_answers($id)
	{
		return $this->db->select('*')
						->from('cms_tickets_answers')
						->where('ticket_id', $id)
						->order_by('date', 'ASC')
						->get()
						->result();
	}

	public function check_ticket($id)
	{
		$query = $this->db->select('*')
						  ->from('cms_tickets')
						  ->where('id', $id)
						  ->get();
		if($query->num_rows() > 0){
			return TRUE;
		}
	}

	public function add_answer($ticket_id, $content, $date, $author)
	{
		$data = array(
			'ticket_id' => $ticket_id,
			'author' => $author,
			'date' => $date,
			'post' => $content,
		);
		return $this->db->insert('cms_tickets_answers', $data);
	}

	public function close_ticket($id)
	{
		$data = array(
			'closed' => '1',
		);
		return $this->db->where('id', $id)
						->update('cms_tickets', $data);
	}

	public function get_bugtrackers()
	{
		return $this->db->select('*')
						->from('cms_bugtrackers')
						->order_by('vote', 'DESC')
						->get()
						->result();
	}

	public function add_vote($id, $chain, $vote)
	{
		$data = array(
			'vote' => $vote,
			'vote_account' => $chain,
		);
		return $this->db->where('id', $id)
						->update('cms_bugtrackers', $data);
	}

	public function add_bugtracker($author, $title, $chain, $content)
	{
		$data = array(
			'author' => $author,
			'title' => $title,
			'vote' => '0',
			'vote_account' => $chain,
			'content' => $content,
		);
		return $this->db->insert('cms_bugtrackers', $data);
	}
}