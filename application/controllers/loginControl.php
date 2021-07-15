<?php
    class LoginControl extends CI_Controller{
        function __construct(){
            parent::__construct();
          
            $this->load->model("dbModel");
            $this->load->library("session");
        }


        public function view(){ 
            $title='tody';
            $data['title']=$title;
            $data['age']=1;           

            $this->load->view("loginView",$data);

            $this->session->set_userdata($data);
        }
        public function authLogin(){
            $email=$this->input->post("email");
    
            $pass=$this->input->post("pass");

            $user=$this->dbModel->auth($email,$pass);
            if($user){
                echo 'success'; 
            }else{
                redirect ("loginControl/view");
            }
        }


        public function view2(){
            $title2=$this->session->userdata('title');
            echo $title2;
        }


        public function inscription(){

            $this->load->view('InscView');
        }
        public function authInsc(){
            $email=$this->input->post("email");
            $pass=$this->input->post("pass");
            $nom=$this->input->post("nom"); 

            $this->dbModel->SaveUsers($nom,$email,$pass);
            echo 'success';
        }
    }