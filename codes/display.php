<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>    
    body{
            position: absolute;
            top: 50%;
            left:30%;
            transform: translate(0, -50%);
            border: 2px solid black;
            border-radius: 10px 40px;
            width:600px;
            text-align: center;
            padding: 50px;
            background-color:#e6e6fa;
        }
        button{
            font-size:15px;
            height:25px;
        }
        table{
            padding:10px;
        }
        th,td{
            padding:10px;
            text-align:center;
            font-size:25px;
        }
    </style>
</head>
<body>
        <a href="index.html"><button>Go to Main page</button></a>
        <br><br>
        <?php
            $conn=mysqli_connect('localhost','example_user','Anudeep@2001','Student_Details') or die('Unable to connect');
                
            $query = "SELECT * FROM list";
                
            $execute = mysqli_query($conn,$query);
            if(mysqli_num_rows($execute)>0)
            {
                echo "<table>
                            <tr>
                                <th>Name</th>
                                <th>Roll_no</th>
                                <th>Year_of_Study</th>
                                <th>Department</th>
                            </tr>";
                            while($row=mysqli_fetch_assoc($execute))
                            {
                                echo "<tr>
                                        <td>". $row["Name"]."</td>
                                        <td>". $row["Roll_no"]."</td>
                                        <td>". $row["Year_of_Study"]."</td>
                                        <td>". $row["Department"]."</td>
                                      </tr>";
                            }
                echo  "</table";
                mysqli_close($conn);
            }
            else
                echo"0 results";
        ?>    
</body>
</html>
