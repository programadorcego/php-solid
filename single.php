<?php
/*
 * S – Single Responsibility Principle (Princípio da Responsabilidade Única)
 * Uma classe deve ter apenas uma razão para mudar.
 * Cada classe deve ser responsável por uma única parte da funcionalidade do sistema.
*/

class Relatorio {
    public function gerar() {
        echo "Relatório Gerado";
    }
}

class Email {
    public function enviar() {
        echo "E-mail enviado";
    }
}