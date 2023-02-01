<?php 
$name = "Update";
include 'config/database.php';
include 'view/header.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $db->getdata($id);
}
?>
 <form class="w-50 mx-auto mt-4 py-5 px-5 shadow-lg bg-tertiary " method="POST" action="update.php"  style=" border-radius:20px">
        <h1 class="text-center">Update Details</h1>
        <input type="hidden" name="user_id" value="<?php echo $result['user_id']?>"/>
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input name ="firstname" type="text" class="form-control" id="firstname" aria-describedby="emailHelp" value="<?php echo $result['firstname'] ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 ">
                <label for="middlename1" class="form-label">Middle Name</label>
                <input name ="middlename" type="text" class="form-control" id="middlename" value="<?php echo $result['middlename']?>" >
            </div>
            <div class="mb-3 " >
                <label for="lastname" class="form-label">Last Name</label>
                <input name ="lastname" type="text" class="form-control" id="lastname" aria-describedby="emailHelp" value="<?php echo $result['lastname']?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 ">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input name ="birthdate" type="text" class="form-control" id="birthdate" aria-describedby="emailHelp" value="<?php echo $result['birthdate']?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 ">
                <label for="at_address" class="form-label">Address</label>
                <input name ="at_address" type="text" class="form-control" id="at_address" aria-describedby="emailHelp" value="<?php echo $result['at_address']?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <button type="submit" class="btn btn-primary mt-4" name ="updatesubmit">Submit</button>
            </div>
           
        </form>

    

<?php
  include 'view/footer.php';

?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
 