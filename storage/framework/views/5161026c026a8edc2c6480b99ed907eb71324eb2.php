<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>
   <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

.navbar-nav li strong{
  color: #b51f40;
  font-size: 20px;
  margin: 0 20pt;
}
.navbar-brand {
  margin: 0 20pt;
  padding-left: 272pt; 
  font-size: 20pt;
}

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://127.0.0.1:8000">Service_Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="zakaz"><strong>Заказ</strong> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="vopros"><strong>Вопрос</strong></a>
      </li>
         </ul>
  </div>
</nav>


<div class="container">

<table>
  <tr>
    <th>ID</th>
    <th>Имя</th>
    <th>E-mail</th>
    <th>Вопрос</th>
    <th>Ответ</th>
  </tr>
   <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    
    <td><?php echo e($questions->id); ?></td>
    <td><?php echo e($questions->name); ?> </td>
    <td> <?php echo e($questions->email); ?> </td>
    <td>  <?php echo e($questions->question); ?> </td>
    <td><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
     Ответ
  </button>
</td>
<br>
<div class="collapse" id="collapseExample">
  <div class="card card-body">

    <form action="<?php echo e(url('/create')); ?>" method="POST">
  <div class="row">
    
   <div class="col-sm-2 col-xs-12">
      <input name="id" type="text" class="form-control" placeholder="nomer ID">
    </div>
<div class="col">
      <input name="answer" type="text" class="form-control" placeholder="ответ">
    </div>
       <input type="submit" value=" отправит " ">
   </div>
   <?php echo e(csrf_field()); ?>

</form>

  </div>
</div>
    <br>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<script scr="js/bootstrap.min.js"></script> 
</body>
</html>