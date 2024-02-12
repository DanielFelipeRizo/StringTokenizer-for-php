<?php

class StringTokenizer {

  private $cadena;
  private $delimitador;
  private $tokens;
  private $posicionActual;

  public function __construct($cadena, $delimitador) {
    $this->cadena = $cadena;
    $this->delimitador = $delimitador;
    $this->tokens = explode($delimitador, $cadena);
    $this->posicionActual = 0;
  }

  public function nextToken() {
    if ($this->posicionActual < count($this->tokens)) {
      return $this->tokens[$this->posicionActual++];
    }
    return false;
  }

  public function hasMoreTokens() {
    return $this->posicionActual < count($this->tokens);
  }

  public function countTokens() {
    return count($this->tokens);
  }
}
?>