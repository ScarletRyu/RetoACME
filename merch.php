<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript"></script>
  <title>Merch Store</title>
  <link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="style/css.css">

</head>
<body>
    <header  id="header">
    <img width="100%" src="img/header-HD.jpg">
  </header>
  <nav>
    <ul>
      <li><a href="index.php">Return Home</a></li>
      <li><p id="fecha"><?php echo date ("Y/m/d");
      ?></p></li>
      <li><p id="hora"><?php echo date ("H:i:s");
      ?></p></li>

    </ul>
  </nav>
  <div id="merchandaising">

      <div class="producto">
        <a href="https://www.google.com"><img class="img_producto" src="./img/merch/poster.png"></a>
        <p class="desc_merchandaising">Poster</p>
        <p class="precio_merchandaising">15 €</p>
     </div>

      <div class="producto">
        <a href="https://www.google.com"><img class="img_producto" src="./img/merch/pegatina.png"></a>
        <p class="desc_merchandaising">Pegatina</p>
        <p class="precio_merchandaising">5 €</p>
     </div>

     <div class="producto">
       <a href="https://www.google.com"><img class="img_producto" src="./img/merch/taza.png"></a>
        <p class="desc_merchandaising">Taza</p>
       <p class="precio_merchandaising">5 €</p>
     </div>
    </div>

    <div id="merchandising2">
         <div class="producto" style="float: left;margin-left: 9%; margin-right: 0px;">
           <img class="img_producto" src="img/merch/camiseta.png">
           <p class="desc_merchandaising">Camiseta</p>
           <p class="precio_merchandaising">10 €</p>
         </div>
         
         <div class="producto">
            <a href="https://www.google.com"><img class="img_producto" src="./img/merch/delantal.png"></a>
            <p class="desc_merchandaising">Delantal</p>
            <p class="precio_merchandaising">12 €</p>
         </div>
          
        <div class="producto">
            <a href="https://www.google.com"><img class="img_producto" src="./img/merch/sudadera.png"></a>
            <p class="desc_merchandaising">Sudadera</p>
            <p class="precio_merchandaising">20 €</p>
        </div>
    </div>

  </div>
  <footer id="bottomLinks">
    Copyright &copy
  </footer>
</body>
</html>