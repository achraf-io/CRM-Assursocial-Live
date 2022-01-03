<?php
defined('BASEPATH') or exit('No direct script access allowed');




class Equipe extends AdminController {

    /*public function __construct()
    {
        parent::__construct();
        $this->load->model('Equipe_model','Equipe');
        
    }*/

    
    
    /*public function index($user_id)
    {
        $this->load->model('Equipe_model','equipe');
        $test_data['user'] = $this->equipe->getEquipe($user_id);
        
        //print_r($test_data);
        /* $db = \config\database::connect();
        $builder = $db->table('Equipe');
        $query = $builder->get();

         foreach ($query->getResult() as $row) {
         echo $row->id;
        } 
        $Equipe = $db->query("SELECT * FROM Equipe ");
        foreach($Equipe->getResultArray() as $row){
            d($row);
        } 
        //$this->Equipe->get();
       
        $data['title'] = 'Ma Page';
        $this->load->view('admin/Equipe/Equipe_view',$test_data);
    }*/
   /*  public function display($user_id)
    {
        $this->load->model('Equipe_Model','equipe');
         $test_data['user'] = $this->equipe->getEquipe($user_id);
        
              
        //$data['title'] = 'Ma Page';
         $this->load->view('admin/Equipe/Equipe_view',$test_data);
    } */
    public function displayEquipe()
    {
       /*  $this->load->model('Staff_model','staff');
         $data['user'] = $this->staff->getStaff($user_id); */
         $this->load->model('Equipe_model','equipe');
         $data['user'] = $this->equipe->getEquipe();
         
        //$data['title'] = 'Ma Page';
       
         $this->load->view('admin/staff/member',$data);
    }    
    /*public function display($user_id)
    {
       /*  $this->load->model('Staff_model','staff');
         $data['user'] = $this->staff->getStaff($user_id); 
         $this->load->model('Equipe_model','equipe');
         $test_data['user'] = $this->equipe->getEquip($user_id);
         
        //$data['title'] = 'Ma Page';
       
        $this->load->view('admin/Equipe/Equipe_view',$test_data);
    }  */
    
    
}