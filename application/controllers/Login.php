<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        // VALIDATION RULES
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');


        // MODELO MEMBERSHIP
        // $this->load->model('membership_model', 'membership');
        // $query = $this->membership->validate();
        $this->load->model('login_model','login');
        $query = $this->login->validar();
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('home_header');
            $this->load->view('home_content_login');
            $this->load->view('home_sidebar');
        } else {

            if ($query) { // VERIFICA LOGIN E SENHA
                $data = array(
                    'email' => $this->input->post('email'),
                    'logado' => true
                );
                $this->session->set_userdata($data);
                redirect('noticias');
            } else {
                header("Location: http://127.0.0.1/sitApTecVesp2014/login");
            }
        }
    }
    function sair(){
        $this->session->unset_userdata('logado');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        redirect(base_url('login'));       
        
    }
}