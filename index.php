<?php
  $name = $_post['name'];
  $email = $_post['email'];
  $password = $_post['password'];
  $product = $_post['product'];


  $conn = new mysqli('localhost','root','','proj data');
  if($conn->connect_error)
  
  {
    echo"$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
  }
  else{
  $stmt=$conn->prepare("insert into clients_data(name, email,password ,product)values(?,?,?,?)");
  $stmt->bind_param("ssss",$name, $email,$password ,$product);
  $exceval= $stmt->execute();
  echo $exceval;
  echo "Successfully";
  $stmt->close;
  $conn->close;

  }
    
?>