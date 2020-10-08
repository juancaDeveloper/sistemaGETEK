<?php
class Sacppv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata("login")){

            redirect(base_url());
        } 

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //base de datos
        $this->load->model('crud_model');
        
   
    }
   
    
    public function dashboard(){

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

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


   public function eliminar(){

    if($this->input->is_ajax_request()){
        $del_id= $this->input->post('del_id');

      if(  $this->crud_model->delete_entry($del_id)){

        $data=array('responce'=>'success');

      }else{

        $data=array('responce'=>'error');
       
      }

    }

    echo json_encode($data);
    


   }


   public function editar(){

   if($this->input->is_ajax_request()){
       $edit_id = $this->input->post('edit_id');
      if( $post = $this->crud_model->single_entry($edit_id)){
          
        $data = array('responce' => "success",'post'=> $post);



      } else{
          $data =array('responce'=>"error",'message'=>'fallo');
      }
   }

   echo  json_encode($data);


   }
 



 public function modificar(){


    if($this->input->is_ajax_request()){

        $this->form_validation->set_rules('edit_name', 'Nombre', 'required');
        $this->form_validation->set_rules('edit_email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE)
        {
                $data =array('responce'=>'error','message'=>validation_errors());
        }
        else
        {

             $data ['id']= $this->input->post('edit_id');
             $data ['nombre']= $this->input->post('edit_name');
             $data ['email']= $this->input->post('edit_email');
            
             if($this->crud_model->update_entry($data)){

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