<?php 
require_once('conexao.php');

$codigo= $_POST['txtcodigo'];
$usuario= $_POST['usuario'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$nivel= $_POST['nivel'];

$sql_atualizar=mysqli_query($ligar, " UPDATE usuarios set usuario='$usuario', email='$email', senha='$senha', nivel='$nivel' WHERE id='$codigo' ");

if ($sql_atualizar==true){

    print "<script>
    
    alert('Usuário Atualizado com Sucesso');
    window.location.href='listaUsuario.php';
    
    
    </script>";

}else{

    echo "<script>
    
    alert('Falha ao atualizar dados');
    window.location.href='editar.php';
    
    
    </script>";

}



?>