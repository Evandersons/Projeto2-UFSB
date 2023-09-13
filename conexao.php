<?php   
$host = "localhost";
$user = "root";
$senha = "";
$database = "formquali";

$conn = mysqli_connect($host, $user, $senha, $database) or die("Erro de conexão");

if(isset($_POST['Enviar'])){
    $nome = $_POST['nome'];
    $siape = $_POST['siape'];
    $cargo = $_POST['cargo'];
    $exerc = $_POST['ano'];
    $uni = $_POST['unidade'];
    $setor = $_POST['setor'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $nivel = $_POST['nivel'];
    $just = $_POST['just'];
    $data = $_POST['data'];
    $query = mysqli_query($conn, "INSERT INTO dados (nome, siape, cargo, exercicio, unidade, setor, email, telefone, nivel, atividades, Date) VALUES ('$nome', '$siape', '$cargo', '$exerc', '$uni', '$setor', '$email', '$tel', '$nivel' , '$just', '$data')");

    if($query){
        echo 'Cadastro realizado com sucesso';
    }else{
        echo 'Não foi possível cadastrar';
    }
}
?>