<?php 

defined('BASEPATH') or exit('No direct script access allowed');



class Services_model extends App_Model
{

  public function getService(){
   // $this->db->where('id',$user_id);
    $this->db->select('*');
    $this->db->from('service');
   // $this->db->join('staff', 'equipe_id = id');
   // $this->db->limit(3);
  // $this->db->where('id',$user_id);
   $query = $this->db->get();
    //print_r($query);
    return $query->result();
 
}
/* public function insert_user($data){
  $query = $this->db->insert('staff',$data)
} */
  /*public function getStaff($user_id){
   // $this->db->where('id',$user_id);
    $this->db->select('*');
    $this->db->from('equipe');
    //$this->db->join('staff', 'staffid = equipe.personname');
   // $this->db->limit(3);
   $this->db->where('id',$user_id);
    $query = $this->db->get();
    //print_r($query);
    return $query->result();

}*/
        
  //protected  $table = 'Equipe';

/*   public function __construct()
  {
      parent::__construct();
  }

  public function get($id = '')
    {
      $this->db->select('*');
    } */
}