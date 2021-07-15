<?php
    class DbModel extends CI_Model{
        function __Construct(){
            parent::__construct();

            $this->load->database();
        }
        public function auth($email,$pass){
            $querry=$this->db->get("users");
            $tab=$querry->result_array();
            foreach ($tab as $t){
                if ($t['email']==$email && $t['pass']==$pass){
                    return $t;
                }
            }
            return NULL;
        }

        public function SaveUsers($nom,$email,$pass){
            $Q= "insert into users value(NULL,'$nom','$email','$pass')";
            $this->db->query($Q);
        }
    }