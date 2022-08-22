<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
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
    <h2>Enter Student Details to be inserted</h2>
    <form method="post" action="#">
        <label for="Name">Name</label>  <br>
        <input type="text" id="Name" name="Name"> 
        <br><br>
        <label for="Roll_no">Roll_no</label> <br>
        <input type="text" id="Roll_no" name="Roll_no">  
        <br><br>
        <label for="year">Year of study</label> <br>
        <input type="text" id="year" name="Year_of_Study">  
        <br><br>
        <label for="department">Department</label> <br>
        <input  type="text" id="department" name="Department">
        <br><br>
        <input type="submit" value="submit">
    </form>
    
    <?php
        $conn = mysqli_connect('localhost','example_user','Anudeep@2001','Student_Details') or die('Unable to connect');
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name = $_POST['Name'];
            $roll = $_POST['Roll_no'];
            $year = $_POST['Year_of_Study'];
            $dep = $_POST['Department'];
            
            $query = "INSERT INTO `list`(`Name`, `Roll_no`, `Year_of_Study`, `Department`) VALUES ('$name','$roll','$year','$dep')";
            $que = mysqli_query($conn,$query);
            if($que){
                echo "<script>alert('Inserted Successfully');</script>";
            }
            else{
                echo "<script>alert('Unable to insert');</script>";
            }
        }
        mysqli_close($conn);
    ?>

</body>
</html>
