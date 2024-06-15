 <?php
       $fullname=$_POST['fullname'];
       $bloodgroup=$_POST['bloodgroup'];
       $gender=$_POST['gender'];
       $religion=$_POST['religion'];
       $dateofbirth=$_POST['dateofbirth'];
       $age=$_POST['age'];
       $lastdateofblooddonation=$_POST['lastdateofblooddonation'];
       $email=$_POST['email'];
       $contact=$_POST['contact'];
       $division=$_POST['address'];
       $district=$_POST['district'];
       $password=$_POST['password'];
       $confirmpassword=$_POST['confirmpassword'];

      //database connection
      $conn = new mysqli('localhost','root','','blood');
      if($conn->connect_error){
            die('Connection Failed : '.$conn->connection_error);
      }else{
            $stmt = $conn->prepare("INSERT INTO signupp(fullname,bloodgroup,gender,religion,dateofbirth,age,lastdateofblooddonation,email,contact,division,district,password,confirmpassword) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssississss",$fullname,$bloodgroup,$gender,$religion,$dateofbirth,$age,$lastdateofblooddonation,$email,$contact,$division,$district,$password,$confirmpassword);
            $stmt->execute();
            echo "signup done";
            $stmt->close();
            $conn->close();
      }
    ?>

