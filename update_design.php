
<?php include("connection.php"); 

$id = $_GET['id'];

$query = "SELECT * FROM form where id= '$id'";
$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css"
    <title></title>

</head>


<body>
    <div class="container">
        <form action="#" method="post">  
        <div class="title">
            Update Student Details
        </div>

        <div class="form">
            <div class="input_feild">
                <label>first name</label>
                <input type="text" value="<?php echo $result['first_name'];?>" class="input" name="fname" required>
            </div>
            <div class="input_feild">
                <label>last name</label>
                <input type="text" value="<?php echo $result['last_name'];?>" class="input" name="lname" required>
            </div>
            <div class="input_feild">
                <label>passowrd</label>
                <input type="password" value="<?php echo $result['password'];?>" class="input" name="password" required>
            </div>
            <div class="input_feild">
                <label>confrim password</label>
                <input type="password" value="<?php echo $result['c_password'];?>" class="input" name="conpassword" required>
            </div>
            <div class="input_feild">
                <label>Gender</label>
                <div class="custom_selectbox">

                <select name="gender" required>
                    <option value="">select</option>
                    
                    <option value="male"
                        <?php
                            if($result['gender'] == 'male')
                            {
                                echo "selected";
                            }
                        ?>
                    
                    
                    >
                
                    male</option>
                    <option value="female"
                        <?php
                            if($result['gender'] == 'female')
                            {
                                echo "selected";
                            }
                        ?>   
                    
                    >
                                            
                    female</option>
                </select>

                </div>
            </div>
            <div class="input_feild">
                <label>Email Adress</label>
                <input type="text" value="<?php echo $result['email'];?>" class="input" name="email" required>
            </div>
            <div class="input_feild">
                <label>Phone Number</label>
                <input type="text" value="<?php echo $result['phone_number'];?>" class="input" name="phone" required>
            </div>
            <div class="input_feild">
                <label>Address</label>
                <textarea class="textarea" name="address" required><?php echo $result['address'];?></textarea>
            </div>
            <div class="input_feild">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        </div>
        </form>
    </div>
</body>
</html>

<?php
    if($_POST['update'])
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pwd = $_POST['password'];
        $cpwd = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $adress = $_POST['address'];

        $query = "UPDATE form set first_name='$fname',last_name='$lname',password='$pwd',c_password='$cpwd',gender='$gender',email='$email',phone_number='$phone',address='$adress' WHERE id='$id'";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "<script>alert('Record Updated')</script>";
            ?>
                <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />
            <?php
        }
        else
        {
            echo "failed to update";
        }
    }
?>