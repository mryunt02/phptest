<?php
class Converter{

}
interface CanConvert{
  public function convert(float $value);

  
}
class CryptoConverter extends Converter{
  // properties
  //public string $currencyCode;
  function __construct(public string $currencyCode){
    // $this->currencyCode = $currencyCode; // 
  }

  // methods
  public function convert(float $value){
    $code = $this->currencyCode;
    $url = "https://cex.io/api/ticker/$code/USD";
    $response = file_get_contents($url);
    if($response){
      $data = json_decode($response);
      $last = $data->last;
      $result = $value * $last;
      return $result;
    }
    else {
      echo "Error";
    }
    
  }
 
}

$c = new CryptoConverter("BTC"); 