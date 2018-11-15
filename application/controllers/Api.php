<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('Api_m');
        $this->load->library('Ion_auth');
    }

    public function index()
    {
        echo 'Android API v1.0';
    }

    public function login()
    {
        $identity = $this->input->post('email');
        $password = $this->input->post('password');
        // $identity = "admin@admin.com";
        // $password = "password";
        //$result = $this->ion_auth->login($username, $password);
        //$result = $this->Api_m->login($username,$password);
      //  echo json_encode($result);

      $result = $this->ion_auth->login($identity, $password, FALSE);
      if ($result) {
          echo "Login";
      }else{
        echo "invalid";
      }
    }
}
?>