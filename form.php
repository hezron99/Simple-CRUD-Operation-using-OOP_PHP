<?php
    $name = "Login";
  include 'view/header.php';
?>

        <form class="w-50 mx-auto mt-4 py-5 px-5 shadow-lg bg-tertiary " method="POST" action="insert.php"  style=" border-radius:20px">
        <h1 class="text-center">Registration Form</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input name ="firstname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Middle Name</label>
                <input name ="middlename" type="text" class="form-control" id="exampleInputPassword1"  placeholder="Middle Name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input name ="lastname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Last Name" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Birthdate</label>
                <input name ="birth" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Birthdate" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input name ="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Address" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <button type="submit" class="btn btn-primary mt-4" name ="submit">Submit</button>
            </div>
           
        </form>
<?php
  include 'view/footer.php';

?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
 