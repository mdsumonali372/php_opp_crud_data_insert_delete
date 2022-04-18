<?php 

Class User{
    // database connection
    public function __construct(){
       $serverhost  = 'localhost';
       $dbuser      = 'root';
       $dbpass      = '';
       $dbname      = 'oppcrud';
       $this->conn  =  mysqli_connect($serverhost, $dbuser, $dbpass, $dbname);
    }

    public function information($data){
        $username  = isset($data['username']) ? $data['username'] : NULL;
        $email     = isset($data['email']) ? $data['email'] : NULL;
        $upassword = isset($data['password']) ? $data['password'] : NULL;
        
        $usersqli  = "INSERT INTO student(username, email, password) VALUES ('$username', '$email', '$upassword')";

       $final1 =  mysqli_query($this->conn, $usersqli);

        if($final1){
            echo "success";
        }else{
            echo "wrong";
        }
  
    }
    // another form create method
    public function information1($data){
        
        $userinfo  = isset($data['userinfo']) ? $data['userinfo'] : NULL;
        $uemail    = isset($data['uemail']) ? $data['uemail'] : NULL;
        $password  = isset ($data['psw']) ? $data['psw'] : NULL;
        
        $userinfosql = "INSERT INTO userinfo(address, Email, password) VALUES ('$userinfo', '$uemail', '$password')";
        $final2 = mysqli_query($this->conn, $userinfosql);
    }

    public function viewdata(){
        $viewsql  = "SELECT * FROM student";
    
        return mysqli_query($this->conn, $viewsql);
    }
    // public function viewdata1(){
    //     $viewsql1  = "SELECT * FROM userinfo";
    
    //     return mysqli_query($this->conn, $viewsql1);
    // }

    // delete method
    public function deletedata($dlt){
        $dltdata   = "DELETE FROM student WHERE ID = '$dlt' ";

        mysqli_query($this->conn,$dltdata);
        header('Location: view.php');
    }


   
}




?>