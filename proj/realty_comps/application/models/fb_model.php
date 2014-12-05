<?php

class Fb_model extends CI_Model {

    // $sql[] = "create table `users` (
    //     `id` int(8) AUTO_INCREMENT PRIMARY KEY,
    //     `email` varchar(100)
    // );";

    // $sql[] = "create table `fb` (
    //     `id` int(8) AUTO_INCREMENT PRIMARY KEY,
    //     `users_id` int(8), 
    //     `data` text,
    //     FOREIGN KEY fk_users_id(`users_id`) REFERENCES `users`(`id`)
    //     );
    // ";


     // var $title   = '';
     // var $content = '';
     // var $date    = '';

     function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
    function hi(){
        echo "HI";
    }

    function get_user_by_email($email)
    {
        $sql = "SELECT * FROM users WHERE email = ?"; 
        $ret = $this->db->query($sql, array($email));
        return $ret->result() ;
    }

    function insert_into_user($email)
    {

        $this->email = $email;
        $this->db->insert('users', $this);
    }


    function select_from_fb_by_users_id($users_id)
    {
        $sql = "SELECT * FROM fb WHERE users_id = ?"; 
        $ret = $this->db->query($sql, array($users_id));
        return $ret->result() ;
    }

    function insert_into_fb($users_id, $post)
    {

        $this->users_id = $users_id;
        $this->data = $post;

        $this->db->insert('fb', $this);
    }

    function update_fb( $fb_row_id, $post_data)
    {
        $this->data   = $post_data;
        // $this->content = $_POST['content'];
        // $this->date    = time();
        $this->db->update('fb', $this, array('id' => $fb_row_id ));
    }


    function select_from_fb_by_fb_id($fb_row_id)
    {
        $sql = "SELECT * FROM fb WHERE id = ?"; 
        $ret = $this->db->query($sql, array($fb_row_id));
        return $ret->result() ;
    }







     function get_last_ten_entries()
     {
         $query = $this->db->get('entries', 10);
         return $query->result();
     }

     function insert_entry()
     {
         $this->title   = $_POST['title']; // please read the below note
         $this->content = $_POST['content'];
         $this->date    = time();

         $this->db->insert('entries', $this);
     }

     function update_entry()
     {
         $this->title   = $_POST['title'];
         $this->content = $_POST['content'];
         $this->date    = time();

         $this->db->update('entries', $this, array('id' => $_POST['id']));
     }

}

 ?>
