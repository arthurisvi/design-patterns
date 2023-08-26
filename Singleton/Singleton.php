<?php

class Singleton {
  private $dadosGlobais;
  private static $instancia;

  private function __construct() {
    $this->dadosGlobais = 'teste';
  }

  public static function getInstance() {
    if(empty(self::$instancia)) {
      self::$instancia = new self;
    }
    return self::$instancia;
  }

  public function setDadosGlobais($novoValor) {
    $this->dadosGlobais = $novoValor;
  }

  public function getDadosGlobais() {
    return $this->dadosGlobais;
  }
}