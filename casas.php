<?php 
include 'conection.php'
?>
            <?php
$sql = "SELECT * FROM casas";
$consulta = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <title>TechNorwArg</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <link rel="stylesheet" type="text/css" href="css/prueba.css" />
      <!-- fonts style -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
      <!-- font awesome style -->
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <link href="css/style-pop.css" rel="stylesheet" />
      <link href="css/style-pop2.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="../css/bootstrap2.css" />
      <link href="../css/fuente2.css" rel="stylesheet" />
      <link href="../css/style2.css" rel="stylesheet" />
      <link href="../css/responsive2.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="css/contacto.css">
    <link href="css/fuente.css" rel="stylesheet" />
    <link href="node_modules/flag-icons/css/flag-icons.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <style type="text/css"> BODY{ font-family:'mifuente' } </style>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

      <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="js/img.js"></script>
      <script type="text/javascript" src="js/p.js"></script>

   </head>
   <body style="background-color: #000;overflow-x: hidden;">
   <div style="padding: 0;background-color: #000;">
         <div style="height: auto;">
            <nav class="menu">
                <label class="logo"><img src="images/tn.png" alt="" style="width: 250px;margin-left: 20px;"></label>
                <ul class="menu_items">
                    <li><a href="index.html"><button class="custom-btn btn-3"><span>Team</span></button></a></li>
                    <!--<li><a href="#"><button class="custom-btn btn-3"><span>Proyectos</span></button></a></li>
                    <li><a href="#"><button class="custom-btn btn-3"><span>Nosotros</span></button></a></li>-->
                    <li><a href="contacto.html"><button class="custom-btn btn-3"><span>Contact</span></button></a></li>
                    <li style="margin: auto;background:#fff;border-radius:0px"><a href="front-spanish/index.html"><span class="fi fi-es"></span></a></li>
                    <li style="margin: auto"><a href="front-english/index.html"><span class="fi fi-gb"></span></a></li>
                    <li style="margin: auto"><a href="front-norway/index.html"><span class="fi fi-no"></span></a></li>
                </ul>
                <span class="btn_menu">
                <i class="fa fa-bars"></i>
            </span>
            </nav>
            </div>

            <audio src="videos/soundtracka.mp3" autoplay loop></audio>
         <!-- SECCION VIDEOS HEADER -->
         <section>
            <div id="video4" class="tamaño-video-header">
               <video autoplay muted="muted" loop="loop" preload="true" playsinline src="videos/Header3.mp4" style="position: absolute;
                  z-index: 2;
                  height: 90vh;"></video>
            </div>
            <div id="video3">
               <video autoplay muted="muted" loop="loop" preload="true" width="100%" playsinline src="videos/Header3.mp4" style="position: absolute;
                  z-index: 2;
                  height: auto;
                  width: 100%;">
               </video>
            </div>
            <section id="flexspace" class="slider_section " style="background-color: rgba(0, 0, 0, .7);
padding-bottom: 25px;
margin-top: -43.9%;
position: relative;
z-index: 2;
height: 100vh;">

<?php while($data = mysqli_fetch_array($consulta)){?>
  <div class="container ">
    <div class="row" style="border: 2px solid #fff;margin-bottom: 20px;">
      <div class="col-md-6 col-lg-5">
        <div class="detail-box">
          <h1 style="color:#fff">
          <?php echo $data['nombre']?><br>
          </h1>
          <p style="color:#fff">
          <?php echo $data['descripcion']?>
          </p style="color: #5d6263">
          <div style="display: flex;">
          <ul style="text-align: initial;width: 50%; margin:0 auto;margin-left: 0px;">
            <li style="margin-left: 40px;color:#fff"><?php echo $data['mts']?>m²</li>
            <li style="margin-left: 40px;color:#fff">Baños: <?php echo $data['baños']?></li>
            <li style="margin-left: 40px;color:#fff">Habitaciones: <?php echo $data['habitaciones']?></li>
            <li style="margin-left: 40px;color:#fff">U$D <?php echo $data['precio']?></li>
          </ul>
          </div>
          <div class="btn-box">
            <a href="flexspace.php" class="btn-1">
              Ler Mer
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-7">
        <div class="img-box" style="display: flex;">
          <img src="images/<?php echo $data['imagen']?>" alt="" style="margin: 0 auto;margin-right: 0px;width:60%">
        </div>
      </div>
    </div>
    </div>


<?php }?>
</section>
         </section>

           

</div>


<script src="js/popup2.js"></script>
<script src="js/popup.js"></script>
<nav class="menu" style="background-color: #000;">
   <div style="margin: 0 auto;">
                <label class="logo" style="padding-left: 0px;"><img src="images/webii55.png" alt="" style="width: 205px;"></label>
                <h style="text-align: center;
                font-size: 25px;">Produsert av <img src="images/tn.png" alt="" style="width: 170px;margin-bottom: 12px;;">
               </h1>
   </div>

            </span>
            </nav>
      </div>
   </body>
</html>