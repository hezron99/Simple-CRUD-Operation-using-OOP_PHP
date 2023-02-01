<?php
class db{
    private $dbName;

    public function __construct($dsn){
        $this->dbName = $dsn;
    }

    public function insert($name,$Mname,$lastname,$birth,$address){
        try{
            $sql = "INSERT INTO tbl_employee_info (firstname, middlename, lastname, birthdate, at_address) VALUES
            (:fname,:Mname,:lastname,:birth,:at_address);";
            $stmt = $this->dbName->prepare($sql);
            $stmt->bindParam(':fname',$name);
            $stmt->bindParam(':Mname',$Mname);
            $stmt->bindParam(':lastname',$lastname);
            $stmt->bindParam(':birth',$birth);
            $stmt->bindParam(':at_address',$address);
            $stmt->execute();
            return True;

        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
            return False;
        }   
    }
    public function getall(){
        try{
            $sql = "SELECT * FROM tbl_employee_info";
            $stmt = $this->dbName->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
          
        }
    }
    public function getdata($id){
        try{
            $sql= "SELECT * FROM tbl_employee_info WHERE user_id = :id";
            $stmt = $this->dbName->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;

        }catch (PDOException $e){
            throw new PDOException($e->getMessage());
        }
       

    }
    public function getUpdate($id,$name,$Mname,$lastname,$birth,$address){
        $sql = "UPDATE `tbl_employee_info` SET firstname=:firstname, middlename=:middlename, lastname=:lastname, birthdate=:birthdate, at_address= :at_address WHERE user_id= :user_id";
        $stmt = $this->dbName->prepare($sql);
       
        $stmt->bindParam(':firstname',$name);
        $stmt->bindParam(':middlename',$Mname);
        $stmt->bindParam(':lastname',$lastname);
        $stmt->bindParam(':birthdate',$birth);
        $stmt->bindParam(':at_address',$address);
        $stmt->bindParam(':user_id',$id);
        $stmt->execute();
        $result = $stmt->fetchALL();

        return $result;
    }
    public function getdelete($id){
        $sql = "DELETE FROM tbl_employee_info WHERE user_id = :user_id";
        $stmt = $this->dbName->prepare($sql);
        $stmt->bindParam(':user_id',$id);
        $stmt->execute();
        return $stmt;
    }

    

}

?>