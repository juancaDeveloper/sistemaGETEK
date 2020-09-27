<?php
class Sacppv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //base de datos
        $this->load->model('crud_model');
        
   
    }


    public function inicio(){

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('pages/inicio');

        $this->load->view('templates/footer');


    }



    public function panel(){

        $this->load->view('templates/header');
        $this->load->view('pages/panel');

        $this->load->view('templates/footer');


    }

    public function insert(){

        if($this->input->is_ajax_request()){

            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() == FALSE)
            {
                    $data =array('responce'=>'error','message'=>validation_errors());
            }
            else
            {

                 $ajax_data = $this->input->post();
                
                 if($this->crud_model->insert_entry($ajax_data)){

                    $data =array('responce'=>'success','message'=> 'Datos Añadidos Ok');
                 } else {
                    $data =array('responce'=>'success','message'=> 'Datos Nooo añadidos');
                 }
            }

        } else{
            echo "No direct script access alolowed";
        }

        echo json_encode($data);

    }



   public function fetch(){

    if($this->input->is_ajax_request()){
        $posts = $this->crud_model->get_entries();

        echo json_encode($posts);


    }
   }




    
    //Page error403 prohibido
    public function error403()
    {
        $this->load->view('templates/error403');
    }
    //Page error404 no encontrado
    public function error404()
    {
        $this->load->view('templates/error404');
    }
}