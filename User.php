<?php
require_once("connection.php");
class User extends dbConnect{ 
    private $id;
    private $name;
    private $surname;
    private $username;
    private $email;
    private $password;
    protected $dbcon;
   
    public function __construct(
        $id='',
        $name = '',
        $surname = '',
        $username = '',
        $email = '',
        $password = ''
    ){
        $this ->id = $id;
        $this ->name = $name;
        $this ->surname = $surname;
        $this -> username = $username;
        $this -> email = $email;
        $this -> password = $password;
        $this ->dbcon = $this->connect();
    }
    public function setId($id){
        return $this ->id= $id;
      }
    public function getId(){
      return $this -> id;
    }
    public function setName($name){
        return $this -> name = $name;
    }
    public function setSurname($surname){
        return $this -> surname = $surname;
    }
    public function setUsername($username){
        return $this -> username = $username;
    }
    public function setEmail($email){
        return $this -> email = $email;
    }
    public function setPassword($password){
        return $this -> password = $password;
    }
    public function getUserId(){
        return $this-> id;
    }
    public function getName(){
        return $this-> name;
    }
    public function getSurname(){
        return $this-> surname;
    }
    public function getUsername(){
        return $this-> username;
    }
    public function getEmail(){
        return $this-> email;
    }
    public function getPassword(){
        return $this-> password;
    }
    
    public function insertData(){
        $sql = "INSERT INTO user (name,surname,username,email,password) values(?,?,?,?,?)";
        $stm = $this->dbcon->prepare($sql);
        $stm->execute([$this->name,$this->surname,$this->username,$this->email,$this->password]);
        header('Location:LogIn.php'); 
        
    }
    public function readData(){
        $sql = "Select * from user";
        $stm = $this->dbcon->prepare($sql);
        $stm->execute();
        $result = $stm ->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function readDataByID($id){
        $sql = 'SELECT * from user where id = :id';
        $stm = $this->dbcon->prepare($sql);
        $stm->execute([':id'=>$this->id=$id]);
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result ;
    }
    public function updateData(){
        $sql = "UPDATE user SET name =?, surname=?, username=?, email=?,password=? where id=?";
        $stm=$this->dbcon->prepare($sql);
        $stm->execute([$this->name,$this->surname,$this->username,$this->email,$this->password,$this->id]);
    }
    public function deleteData($id){
        $sql="DELETE FROM user WHERE id =:id";
        $stm = $this->dbcon->prepare($sql);
        $stm->bindParam(":id",$id);
        $stm->execute();
        if($stm==true){
            echo "<script>
            alert('Te dhenat jane fshire me suksese');
            document.location='dashboard.php';
            </script>";

        }
        else{
            return false;
        }
    }
    public function LogIn($email,$password){
        $sql = "SELECT * from user where email =:email and password = :password";
       $stm = $this->dbcon->prepare($sql);
        $stm->execute([':email' =>$this->email=$email,':password'=>$this->password=$password]);
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        if($result){ 
            header("Location: index.php");
        }
        else{
            echo "Email or password are incorrect";
        }
        
    }
    public function getIDd($email){
        $sql = 'SELECT * from user where email=:email';
        $stm=$this->dbcon->prepare($sql);
        $stm ->execute([':email' => $this->email=$email]);
        $result=$stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getUsernamee($id){
        $sql = 'SELECT username from user where id=:id';
        $stm=$this->dbcon->prepare($sql);
        $stm ->execute([':id' => $this->id=$id]);
        $result=$stm->fetch(PDO::FETCH_ASSOC);
        echo $result;
    }
    public function checkEmail($email){
        $sql = "SELECT  * FROM user where email = :email";
        $stm = $this->dbcon->prepare($sql);
        $stm->execute([':email'=>$this->email = $email]);
        $result=$stm->fetch(PDO::FETCH_ASSOC);
        if($result==true){
            return true;
        }
    }



}
?>