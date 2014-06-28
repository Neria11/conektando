<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="utf-8"/>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="css/style.css">
	    <script type="text/javascript" href="js/controller"></script>
	    <title></title>
	    <!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.0/js/conekta.js"></script>
	</head>

<script type="text/javascript">
  // Conekta Public Key
  Conekta.setPublishableKey('key_KJysdbf6PotS2ut2');
  // ...
</script>
<body>
	<header>
	</header> 
	<section>
<form action="modelo.php" method="POST" id="card-form">
  <span class="card-errors"></span>
  <div class="form-row">
    <label>
      <span>Numero de tarjeta de credito</span>
      <input type="text" name="txtNumtarjeta" id="txtNumtarjeta" size="20" data-conekta="card[number]"/>
    </label><br>
    <label>
    	<SPAN>Monto a pagar</SPAN>
    </label>	
    <input type="text" name="txtMonto" id="txtMonto" size="4" value=""/>
  </div>
  <button type="submit">Pagar</button>
</form>


	</section> 
</body>
</html>
    