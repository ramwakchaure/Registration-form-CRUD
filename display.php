<html>
<head>
    <title></title>
    <style>
        body
        .update, .delete
        {
            background-color: green;
            color: white;
            height: 20px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        .delete
        {
            background-color: red;
        }
    </style>
</head>

<?php

include("connection.php");

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;

if($total !=0 )
{
    ?>
    
    <h2 align="center">ALL RECORDS</h2>
    <table border="3px" cellspacing="5" align="center">
        <tr>
        <th width="5%">ID</th>
        <th width="8%">First name</th>
        <th width="8%">Last name</th>
        <th width="9%">Gender</th>
        <th width="19%">Email</th>
        <th width="12%">Phone number</th>
        <th width="23%">Address</th>
        <th width="30%">Operations</th>
        </tr>
  




    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['first_name']."</td>
                <td>".$result['last_name']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone_number']."</td>
                <td>".$result['address']."</td>

                <td><a href='update_design.php?id=$result[id]'><input type='submit' value='update' class='update'</a>
                <a href='delete_design.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick ='return checkdelete()'</a></td>
            </tr>
            ";
    }
}
else
{
    echo "No records found";
}
?>
</table>

<script>
    function checkdelete()
    {
         return confirm('Are you sure you want to delete this record ?');
    }
</script>


