<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=cyrillic" rel="stylesheet">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
   </head>

  <body> 
<div class="contact">
	<p>Tel: (+99893) 503-27-30</p>
</div>
	<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light menu">

   			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
  			<a class="navbar-brand" href="index.html"><img src="img/logo.jpg" alt="logotip" height="90px" width="150px"></a>
  			
 </div>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				 
        <ul class="nav-item">
    
		<li >   <a class="nav-link" href="remont.html">ремонт</a>   </li>
		<li >   <a class="nav-link" href="sxema.html">схема работы</a>     </li>
		<li >   <a class="nav-link" href="forma.html">форма оплаты</a>     </li>
		<li class="question1">   <a class="nav-link" href="http://localhost/service.uz/index.php">вопрос-ответ</a>     </li>
		    
    </ul>
   </div>
</nav>

</header>



<div class="container vniz">

<form action="post_question.php" method="POST">
<h1>Вопрос-ответ</h1>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Ваше имя:</label>
    <textarea name="name" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>

    <label for="exampleFormControlInput1">E-mail:</label>
    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
      
  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Ваш вопрос: </label>
    <textarea name="question" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>

</div>
<div class="container">
<?php 
$servername = "127.0.0.1";
$username = "root";
$password = ""; 
$dbname="service";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<div class="quest vniz" >

<?php
$sql = "SELECT id, name, question FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  " <strong> Имя: </strong>   " . $row["name"]. " ","<br>" ."<strong> Вопрос:  </strong>  ". $row["question"]. "<br>"."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
 ?>

</div>
</div>

<footer>
<div class="footer-height">
<div class="container">
  
<div class="advantage-item3 row">
<div class="advantage-item col-sm-4 col-xs-12">
<ul>
    <li >   <a class="foot" href="remont.html">Ремонт</a>           </li>
    <li >   <a class="foot" href="sxema.html">Схема работы</a>     </li>
    <li >   <a class="foot" href="forma.html">Форма оплаты</a>     </li>
    <li >   <a class="foot" href="http://localhost/service.uz/index.php">Вопрос-ответ</a>     </li>    
    </ul>
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<a href="index.html"><img src="img/logo.jpg" alt="picture" width="50%"></a>
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<h3></h3>
<div class="foot" >
  <ul>
    <li>"Добрый Мастер" </li>
    <li>Тел: (+99893) 503-27-30</li>
    <li>dobriy_master@mail.ru</li>
    <li>с 9:00 до 21:00 ежедневно</li>
  </ul>
</div>
</div>
</div>
</div>
</div>
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<script scr="js/bootstrap.min.js"></script> 
  </body>
</html>


