<?php

session_start();

include_once("conexao.php");

$competicao = $_SESSION['competicao'];
$nome = $_POST['nome'];
$lan1 = $_POST['lan1'];
$lan2 = $_POST['lan2'];
$lan3 = $_POST['lan3'];
$total = $_POST['total'];





//selecionar a competição criada
$sql_com = "SELECT `id` FROM `ta_lan` WHERE `competicao` LIKE '$competicao'";
$salvar_com = mysqli_query($conn, $sql_com);
while ($seleciona_com = mysqli_fetch_array($salvar_com)) {
    $id_com = $seleciona_com['id'];
}



//inserir atleta na tabela
$sql_atl = "INSERT INTO `ta_atletas_lan` (`id_competicao`, `nome`, `lan1`, `lan2`, `lan3`, `total`) VALUES ('$id_com', '$nome', '$lan1','$lan2','$lan3', '$total')";
$salvar_atl = mysqli_query($conn, $sql_atl);
$linhas = mysqli_affected_rows($conn);


// $compare = "SELECT `total` FROM `ta_atletas_lan`"
// $valor = 

if($linhas == 1){
    $_SESSION['msg'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    Atleta inserido com sucesso!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    header("Location: ../pages/add_lancamento.php");
}else{
    $_SESSION['msg'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    Não foi possivel adicionar o atleta!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    header("Location: ../pages/add_lancamento.php");
}

?>