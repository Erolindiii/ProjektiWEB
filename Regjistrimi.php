<?php 
require_once('DBS_Connection.php');
class Regjistrimi extends dbCon{
    private $Emri;
    private $Email;
    private $Password;
    private $dbConn;
    public function __construct($Emri,$Email,$Password){
        $this->Emri = $Emri;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->dbConn = $this->connDB();
    }
    public function getEmri(){
        return $this->Emri;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function getPassword(){
        return $this->Password;
    }
    public function setEmri($Emri){
        $this->Emri=$Emri;
    }
    public function setEmail($Email){
        $this->Email=$Email;
    }
    public function setPassword($Password){
        $this->Password=$Password;
    }
    public function inserto(){
        try{
            $sql = "INSERT INTO Studenti(Emri,Email,Password) VALUES(?,?,?)";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->Emri, $this->Email, $this->Password]);
        }catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>