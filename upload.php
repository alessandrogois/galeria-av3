<?php
function __autoload($class_name){
    require_once 'classes/' . $class_name . '.php';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_foto = test_input($_POST["nome_foto"]);
    $email = test_input($_POST["email"]);
    $id_foto = test_input($_POST["id_foto"]);
    $imagem = test_input($_FILES["imagem"]);

}

//Verifica se todas as variáveis estão definidas
if (
	   ! isset( $id_foto   )
	|| ! isset( $nome_foto )
	|| ! isset( $email     )
	|| ! isset( $imagem    )
) {
	// Mensagem para o usuário
	echo 'Existem variáveis não definidas.';

	// Mata o script
	exit;
}

function test_input($data) {
    $data = var_dump($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Se não postar nada
if ( ! isset( $_POST ) || empty( $_POST ) ) {

	// Mensagem para o usuário
	echo 'Não há dados para upar!';

	// Mata o script
	exit;
}

// Verifica campos em branco
foreach ( $_POST as $chave => $valor ) {
	// Cria as variáveis dinamicamente
	$$chave = $valor;

	// Verifica campos em branco
	if ( empty( $valor ) ) {
		// Mensagem para o usuário
		echo 'Existem campos em branco.';

		// Mata o script
		exit;
	}
}

// A imagem
$imagem = isset( $_FILES['imagem'] ) ? $_FILES['imagem'] : null;

// Verifica se existe imagem
if ( empty( $imagem ) ) {
	// Mensagem para o usuário
	echo 'Envie sua foto.';

	// Mata o script
	exit;
}

// Dados da imagem
$imagem_tmp   = $nome_foto;
//$nome_imagem  = $nome_foto['nomeFoto'];
$diretorio    = 'temp/img';
//$envia_imagem = $diretorio . $imagem;

// Envia a foto
foreach ($_FILES as $imagem){
    if ( ! move_uploaded_file($imagem_tmp, $diretorio ) ) {
        // Mensagem para o usuário
        echo 'Erro ao enviar foto.';

        // Mata o script
        exit;
    }
}
// Inclui o arquivo de conexão
include('classes/DB.php');

// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `galeria`.`fotos` (
		`id_foto`,
		`nome_foto`,
		`email`,
		`imagem`
	)
	VALUES
	( ?, ?, ?, ?, ? )
");

// Envia
$verifica = $prepara->execute(
	array(
		$id_foto,
		$nome_foto,
		$email,
		$envia_imagem
	)
);

if ( $verifica ) {
	echo 'Enviado!';

	// Mata o script
	exit;
} else {
	echo 'Erro ao enviar dados.';

	// Mata o script
	exit;
}