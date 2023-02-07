<?php

class Controller{
    public $host='localhost';
    public $username="root";
    public $password="";
    public $dbname = "";
    public $conn;
    public $table;
    function makeConnection(){
        $con=mysqli_connect($this->host,$this->username
            ,$this->password,"$this->dbname");
        $status = true;
        $this->conn = $con;
        if(!$con)
        {
            $status  = false;
        }
        return   $status;
    }
    function getAllData(){

        $sql = "SELECT * FROM ".$this->table;

        $query = mysqli_query($this->conn,$sql);

        if(!$query)
        {
            echo "Query does not work.".mysqli_error($this->conn);die;
        }
        return $query;
    }
    function delete($id){
        $sql = "delete FROM ".$this->table." where id=".$id;
        $query = mysqli_query($this->conn,$sql);
        if(!$query)
        {
            echo "Query does not work.".mysqli_error($this->conn);die;
        }
        return $query;
    }
    function update(){
        $sql = "update ".$this->table ."set ...";
        $query = mysqli_query($this->conn,$sql);
        if(!$query)
        {
            echo "Query does not work.".mysqli_error($this->conn);die;
        }
        return $query;
    }
}
$myDb = new Controller();
$myDb->dbname ="webapp_db";
$myDb->table ="users";
$checkCon = $myDb->makeConnection();
$qr = $myDb->getAllData("users");
$myDb->delete(6);
while($data = mysqli_fetch_array($qr)){
    echo  $data['id']."-".$data['first_name'] ."<BR>";
}

$myDb = new Controller();
$myDb->dbname ="webapp_db_2";
$myDb->table ="students";

