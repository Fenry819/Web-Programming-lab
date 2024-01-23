<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="post">
        <label class="form-label">USER NAME:</label>
        <input type="text" class="form-control" name="username"><br><br>
        <label class="form-label">PASWORD:</label>
        <input type="text" class="form-control" name="pssd"><br><br>
        <button class="btn-submit" name="sub">submit</button>
    </form>
    </center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","student");
if(!$con)
{
    die("connection failed".mysqli_connect_error());
}
else{
    echo("connected sucessfully!!!");
}
if(isset($_POST["sub"]))
{
    $a=$_POST["username"];
    $b=$_POST["pssd"];
    $in="insert into login(loginname,password) values('$a','$b')";
    $ins=mysqli_query($con,$in);
    $sel="select * from login";
    $s=mysqli_query($con,$sel);
    echo " <table border='1'>";
    echo "<tr>";
    echo "<th>USER NAME</th><th> PASSWORD </th>";
    echo "</tr>";
    while($row=mysqli_fetch_assoc($s))
    {
        echo "<tr>";
        echo "<td>$row[loginname]</td>";
        echo "<td>$row[password]</td>";
        echo "</tr>";
       
    }
    echo "</table>";
}
?>
