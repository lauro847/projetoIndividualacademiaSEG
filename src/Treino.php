<?php

class Treino {
    private string $descricao;
    private string $categoria;
    private int $duracaoMinutos;

    public function __construct(string $descricao, string $categoria, int $duracaoMinutos) {
        $this->descricao = $descricao;
        $this->categoria = $categoria;
        $this->duracaoMinutos = $duracaoMinutos;
    }

    public function getDetalhes(): string {
        return "Treino: {$this->descricao} | Categoria: {$this->categoria} | Duração: {$this->duracaoMinutos} min";
    }
}