<?php

function lerArquivo($nomeArquivo)
{
    $arquivo = file_get_contents($nomeArquivo);

    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

function buscarAluno($alunos, $nome)
{

    $alunosFiltro = [];
    foreach ($alunos as $aluno) {
        if ($aluno->nome == $nome) {
            $alunosFiltro[] = $aluno;
        }
    }
    return $alunosFiltro;
}
