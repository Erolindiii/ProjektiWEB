<?php 
require_once('DBS_Connection.php');
class Regjistrimi extends dbCon{
    private $username;
    private $email;
    private $password;
    private $dbConn;
    public function __construct($username,$email,$password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->dbConn = $this->connDB();
    }
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setUsername($username){
        $this->username=$username;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function inserto(){
        try{
            $sql = "INSERT INTO Studenti(username,email,password) VALUES(?,?,?)";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->username, $this->email, $this->password]);
        }catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>