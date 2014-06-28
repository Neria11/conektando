<?php

$Monto=$_POST['txtMonto'];
$num=$_POST['txtNumtarjeta'];
$MONT=$_POST['txtMonto'];

if($num=="4242424242424242"){
$idTarjeta="tok_test_visa_4242";
}
else if($num=="4012888888881881"){
$idTarjeta="tok_test_visa_1881";
}
else if($num=="5555555555554444"){
$idTarjeta="tok_test_mastercard_4444";
}else{

}

require_once("conekta/lib/Conekta.php");
Conekta::setApiKey("key_eYvWV7gSDkNYXsmr");


try{
  $charge = Conekta_Charge::create(array(
     "currency"=>"MXN",
  "amount"=> $MONT,
  "description"=>"Stogies",
  "reference_id"=>"9839-wolf_pack",
  "card"=> $idTarjeta
  ));
}catch (Conekta_Error $e){
  echo $e->getMessage(); //el pago no pudo ser procesado
}
echo $charge->status;
echo "<br>Monto pagado: ".$MONT=$_POST['txtMonto'];
echo "<br><a href='index.php'><strong>Regresar</strong></a>";

?>