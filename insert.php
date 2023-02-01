<?php 
$name = "View";
include 'config/database.php';
include 'view/header.php';

if(isset($_POST['submit'])){

    $name = $_POST['firstname'];
    $Mname = $_POST['middlename'];
    $lastname = $_POST['lastname']; 
    $birth = $_POST['birth'];
    $address = $_POST['address'];
    
   
    try {
        $result = $db->insert($name,$Mname,$lastname,$birth,$address);
        
        
        if($result){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your successfully Registered the data input!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            </div>";
        }else{
            echo "Failed to register";
        }

    }catch(Exception $e){
        print("Error: " . $e->getMessage());

    }
}

?>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-default navbar-fixed-top shadow-sm mb-5 px-5 ">
           <div class="nav ">
                <h1 class="display-3 ">Load Testing Project</h1>
           </div>
        </nav>
    </div>
</div>
<div class="container">
    <table class="table">
    <thead style="background-color:aliceblue;">
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Middle Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Address</th>
        <th scope="col" class="text-center">Action</th>
      

        </tr>
    </thead>
    <tbody>
       
        
            <?php
            
            $result1 = $db->getall();
             while($row = $result1->fetch(PDO::FETCH_ASSOC))  { ?>
            <tr>
                <td><?php echo $row['user_id']?></td>
                <td><?php echo $row['firstname']?></td>
                <td><?php echo $row['middlename']?></td>
                <td><?php echo $row['lastname']?></td>
                <td><?php echo $row['birthdate']?></td>
                <td><?php echo $row['at_address']?></td>
                <td class="text-center">
                    <a href="updateform.php?id=<?php echo $row['user_id']?>" class="btn btn-outline-warning">Update</a>
                    <a onclick=" return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $row['user_id']?>" class="btn btn-outline-danger">Delete</a>
                    
                </td>
                
            </tr>   
            <?php
         
            }?>
            
            
            
        </tr>
     
    </tbody>
    </table>
</div>
    


<?php 
include "view/footer.php";
?>


