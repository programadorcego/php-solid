<?php
/*
 * I – Interface Segregation Principle (Princípio da Segregação de Interface)
 * Uma classe não deve ser forçada a depender de interfaces que não utiliza.
 * É melhor ter várias interfaces específicas do que uma única interface genérica.
*/

interface Funcionario {
    public function salario(): float;
}

interface Comissionavel {
    public function gerarComissao(): float;
}

class Vendedor implements Funcionario, Comissionavel {
    public function salario(): float {
        return 2000;
    }

    public function gerarComissao(): float
    {
        return 100;
    }
}

class Recepcionista implements Funcionario {
    public function salario(): float
    {
        return 2500;
    }
}