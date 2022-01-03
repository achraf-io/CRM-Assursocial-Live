<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Si_lead_filter_model extends App_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	/**
	* @param  integer (optional)
	* @return object
	* Get single lead filter
	*/
	public function get($id = '')
	{
		$this->db->where('staff_id',get_staff_user_id());
		if (is_numeric($id)) {
			$this->db->where('id', $id);
			return $this->db->get(db_prefix() . 'si_lead_filter')->row();
		}
		return $this->db->get(db_prefix() . 'si_lead_filter')->result_array();
	}
	/**
	* get all filter templates of that staff
	*/
	public function get_member($id = '', $where = [])
    {
        $select_str = '*,CONCAT(firstname,\' \',lastname) as full_name';

        // Used to prevent multiple queries on logged in staff to check the total unread notifications in core/AdminController.php
        if (is_staff_logged_in() && $id != '' && $id == get_staff_user_id()) {
            $select_str .= ',(SELECT COUNT(*) FROM ' . db_prefix() . 'notifications WHERE touserid=' . get_staff_user_id() . ' and isread=0) as total_unread_notifications, (SELECT COUNT(*) FROM ' . db_prefix() . 'todos WHERE finished=0 AND staffid=' . get_staff_user_id() . ') as total_unfinished_todos';
        }

        $this->db->select($select_str);
        $this->db->where($where);

        if (is_numeric($id)) {
            $this->db->where('staffid', $id);
            $staff = $this->db->get(db_prefix() . 'staff')->row();

            if ($staff) {
                $staff->permissions = $this->get_staff_permissions($id);
            }

            return $staff;
        }
        $this->db->order_by('firstname', 'desc');

        return $this->db->get(db_prefix() . 'staff')->result_array();
    }
	public function get_staff_permissions($id)
    {
        // Fix for version 2.3.1 tables upgrade
        if (defined('DOING_DATABASE_UPGRADE')) {
            return [];
        }

        $permissions = $this->app_object_cache->get('staff-' . $id . '-permissions');

        if (!$permissions && !is_array($permissions)) {
            $this->db->where('staff_id', $id);
            $permissions = $this->db->get('staff_permissions')->result_array();

            $this->app_object_cache->add('staff-' . $id . '-permissions', $permissions);
        }

        return $permissions;
    }
	
	


	function get_templates($staff_id)
	{
		if (is_numeric($staff_id)) {
			$this->db->where('staff_id', $staff_id);
			return $this->db->get(db_prefix() . 'si_lead_filter')->result_array();
		}
		return array();
	}
	/**
	* Add new lead filter
	* @param mixed $data All $_POST data
	* @return mixed
	*/
	public function add($data)
	{
		$this->db->insert(db_prefix() . 'si_lead_filter', $data);
		$insert_id = $this->db->insert_id();
		if ($insert_id) {
			log_activity('New Lead Filter Added [Name:' . $data['filter_name'] . ']');
			return $insert_id;
		}
		return false;
	}
	/**
	* Update lead filter
	* @param mixed $data All $_POST data
	* @return mixed
	*/
	public function update($data,$filter_id)
	{
		$this->db->where('id',$filter_id);
		$update = $this->db->update(db_prefix() . 'si_lead_filter', $data);
		if ($update) {
			log_activity('Lead Filter Updated [Name:' . $data['filter_name'] . ']');
			return true;
		}
		return false;
	}
	/**
	* Delete lead filter
	* @param  mixed $id filter id
	* @return boolean
	*/
	public function delete($id,$staff_id)
	{
		$this->db->where('id', $id);
		$this->db->where('staff_id', $staff_id);
		$this->db->delete(db_prefix() . 'si_lead_filter');
		if ($this->db->affected_rows() > 0) {
			log_activity('Lead Filter Deleted [ID:' . $id . ']');
			return true;
		}
		return false;
	}
	/**
	* get lead company list
	* @return array
	*/
	public function get_leads_country_list()
	{
		$this->db->select(db_prefix() . 'leads.country as id,short_name as name');
		$this->db->where('country > ',0);
		$this->db->join(db_prefix() .'countries', db_prefix() .'countries.country_id='.db_prefix() .'leads.country','left');
		$this->db->group_by(db_prefix() . 'leads.country');
		$result = $this->db->get(db_prefix() . 'leads');
		if($result->num_rows() > 0)
			return $result->result_array();
		else
			return array();	
	}
}
