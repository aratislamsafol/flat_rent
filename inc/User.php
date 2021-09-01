<?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/flat_rent_final/inc/Session.php');

    class Users{
        private $ok;

        public function __construct() {
            $this->ok = new Database();
        }

        public function getlogin($data){
            $useremail=$data['user_email'];
            $userpass=$data['user_pass'];

            if($useremail == '' || $userpass== ''){
                $failed='<div class="alert alert-danger" role="alert">Field should not be empty.</div>';
                
                return $failed;
            }else{
                $useremail=strtolower($useremail);
                $userpass=md5($userpass);
            }


            $check_email=$this->checkemail($useremail);

            if($check_email == false){
                $failed = '<div class="alert alert-danger" role="alert">Email not found. Please check your email.</div>';
            
                return $failed;
            }

            // $check_username=$this->CheckUsername($username);

            // if($check_username == false){
            //     $failed = '<div class="alert alert-danger" role="alert">username not found. Please check your email.</div>';
            
            //     return $failed;
            // }

            $loggin=$this->getloggin($useremail,$userpass);
            
            if($loggin){
                echo"Success";
            }
            else{
                echo"not";
            }
            
            // if($loggin){
            //     Session::init();
            //     Session::set('Loggin',true);
            //     Session::set('user_id',$loggin['user_id']);
            //     Session::set('user_name',$loggin['user_name']);
            //     Session::set('user_email',$loggin['user_email']);
            //     Session::set('user_mobile',$loggin['user_mobile']);
            //     Session::set('user_address',$loggin['u_add']);

            //     header("Location:admin/Index.php");

            // }
            // else{
            //     $failed = '<div class="alert alert-danger" role="alert">Email or Password not match.</div>';

            //     return $failed;
            // }
        }

        public function getloggin($useremail,$userpass){
            $sql="SELECT* FROM users WHERE user_email='$useremail' AND user_pass='$userpass' LIMIT 1";
            $result=$this->ok->con->query($sql);
            $get_data=$result->fetch_assoc();

            return $get_data;
        }

        

        public function signup($data){

            $first_name =   $data['u_fname'];
            $last_name  =   $data['u_lname'];
            $username   =   $data['username'];
            $gender     =   $data['user_gender'];
            $mobile     =   $data['u_mobile'];
            $user_add   =   $data['u_add'];
           
            $useremail  =   $data['user_email'];
            $userpass   =   $data['user_pass'];
            $u_con_pass =   $data['con_user_pass'];

            $user_image     =   $_FILES['user_img']['name'];

            if($first_name == '' || $last_name == '' ||  $username == '' || $gender == '' || $mobile == '' 
            || $useremail == '' || $userpass == '' ||$u_con_pass == ''){
                $failed = '<div class="alert alert-danger" role="alert">Field should not be empty.</div>';
            
                return $failed;
            }else{
                $useremail   =   strtolower($useremail);
                // $username    =   strtolower($username);
            }

            if($userpass == $u_con_pass){
                $userpass    =   md5($userpass);
            }else{
                $failed = '<div class="alert alert-danger" role="alert">password And Confirm Password Not Match.</div>';
            
                return $failed;
                
            }

            if(!filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
                $failed = '<div class="alert alert-danger" role="alert">Invalid email format.</div>';
                
                return $failed;
            }

            $check_email = $this->checkemail($useremail);

            if($check_email == true){
                $failed = '<div class="alert alert-danger" role="alert">Email already exist.</div>';
            
                return $failed;
            }

            $CheckUsername=$this->CheckUsername($username);

            if($CheckUsername == true){
                $failed = '<div class="alert alert-danger" role="alert">Username already taken.</div>';
            
                return $failed;
            }

            if(strlen($username) > 8){
                $failed = '<div class="alert alert-danger" role="alert">Username mustnot above 8 digit</div>';
            
                return $failed;
            }else{
                $username = $username;
            }

            $reg_sql="INSERT INTO users(user_firstname,user_lastname,user_name,user_gender,user_mobile,user_email,user_pass,user_photo,u_add,created_at) 
            VALUES('$first_name','$last_name','$username','$gender','$mobile','$useremail','$userpass','$user_image','$user_add',NOW())";
            
            $reg_con=$this->ok->con->query($reg_sql);

            if($reg_con){

                $user_image_tmp =   $_FILES['user_img']['tmp_name'];
                move_uploaded_file($user_image_tmp,"assets/img/user_img/$user_image");

                $msg = '<div class="alert alert-success" role="alert">Registration Complete.</div>';

                return $msg;
                
            }else{
                $msg = '<div class="alert alert-danger" role="alert">Registration unsuccess.</div>';

                return $msg;
            }  
        }

        public function checkemail($data){
            $sql="SELECT*FROM users WHERE user_email='$data'";
            $result=$this->ok->con->query($sql);

            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        public function CheckUsername($data){
            $sql="SELECT*FROM users WHERE user_name='$data'";
            $result=$this->ok->con->query($sql);

            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

    }
?>
