<?php

// lerArquivo("alunos.json")
require("./funcoes.php");

$alunos = lerArquivo("alunos.json");

if (isset($_GET["buscarAluno"])) {
    $alunos = buscarAluno($alunos, $_GET["buscarAluno"]);
}

// print_r($alunos);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos JSON</title>
</head>

<body>

    <form>

        <input type="text" value="<?= isset($_GET["buscarAluno"]) ? $_GET["buscarAluno"] : "" ?>" placeholder="Buscar aluno" name="buscarAluno">
        <button>Buscar</button>

    </form>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Nota</th>
        </tr>
        <?php
        foreach ($alunos as $aluno) :
        ?>

            <tr>
                <td><?= $aluno->nome ?></td>
                <td><?= $aluno->idade ?></td>
                <td><?= $aluno->nota ?></td>
            </tr>

        <?php
        endforeach;
        ?>

    </table>
</body>

</html>