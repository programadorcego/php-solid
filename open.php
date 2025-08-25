<?php
/*
 * O – Open/Closed Principle (Princípio Aberto/Fechado)
 * Entidades de software (classes, módulos, funções) devem estar abertas para extensão, mas fechadas para modificação.
 * Você deve poder adicionar novo comportamento ao sistema sem modificar o código existente.
*/

interface Desconto {
    public function calcular(float $valor): float;
}

class DescontoComum implements Desconto {
    public function calcular(float $valor): float {
        return $valor * 0.05;
    }
}

class DescontoVip implements Desconto {
    public function calcular(float $valor): float {
        return $valor * 0.2;
    }
}

class CalcularDesconto {
    public function __construct(private Desconto $tipo) {
        $this->tipo = $tipo;
    }

    public function calcular(float $valor): float {
        return $this->tipo->calcular($valor);
    }
}

$descontoComum = new DescontoComum();
$desconto = new CalcularDesconto($descontoComum);
echo $desconto->calcular(100.0);