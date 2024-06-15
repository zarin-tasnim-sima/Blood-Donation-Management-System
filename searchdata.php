<html>
<head>
    <title>Searching Data</title>
    <style>
     body{
        background-color: white;
     }  
     table,th,td{
        border:1px solid black;
        width: 1100px;
        background-color: lightblue;
     }
     .btn{
        width:20%;
        height:5%;
        font-weight:bold;
     }
     </style>
</head>
<body>
   <center>
    <h1>Donors Name</h1>


    <div class="sdfd">
        
        <form action="#" method="POST">
            <table>
                <tr>
                    <th>Full Name</th>
                    <th>Blood Group</th>
                    <th>Gender</th>
                    <th>Religion</th>
                    <th>Date Of Birth</th>
                    <th>Age</th>
                    <th>Last Date Of Blood Donation</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Division</th>
                    <th>District</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                </tr>
   
                </table>
            <input type="submit" name="search" value="SEARCH DATA"><br><br>
    </form>

    </div>
    </center>
    </body>
    </html>

            
<?php
$conn=mysqli_connect("localhost","root","","blood");
if($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}

$sql="SELECT fullname,bloodgroup,gender,religion,dateofbirth,age,lastdateofblooddonation,email,contact,division,district,password,confirmpassword from signupp;
$result=$conn-> query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["fullname"]."</td><td>".$row["bloodgroup"]."</td><td>".$row["gender"]."</td><td>".$row["religion"]."</td><td>".$row["dateofbirth"]."</td><td>".$row["age"]."</td><td>".$row["lastdateofblooddonation"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["division"]."</td><td>".$row["district"]."</td><td>".$row["password"]."</td><td>".$row["confirmpassword"]."</td></tr>";
}
echo "</table>";
}
else{
    echo "0 result";
}

$conn->close();
?>







