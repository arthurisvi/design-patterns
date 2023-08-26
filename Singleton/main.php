<?php echo
require_once 'Singleton.php';

// Obtém uma instância
$objeto1 = Singleton::getInstance();
print 'Inicia com: ' . $objeto1->getDadosGlobais(); // Inicia com: teste
// Altera valor da instância
$objeto1->setDadosGlobais('altera valor de teste');

// Obtém a mesma instância
$objeto2 = Singleton::getInstance();
print 'Valor alterado globalmente: ' . $objeto2->getDadosGlobais(); // Valor alterado globalmente: altera valor de teste