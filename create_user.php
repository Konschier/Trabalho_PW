<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Trabalho Final</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>Formulário de Cadastro</h2>
  <form action="" method="POST">
  <div class="form-group">
      <label>Nome:</label>
      <input type="text" class="form-control" placeholder="Digite seu nome" name="user_name">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" placeholder="Digite seu email email" name="user_email">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="user_password">
    </div>
    <div class="form-group">
      <label>Foto:</label>
      <input type="file" class="form-control" placeholder="Enter email" name="user_image">
    </div>
    <div class="form-group">
      <label>Fale sobre você:</label>
      <textarea class="from-control" name="user_details"></textarea>
    </div>
    <input type="submit" name="insert-btn" class="btn btn-primary"/>
  </form>

    <?php
    $conn = mysqli_connect('localhost','root','','phplogin');

    // if(mysqli_connect_errno()){
    //     echo "connection fail";
    // }
    // else{
    //     echo "connected sucessfull";
    // }

    $user_name = @_POST['user_name'];
    $user_email = @_POST['user_email'];
    $user_password = @_POST['user_password'];
    $user_image = @_POST['user_image'];
    $user_details = @_POST['user_detaisl'];

    ?>


</div>

</body>
</html>
