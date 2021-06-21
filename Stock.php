<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stock extends CI_Controller {
    public function _construct()
{
    parent::__construct();
    $this->load->helper("url");
}

public function index()
{
    $this->load->view('search');
}

public function search_keyup()            /* Get search option  */
{
    $ajax=[];
    $html='';
    $ajax['status']='fail';
    if($serach=$this->input->post('keyword'))
    {
    $this->load->model('Stock_model');
    if($result=$this->Stock_model->get_search($serach)){
     $ajax['status']='success';
     foreach($result as $value)
     {
        $html.='<li onclick="select_comp('.$value->id.')" id="stock_'.$value->id.'">'.$value->name.'</li>';
     }
     $ajax['html']=$html;
    }
}
    echo json_encode($ajax);
}


public function view_company()           /* Get data for specific company  */
{
    $ajax=[];
    $ajax['status']='fail';
    if($cmp_id=$this->input->post('cmp_id'))
    {
    $this->load->model('Stock_model');
    if($result=$this->Stock_model->get_company($cmp_id)){
     $ajax['status']='success';    
     $ajax['html']=$result;
    }
}
    echo json_encode($ajax);
}

}