<?php
/*
 * L – Liskov Substitution Principle (Princípio da Substituição de Liskov)
 * Subtipos devem ser substituíveis por seus tipos base sem alterar o funcionamento do programa.
 * Se uma classe Filha herda de uma classe Pai, você deve poder usar a Filha no lugar da Pai sem que o comportamento do programa mude.
*/

class Estudante {
    public function __construct(protected string $nome){}

    public function estudar(): void {
        echo "{$this->nome} está estudando";
    }
}

class EstudantePosGraduacao extends Estudante {
    public function estudar(): void {
        echo "{$this->nome} está estudando e pesquisando.";
    }
}

class EstudanteGraduacao extends Estudante {
    public function entregarTcc(): void {
        echo "{$this->nome} entregou o TCC";
    }
}