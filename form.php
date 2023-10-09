<?php include("connection.php"); ?>

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
            Registration form
        </div>

        <div class="form">
            <div class="input_feild">
                <label>first name</label>
                <input type="text" class="input" name="fname" required>
            </div>
            <div class="input_feild">
                <label>last name</label>
                <input type="text" class="input" name="lname" required>
            </div>
            <div class="input_feild">
                <label>passowrd</label>
                <input type="password" class="input" name="password" required>
            </div>
            <div class="input_feild">
                <label>confrim password</label>
                <input type="password" class="input" name="conpassword" required>
            </div>
            <div class="input_feild">
                <label>Gender</label>
                <div class="custom_selectbox">
                <select name="gender" required>
                    <option value="">select</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
                </div>
            </div>
            <div class="input_feild">
                <label>Email Adress</label>
                <input type="text" class="input" name="email" required>
            </div>
            <div class="input_feild">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone" required>
            </div>
            <div class="input_feild">
                <label>Address</label>
                <textarea class="textarea" name="address" required></textarea>
            </div>
            <div class="input_feild">
                <input type="submit" value="Register" class="btn" name="regsiter">
            </div>
        </div>
        </form>
    </div>
</body>
</html>

<?php
    if($_POST['regsiter'])
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pwd = $_POST['password'];
        $cpwd = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $adress = $_POST['address'];

        $query = "INSERT INTO Form (first_name,last_name,password,c_password,gender,email,phone_number,address) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$adress')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data inserted into database";
        }
        else
        {
            echo "failed";
        }
    }
?>