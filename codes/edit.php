<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
    body{
            position: absolute;
            top: 50%;
            left:40%;
            transform: translate(0, -50%);
            border: 2px solid black;
            border-radius: 10px 40px;
            width:200px;
            text-align: center;
            padding: 50px;
            background-color:#e6e6fa;
        }
        input[type=text]{
            height:20px;
            width:200px;
        }
        input[type=submit]{
            font-size:20px;
            height:25px;
            text-align:center;
            margin:5px;
        }
        label{
            font-size:20px;
        }
        button{
            font-size:15px;
            height:25px;
        }
    </style>
</head>
<body>
    <a href="index.html"><button>Go to Main page</button></a>
    <br><br>
    <h3>Enter name of student you want to edit</h3>
    <form method="post" action="#">
        <label for="Name">Name</label>
        <input type="text" id="Name" name="Name">
        <br><br>
        <h3>Please enter year of study to update</h3>
        
        <label for="year">Year</label> <br>
        <input type="text" id="year" name="Year_of_Study">  
        <br><br>
        <input type="submit" value="submit">
    </form>
    <?php
        $conn=mysqli_connect('localhost','example_user','Anudeep@2001','Student_Details') or die('Unable to connect');
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['Name'];
            $year=$_POST['Year_of_Study'];

            $query = "UPDATE list SET Year_of_Study='$year' WHERE Name='$name'";
            $execute = mysqli_query($conn,$query);
            if($execute){
                echo "<script>alert('Updated Successfully');</script>";
            }
            else{
                echo "<script>alert('Unable to update');</script>";
            }
        }
    ?>
</body>
</html>
