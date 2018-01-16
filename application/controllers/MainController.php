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
		//$this->load->view('welcome_message');
    $this->load->view('home.php');
	}

  //chceks if username exists during user registration
  public function check_username(){
    //echo "hi";
    $username = $this->input->post('username');
    $exists = $this->UsersModel->username_exists($username);
    //echo $exists;

    $count = count($exists);
    //echo $count;

    if ($count == 0) {
        //echo "returned true";
        echo true;
    } else {
      //echo "here";
        echo false;
    }
  }

  //creates a new User
  public function create_user(){
    $this->UsersModel->set_user();
    echo "user created!!";
  }

}
