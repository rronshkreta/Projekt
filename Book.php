<?php
require_once("connection.php");
class Book extends dbConnect{
    private $id;
    private $photo;
    private $isbn;
    private $name;
    private $description;
    private $price;
    private $link;
    protected $dbcon;

    public function __construct (
        $id = '',
        $photo='',
        $isbn='',
        $name='',
        $description='',
        $price='',
        $link =''
        ){ 
        $this ->id = $id;
        $this -> photo = $photo;
        $this -> isbn = $isbn;
        $this-> name = $name;
        $this -> description = $description;
        $this -> price = $price;
        $this->link=$link;

        $this->dbcon=$this->connect();
    }

    public function setPhoto($photoo){
        return $this ->photo = $photoo;
    }
    public function setIsbn($isbnn){
        return $this ->isbn = $isbnn;
    }
    public function setName($namee){
        return $this ->name = $namee;
    }
    public function setDescription($descriptionn){
        return $this->description = $descriptionn;
    }
    public function setPrice($pricee){
        return $this ->price = $pricee;
    }
    public function getId(){
        return $this ->id;
    }
    public function getPhoto(){
        return $this ->photo;
    }
    public function getIsbn(){
        return $this -> isbn;
    }
    public function getName(){
        return $this -> name;
    }
    public function getDescription(){
        return $this -> description;
    }
    public function getPrice(){
        return $this-> price;
    }
    public function setLink($linkk){
        return $this ->link = $linkk;
    }
    public function getLink(){
        return $this ->link;
    }
    public function insertData(){
        $sql = "INSERT into book (photo,isbn,name,description,price,link) values(?,?,?,?,?,?)";
        $stm = $this->dbcon->prepare($sql);
        $stm->execute([$this->photo,$this->isbn,$this->name,$this->description,$this->price,$this->link]);
        header("Location:dashboard.php");
    }
    public function readData(){
        $sql = 'SELECT * from book';
        $stm = $this->dbcon->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function readRandomData(){
        $sql = 'SELECT * FROM book ORDER BY RAND() LIMIT 8';
        $stm = $this->dbcon->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
        public function readDataById($id){
            $sql = 'SELECT * from book where id = :id';
            $stm=$this->dbcon->prepare($sql);
            $stm->execute([':id'=> $this->id=$id]);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result; 
        }
        public function updateData(){     
            $sql = "UPDATE book SET photo =?,isbn=?, name=? , description=? ,price=?,link=? where id=?";
            $stm=$this->dbcon->prepare($sql);
            $stm->execute([$this->photo,$this->isbn,$this->name,$this->description,$this->price,$this->link,$this->id]);
        }
        public function deleteData($id){
            $sql="DELETE FROM book WHERE id =:id";
            $stm=$this->dbcon->prepare($sql);
            $stm->bindParam(":id",$id);
            $stm->execute();
            if($stm==true){
                //echo "<script>
               // alert('dhenat jane DELETE me sukses');
                //document.location='dashboard.php';
               // </script>";
               header("Location:dashboard.php");
            }
            else{
                return false;
            }
        }
        /*public function layout(){
            $sql = "select * from book";
            $result = mysqli_query($con,$sql);
            if($result){ 
                while($row= mysqli_fetch_assoc($result)){
                   $this->photo = $row['photo'];
                       $this->isbn = $row['isbn'];
                       $this->name =$row['name'];
                       $this ->description = $row['description'];
                       $this ->price = $row['price'];
            
                echo '<div class="book">
                <a href="#">
                    <figure class="book-img-wrapper">
                    <input type="image" src="'.$this->photo.'" style="float:right" width="48" height="48">
                    </figure>
                </a>
                <div class = "book-isbn">
                <a class="isbn-title-link" href="#">'.$this->isbn.'</a>
                </div>
                <div class="book-title">
                    <a class="book-title-link" href="#">'.$this ->name.'</a>
                </div>
                <div class="book-description">
                <p>'.$this->description.'</p>
                </div>
                <div class="book-price">
                    '.$this ->price.'
                </div>    
            </div>';
        }
    }
    
     }*/
    
    }
?>