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

<br>
<div class="container">
<table class="table-resposive table_service" style="font-size: 20px;">
<tbody>
<tr class="table_heder"><th class="col-xs-6">Проблема</th><th class="col-xs-3">Цена</th><th class="col-xs-3">Категория</th></tr>
<!-- -->
<tr>
<td class="col-xs-6">Диагностика проблемы</td>
<td class="col-xs-3"><strong>от 0 Sum</strong></td>
<td class="col-xs-3">1</td>
</tr>
<tr>
<td class="col-xs-6">Вода в холодильнике</td>
<td class="col-xs-3"><strong>от 20000 Sum</strong></td>
<td class="col-xs-3">2</td>
</tr>
<tr>
<td class="col-xs-6">Вода под холодильником</td>
<td class="col-xs-3"><strong>от 40000 Sum</strong></td>
<td class="col-xs-3">3</span></td>
</tr>
<tr>
<td class="col-xs-6">Сильно шумит</td>
<td class="col-xs-3"><strong>от 40000 Sum</strong></td>
<td class="col-xs-3">4</span></td>
</tr>
<tr>
<td class="col-xs-6">Не отключается</td>
<td class="col-xs-3"><strong>от 40000 Sum</strong></td>
<td class="col-xs-3">5</span></td>
</tr>
<tr class="even">
<td class="col-xs-6">Не включается</td>
<td class="col-xs-3"><strong>от 100000 Sum</strong></td>
<td class="col-xs-3">6</span></td>
</tr>
<tr>
<td class="col-xs-6">Не морозит морозильная камера</td>
<td class="col-xs-3"><strong>от 150000 Sum</strong></td>
<td class="col-xs-3">7</span></td>
</tr>
<tr class="even">
<td class="col-xs-6">Не холодит холодильная камера</td>
<td class="col-xs-3"><strong>от 150000 Sum</strong></td>
<td class="col-xs-3">8</span></td>
</tr>
<tr>
<td class="col-xs-6">Сильно морозит</td>
<td class="col-xs-3"><strong>от 70000 Sum</strong></td>
<td class="col-xs-3">9</span></td>
</tr>
<tr class="even">
<td class="col-xs-6">Необходима заправка фреоном</td>
<td class="col-xs-3"><strong>от 120000 Sum</strong></td>
<td class="col-xs-3">10</span></td>
</tr>

<!-- --></tbody>
</table>

</div>
<hr>
<div class="container">

<table>
  <tr>
    <th>ID</th>
    <th>Имя</th>
    <th>Город</th>
    <th>Телефон</th>
    <th>Категория</th>

  </tr>
   <?php $__currentLoopData = $zakaz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zakaz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    
    <td><?php echo e($zakaz->id); ?></td>
    <td><?php echo e($zakaz->name); ?> </td>
    <td> <?php echo e($zakaz->living); ?> </td>
    <td>  <?php echo e($zakaz->tel); ?> </td>
    <td>  <?php echo e($zakaz->problem); ?> </td>

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