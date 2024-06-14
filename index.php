<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Cryptocurrency Converter</h1>
    <form action="convert.php" method="post">
    <label for="amount" >Amount</label>
    <input  id="amount" name="amount"/>
    <label for="crypto">Cryptocurrency</label>
    <select id="crypto" name="crypto">
      <option value="BTC">Bitcoin</option>
      <option value="ETH">Ethereum</option>
      <option value="XRP">Ripple</option>
      <option value="LTC">Litecoin</option>
    </select>
    <button id="btn" type="submit" >Submit</button>
    </form>
  </body>
</html>
