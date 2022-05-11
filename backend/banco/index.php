 <?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Content-Type: application/json; charset=UTF-8');

require_once 'classes/Class.Crud.php';
$conexao = Conexao::getConexao();
Crud::SetConexao($conexao);

//post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
    $ano = (isset($_POST['ano'])) ? $_POST['ano'] : '';
    $status = (isset($_POST['status'])) ? $_POST['status'] : '';
    $capitulos = (isset($_POST['capitulos'])) ? $_POST['capitulos'] : '';
    $tipo = (isset($_POST['tipo'])) ? $_POST['tipo'] : '';
    $file = $_FILES["foto"];

    if($file["error"]){
        throw new Exception("erro: ".$file["error"]);

    }

    $dirUploads = "uploads";

    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }

    // Validação email e nome
    
    if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

     Crud::setTabela('assistidos');

            Crud::insert(['nome' => $nome, 'ano' => $ano, 'statuss' => $status, 'capitulos'=> $capitulos, 'imagem' =>$file["name"], 'tipo' => $tipo]);
            header('location: ../../frontend/pages/index.php');
     }else{
     throw new Exception("não foi possivel realizar o upload");
    }

}

