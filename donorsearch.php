<?php
//include(index.php);
error_reporting(0);
$query="select * from signupp";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

echo $result['fullname']."".$result['bloodgroup']."".$result['gender'];
//echo $total;


if($total!=0)
{
echo "Table has records";
}
else
{
echo "No records found";
}
?>