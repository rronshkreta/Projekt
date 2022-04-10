<?php
class dbConnect{ 
    private $con=null;
    private $servername = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "databaza";

   
    public function connect(){ 
    try {
        $this->con = new PDO("mysql:servername=$this->servername;dbname=$this->dbname",
        $this->user, $this->password);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
        $this->con->setAttribute(PDO::FETCH_BOUND, PDO::FETCH_BOTH);
        // $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC) . "<br/>";
        // echo "Lidhja me: {$this->dbname} - {$this->host}: eshte ralizuar me sukses!";
        } catch (PDOException $pdoe) {
        die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
        }
        return $this->con;
        }
}
        
?>