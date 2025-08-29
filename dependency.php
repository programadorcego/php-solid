<?php
/*
 * D – Dependency Inversion Principle (Princípio da Inversão de Dependência)
 * Dependa de abstrações, não de implementações.
 * Módulos de alto nível não devem depender de módulos de baixo nível diretamente.
 * Ambos devem depender de interfaces ou abstrações.
*/

interface MeioDEPagamento {
    public function pagar(float $valor): void;
}

class PagamentoPaypal implements MeioDEPagamento {
    public function pagar(float $valor): void
    {
        echo "Pagamento de R$ {$valor} efetuado via Paypal";
    }
}

class PagamentoPix implements MeioDEPagamento {
    public function pagar(float $valor): void
    {
        echo "Pagamento de R$ {$valor} efetuado via PIX";
    }
}

class FinalizarPedido {
    public function __construct(private MeioDEPagamento $pagamento) {}

    public function pagar(float $valor): void {
        $this->pagamento->pagar($valor);
    }
}