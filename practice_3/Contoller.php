<?php
class Contoller{
    public $host='localhost';
    public $username='root';
    public $password='';
    private $dbname = "";
    public $conn;
function makeCoonection(){
    $con=mysqli_connect($this->host,$this->username
        ,$this->password,"$this->dbname");
    $result = true;
    $this->conn = $con;
    if(!$con){
        $result = false;
    }
    return $result;
}

function getAllData(){
    $sql = "SELECT * FROM users";
    $data = mysqli_query($this->conn,$sql);
    if(!$data)
    {
        echo "Query does not work.".mysqli_error($this->conn);die;
    }
    return $data;
}

    function deletedById($id){
        $sql = "delete FROM users where id =".$id;
        $data = mysqli_query($this->conn,$sql);
        if(!$data)
        {
            echo "Query does not work.".mysqli_error($this->conn);die;
        }
        return $data;
    }
    function setDbName($dbname){
            $this->dbname = $dbname;
    }
    function getDBname(){
    return $this->dbname;
    }

}


$webDB = new Contoller();
$webDB->setDbName("webapp_db");
$dbName = $webDB->getDBname();

echo "web db check :".$webDB->makeCoonection();
$dataQu = $webDB->getAllData();
while($data = mysqli_fetch_array($dataQu)){
 echo "name ".  $data['first_name'] ."<BR>";
}

$webDB->deletedById(2);
