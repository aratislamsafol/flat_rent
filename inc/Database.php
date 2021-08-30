<?php
    include($_SERVER['DOCUMENT_ROOT'].'/flat_rent_final/config/config.php');

    class Database{
        public $host    =   db_host;
        public $user    =   db_user;
        public $pass    =   db_pass;
        public $db      =   db_name;

        public $error;
        public $con;

        public function __construct(){
            $this->connection();
        }

        private function connection(){
            $this->con=new mysqli($this->host,$this->user,$this->pass,$this->db);
            if(!$this->con){
                $this->error=die("Connection Error :".$this->link->connect_error.__LINE__);

                return false;
            }
        }
    }
?>