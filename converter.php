<?php
class CryptoConverter {
  // properties
  //public string $currencyCode;
  function __construct(public string $currencyCode){
    // $this->currencyCode = $currencyCode; // 
  }

  // methods
  public function convert(float $value) {

  }
}

$c = new CryptoConverter("BTC"); 