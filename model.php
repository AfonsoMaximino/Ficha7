<?php
if(isset($_POST['name']) && $_POST['password'])
{
    $name = $_POST['name'];
    $password = $_POST['password'];

  if($array_worker[1]==$name && $array_worker[2]==$password)
  {
    User();
  }
  else if($array_director[1]==$name && $array_director[2]==$password)
  {
    Director();
  }
  else if($array_administrator[1]==$name && $array_administrator[2]==$password)
  {
    Administrator();
  }

  function User()
  {
    echo "Bem-vindo trabalhador ".$name;
    $_SESSION['user']=$name;
  }
  function Director()
  {
    echo "Bem-vindo diretor ".$name;
    $_SESSION['user']=$name;
  }
  function Administrator()
  {
    echo "Bem-vindo administrador ".$name;
    $_SESSION['user']=$name;
  }



}
?>