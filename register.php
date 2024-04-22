<?php
    include("connection.php");

    $name = $_POST['name'];
    $mob = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];
    
    

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "register(1).php";
            </script>';
    }
    elseif (strlen($mob)!=10) {
        echo '<script>
                alert("Mobile no must be 10 digits only!");
                window.location = "register(1).php";
            </script>'; 
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "insert into user (name, mobile, password, address, photo, status, votes, role) values('$name', '$mob', '$pass', '$add', '$image', 0, 0, '$role') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
    
?>