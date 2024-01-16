<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    
    background-image: linear-gradient( 109.6deg,  rgba(209,0,116,1) 11.2%, rgba(110,44,107,1) 91.1% );   
}

.center{
display: flex;
justify-content: center;
align-items: center;
height: 100vh;

}
.content{
    height: 420px;
width: 400px;
border-radius: 30px;
padding: 10px;
backdrop-filter: blur(2px);
background: rgba(255, 255, 255, 0.25);

}
.review{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100px;
    color: white;
    font-size: 30px;
}
.button{
text-decoration: none;
padding: 10px ;
background-color: purple;
color: white;
border-radius:10px ;
margin-top: 10px;
}
.button:hover{
    color: purple;
    background-color:white;
}

    </style>
</head>
<body>
    
<section class="center">
<div class="content">
    <img src="logos/Online Review-amico.png" alt="" height="300px" width="100%">
<div class="review">
             <?php
include('link.php');
$Firstname=$_GET['FN'];
$Secondname=$_GET['SN'];
$Mobile=$_GET['M'];
$Email=$_GET['E'];
$Mess=$_GET['MESS'];


 $a="Your Exprience Send...." ;   

$sql = "INSERT INTO contact VALUES ('$Firstname','$Secondname','$Mobile','$Email','$Mess');";

if ($conn->query($sql)===true) {
    
    echo $a;
}
else {
    echo "error:". $sql . "<br>" . $conn->error;
}
$conn->close();


?> 
<a href="http://localhost/portfolio/Portfolio.php#home" class="button">Thankyou</a>
</div>

</div>
</section>
</body>
</html>