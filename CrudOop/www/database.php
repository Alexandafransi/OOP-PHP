<?php

    class Database{

        private $connection;

        function __contruct(){
            $this->connect_bd();
        }
        public function connect_bd(){
            $this->connection=mysqli_connect('db','user','test','myDb');

            if(mysqli_connect_error()){
                die("Database connection failed".mysqli_connect_error() .mysqli_connect_errno());
            }
        }

        public function create($fullname, $gender, $username, $email, $upload,$password){
            $sql="INSERT INTO crud(full_name,gender,username,email,photo,password) VALUES('$fullname', '$gender', '$username', '$email', '$upload','$password')";
             move_uploaded_file($_FILES['image']['tmp_name'], $upload);

            $reslt=mysqli_query($this->connection,$sql);

            if($reslt){

                return true;
            }else{
                return false;
            }
        }
    
        public function escp(){

            $return =mysqli_real_escape_string($this->connection,$var);

            return $return;
        }


        public function read($id=null){

            $sql="SELECT * FROM crud";
            if($id){
                $id .= "WHERE id =$id";
            }
            $res=mysqli_query($this->connection,$sql);
            return $res;
        }

        public function update($fullname, $gender, $username, $email, $upload,$id){
            $sql="UPDATE crud SET full_name='$fullname', gender='$gender',username='$username', email='$email' , photo='$upload'  WHERE id=$id";
            $res = mysqli_query($this->connection, $sql);
		        if($res){
			return true;
		}else{
			return false;
		}
        }
}
$database=new Database();
$database->connect_bd();

?>