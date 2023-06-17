<html>
  <head>
    <title>PHP Test</title>
       <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="container">
    <center>
       <hr class="new1">
    DATOS CAPTURADOS <br>
      <hr class="new1">
    Nombre:<?php echo htmlspecialchars($_POST['name']); ?>.<br>
      <hr class="new1">
    Correo:<?php echo htmlspecialchars($_POST['email']); ?>.<br>
      <hr class="new1">
    Telefono:<?php echo htmlspecialchars($_POST['telephone']); ?>.<br>
      <hr class="new1">
    Tipo de pan:<?php echo htmlspecialchars($_POST['Pan']); ?>.<br>
      <hr class="new1">
    Mensaje:<?php echo htmlspecialchars($_POST['message']); ?>.<br>
      <hr class="new1">
    Direccion:<?php echo htmlspecialchars($_POST['dire']); ?>.<br>
      <hr class="new1">

 <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
    </center>
    </div>
  </body>
</html>