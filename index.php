<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SOLICITAÇÃO DE INCENTIVO À QUALIFICAÇÃO </title>
    <?php 
    require './conexao.php';
    ?>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="index.css" media="screen">
</head>

<body>
    <!-- Cabeçalho com logo da UFSB e título (com css de id "titulo") -->
    <div><img src="http://localhost/formquali/imagens/logo.jpg" alt="Logo" width="120" height="140">
        <h1 id="titulo">Formulário de Solicitação de Incentivo à Qualificação</h1>
        <br>
    </div><br>

    <form method="post">
        <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
        <fieldset class="grupo">
            <p id="subtitulo">Dados de Identificação</p><br>
            <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
            <div class="campo">
                <label for="nome"><strong>Nome:</strong></label>
                <input type="text" name="nome" id="nome" placeholder="Nome completo" required><br>
            </div>
            <!-- Campo de siape -->
            <div class="campo">
                <label for="siape"><strong>SIAPE:</strong></label>
                <input type="text" name="siape" id="siape" placeholder="Digite seu SIAPE" required><br>
            </div>
            <!-- Campo de cargo -->
            <div class="campo">
                <label for="cargo"><strong>Cargo:</strong></label>
                <input type="text" name="cargo" id="cargo" placeholder="Digite seu cargo" required><br>
            </div>
            <!-- Campo de ano de exercicio-->
            <div class="campo">
                <label for="ano"><strong>Início de Exercício:</strong></label>
                <input type="number" name="ano" id="ano" placeholder="Digite o ano" required><br>
</div>

                <!-- Campo de Unidade -->
            <div class="campo">
                <label for="unidade"><strong>Unidade:</strong></label>
                <input type="text" name="unidade" id="unidade" placeholder="Digite a Unidade" required><br>
            </div>
            <!-- Campo de Setor -->
            <div class="campo">
                <label for="unidade"><strong>Setor:</strong></label>
                <input type="text" name="setor" id="setor" placeholder="Digite seu Setor" required><br>
            </div>

            <!-- Campo de email -->
            <div class="campo">
                <label for="email"><strong>E-mail:</strong></label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required><br>
            </div>
            <!-- Campo de tel -->
            <div class="campo">
                <label for="tel"><strong>Telefone:</strong></label>
                <input type="tel" name="tel" id="tel" placeholder="Digite seu telefone" required><br>
            </div>

            <p id="subtitulo">Á Diretoria de Gestão de Pessoas</p><br>


            <!-- Campo de curso com 4 opções de botões selecionáveis (radio button) e css de classe "campo" -->
            <div class="campo">
                <label>Venho REQUERER a concessão de incentivo à qualificação, em conformidade com a Lei nº 11.091, de 12/01/2005, por ter concluído o curso de:</label>
                <label>
                    <input type="radio" name="nivel" value="Graduação" checked>Graduação
                </label>
                <label>
                    <input type="radio" name="nivel" value="Mestrado">Mestrado
                </label>
                <label>
                    <input type="radio" name="nivel" value="Pós-Graduação Lato Sensu">Pós-Graduação Lato Sensu
                </label>
                <label>
                    <input type="radio" name="nivel" value="Doutorado">Doutorado
                </label>
            </div>

            <p id="subtitulo2">ROL DE ATIVIDADES</p><br>
            <!-- Campo de Justificativa -->
            <div class="campo">
                <label for="just"><strong>(Atividades desenvolvidas no ambiente de trabalho / obrigatório visto da chefia imediata) :</strong></label>
                <textarea id="textoGrande" name="just" rows="5" cols="40"
                    placeholder="Descreva as atividade desenvolvidas no ambiente de trabalho"></textarea>
            </div>

            <!-- Campo da data -->
            <div class="campo">
                <label for="data"><strong>Data de hoje:</strong></label>
                <input type="date" name="data" id="data" placeholder="" required><br><br>
            </div>

            <button name="Enviar" class="botao">Enviar</button>

    </form>

</body>

</html>