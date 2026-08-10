<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Confirmação de Cadastro</title>
</head>
<body>
    <h2>Lojas Brincos e Companhia</h2>
    <h3>Dados do Colaborador Cadastrado</h3>

    <?php
    // Recebendo e armazenando os dados em variáveis
    $nome = $_POST['nome1'];
    $idade = $_POST['idade2'];
    $profissao = $_POST['profissao3'];
    $salario = $_POST['salario4'];
    $experiencia = $_POST['experiencia5'];

    // Exibindo as informações (uma por linha)
    echo "<b>Nome Completo:</b> " . $nome . "<br>";
    echo "<b>Idade:</b> " . $idade . " anos<br>";
    echo "<b>Profissão:</b> " . $profissao . "<br>";
    echo "<b>Salário Pretendido:</b> R$ " . $salario . "<br>";
    echo "<b>Experiência Anterior:</b> " . $experiencia . "<br><br>";

    // Mensagem personalizada utilizando Nome, Profissão e Experiência
    echo "<h3>Mensagem de Boas-Vindas</h3>";
    echo "<p>Olá <b>" . $nome . "</b>, seja bem-vindo(a) às Lojas Brincos e Companhia! Recebemos sua candidatura para o cargo de <b>" . $profissao . "</b>. Analisamos sua experiência em: <i>" . $experiencia . "</i> e entraremos em contato em breve.</p>";
    ?>

    <br>
    <a href="cadastro.html"><button>Voltar ao Formulário</button></a>
</body>
</html>
