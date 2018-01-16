<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('UsersModel');
    $this->load->helper('url_helper');
  }

	public function index()
	{
    $this->load->view('home.php');
	}

  //chceks if username exists during user registration
  public function check_username(){
    $username = $this->input->post('username');
    $exists = $this->UsersModel->username_exists($username);

    $count = count($exists);

    if ($count == 0) {
        echo true;
    } else {
        echo false;
    }
  }

  //creates a new User
  public function create_user(){
    /*
      Write form validation code here!
    */
    $this->UsersModel->set_user();
    echo "user created!!";
  }

}
