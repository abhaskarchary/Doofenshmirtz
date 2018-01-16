<?php
class UsersModel extends CI_Model {

        public function __construct()
        {
           $this->load->database();
        }

        //returns all users of given username (for checking duplicates for username)
        public function username_exists($username)
        {

          $this->db->select('*');
          $this->db->from('user');
          $this->db->where('username', $username);
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
        }

        // pushes data from registration page to database
        public function set_user(){
          $this->load->helper('url');
          $this->load->helper('date');
          $data = array(
          'name' => $this->input->post('name'),
          'username' => $this->input->post('username'),
          'password' => $this->input->post('password')
          //'date' => now()
          );

          return $this->db->insert('user', $data);
        }
}
