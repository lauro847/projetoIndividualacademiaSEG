<?php

class Aluno {
    private string $nome;
    private string $cpf;
    private string $plano;
    private bool $statusAtivo;

    public function __construct(string $nome, string $cpf, string $plano) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->plano = $plano;
        $this->statusAtivo = true;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function getPlano(): string {
        return $this->plano;
    }

    public function isAtivo(): bool {
        return $this->statusAtivo;
    }

    public function cancelarMatricula(): void {
        $this->statusAtivo = false;
    }
}