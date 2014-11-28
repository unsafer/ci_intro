<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    
    
    public function index(){

        $this->login();
    }
    
    public function login(){
        $this->load->view('view_login');
    }

//    public function hello(){
//        echo "algo mas <br>";
//    }
    
    public function login_validation() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
        
        if($this->form_validation->run()){
            $data = array(
                'email' => $this->input->post('email'),
                'is_logged_in' => 1
            );
            $this->session->set_userdata($data);
            redirect('site/sesion');
        } else{
            
            redirect('');
        }
    }
    
    public function validate_credentials(){
        $this->load->model('model_users');
        
        if($this->model_users->can_log_in()){
            return true;
        } else {
            $this->form_validation->set_message('validate_credentials', 'Incorrect username/password.');
            return false;
        }
    }


    public function sesion(){
        if($this->session->userdata('is_logged_in')){
            $this->home();
        } else{
            redirect('site/restricted');
        }        
    }
    
    public function restricted(){
        $this->load->view('view_restricted');
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('');
    }
    
//    public function addStuff(){
//        $this->load->model("math");
//        echo $this->math->add(6,6);
//    }
    
    public function home(){
        if($this->session->userdata('is_logged_in')){
            $data['title'] = "Home!";
            $this->load->view("view_home", $data);
        } else{
            redirect('site/restricted');
        }        
    }
//    public function asignar(){
//        $data['title'] = "Insumos!";      
//        $this->load->model("math");
//        $this->math->asignar1();
//        $data['total'] = $this->math->total();
//        $this->load->view("insumos", $data);
//    }
    
    //esta es de pruebaaaaa
//    public function example(){
//        $data['title'] = "Ejemplo!";
//        $this->load->view("view_example", $data);
//    }
    public function insumos(){
        if($this->session->userdata('is_logged_in')){
            $data['title'] = "Insumos!";
            $this->load->model("gastos_db");
            $data['results'] = $this->gastos_db->getGastos();
            //print_r($data);
            $this->load->view("view_insumos", $data);
        } else{
            redirect('site/restricted');
        }         
    }
    
//    public function save(){
//        $this->load->model('testformmodel');
//        if($this->input->post('submit')){
//            $this->testformmodel->process();
//        }
//        redirect("site");
//    }
    
    //termina acaaaaaaaaaaa
    
    public function frutas(){
        if($this->session->userdata('is_logged_in')){
            $data['title'] = "Frutas!";
            $this->load->model("frutas_db");
            $data['results'] = $this->frutas_db->getFrutas();        
            $this->load->view("view_frutas", $data);
        } else{
            redirect('site/restricted');
        }        
    }
        
//    public function updateValues(){
//        $this->load->model("get_db");
//        $newRow = array(
//            "name" => "angie"
//        );
//        $this->get_db->update1($newRow);
//        echo "ha sido actualizado";
//    }
    
    public function jugos(){
        if($this->session->userdata('is_logged_in')){
            $data['title'] = "Jugos!";
            $this->load->model("jugos_db");
            $data['jugos'] = $this->jugos_db->getJugos();
            //print_r($data);
            $this->load->view("view_jugos", $data);
        } else{
            redirect('site/restricted');
        } 
    }
    //    modificar
    function modificar_agua(){
        if($this->session->userdata('is_logged_in')){
            $this->load->model('gastos_db');
            $this->gastos_db->update_agua();
            $this->insumos();
        } else{
            redirect('site/restricted');
        }        
    }
    
    function modificar_azucar(){
        if($this->session->userdata('is_logged_in')){
            $this->load->model('gastos_db');
            $this->gastos_db->update_azucar();
            $this->insumos();
        } else{
            redirect('site/restricted');
        }        
    }
    function modificar_leche(){
        if($this->session->userdata('is_logged_in')){
            $this->load->model('gastos_db');
            $this->gastos_db->update_leche();
            $this->insumos();
        } else{
            redirect('site/restricted');
        }
    }
    function gastos_comunes(){
        if($this->session->userdata('is_logged_in')){
            $this->load->model('gastos_db');
            $this->gastos_db->update_gastoscomunes();
            $this->insumos();
        } else{
            redirect('site/restricted');
        }        
    }
    function mano_obra(){
        if($this->session->userdata('is_logged_in')){
            $this->load->model('gastos_db');
            $this->gastos_db->update_manodeobra();
            $this->insumos();
        } else{
            redirect('site/restricted');
        }         
    }
    function modificar_frutas(){
        if($this->session->userdata('is_logged_in')){
            $nombre_fruta = $_POST['nombre_fruta'];
            $precio_fruta = $_POST['precio_fruta'];
            $this->load->model('frutas_db');
            $this->frutas_db->update_fruta($nombre_fruta,$precio_fruta);
            $this->frutas();
        } else{
            redirect('site/restricted');
        }
        
    }
}