<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="platfromcss/musicplatform.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- APlayer CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="platfromcss/musicplatformzone.css">
      <meta name="description" content="">
</head>
<style>
    .al-title-sponsor {
        font-size: 35px;
        padding-bottom: 74px;
        text-align: center;
        font-weight: 700;
    }
    
    .al-title-sponsor-tunein {
        text-align: center;
        font-size: 25px;
        padding-bottom: 55px;
    }
    
    .al-title-sponsor-spotify {
        text-align: center;
        padding: 55px 0px 55px 0px;
        font-size: 25px;
    }
    
    .al-label-carousel .al-label-carousel-active {
        color: black !important;
    }
    .title{
       color:white;
    }
    @media (max-width: 768px) {
        .al-top {
            padding-top: 913px;
            max-width: 1292px;
            padding-left: 1rem !important;
        }
        .buttonposition {
            padding-left: 27px !important;
            padding-top: 234px;
        }
    }
    
    @media (min-width: 768px) {
        .footer__content {
            max-width: 1300px;
            margin-top: 70px;
            padding-top: 25px;
            padding-bottom: 22px;
            padding-left: 123px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .footer__content {
            margin-top: 60px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
    }
    
    .al-slider-title {
        color: #000;
        font-size: 22px;
    }
    
    .al-label-carousel {
        color: black !important;
        font-weight: 550;
        font-size: 15px;
    }
    /* Carousel */
    
    .container-fluid {
        max-height: 300px;
    }
    
    .title-partners {
        margin-left: 43vw;
    }
    
    a {
        text-decoration: none;
        color: black;
        cursor: pointer;
    }
    
    a:hover {
        text-decoration: none;
        color: lightgrey;
    }
    
    .about-us-service-title {
        text-align: center;
    }
    
    .carousel-container {
        padding: 20px;
        display: flex;
        text-align: center;
        position: relative;
        height: 450px;
        max-width: 800px;
        min-width: 600px;
        margin: 0 auto;
    }
    
    .carousel-card {
        height: 200px;
        width: 200px;
        padding: 20px;
        transition: 1s;
        opacity: 1;
        position: absolute;
        top: 0;
        color: #FFF;
        border-radius: 3px;
    }
    
    .carousel-icon {
        border-radius: 50%;
        height: 150px;
        width: 150px;
        object-fit: cover;
        background-color: white;
        filter: grayscale(100%);
    }
    
    #center img {
        filter: grayscale(0%);
    }
    
    .al-link {
        color: white !important;
    }
    
    #center:hover img {
        filter: grayscale(0%) contrast(120%);
        transform: scale(1.1, 1.1);
    }
    
    #far-left {
        left: 15%;
        transform: scale(.9) translateY(0%) translateX(-50%);
        z-index: 5;
        /*background-color: #F0F0F0;*/
    }
    
    #far-right h3 {
        display: none;
    }
    
    #far-left h3 {
        display: none;
    }
    
    #left h3 {
        display: none;
    }
    
    #right h3 {
        display: none;
    }
    
    #left {
        left: 30%;
        transform: scale(1) translateY(0%) translateX(-45%);
        z-index: 10;
        /*   background-color: #C3C3C3; */
    }
    
    .al-footer {
        text-align: center;
    }
    
    #center {
        left: 50%;
        transform: scale(1) translateY(0%) translateX(-50%);
        z-index: 15;
    }
    
    #right {
        left: 70%;
        transform: scale(1) translateY(0%) translateX(-55%);
        z-index: 10;
        /*   background-color: #C3C3C3; */
    }
    
    #far-right {
        left: 80%;
        transform: scale(.9) translateY(0%) translateX(-50%);
        z-index: 5;
        /*   background-color: #F0F0F0; */
    }
    
    .carousel-card:hover {}
    
    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer;
        color: white !important;
    }
    
    .informazione {
       padding-left:3.1rem;
        font-size: 29px;
    }
    
    .topnav {
        max-width: 1409px !important;
        text-align: center;
        text-align: center;
        overflow: hidden;
        position: relative;
    }
    
    @font-face {
        font-family: "CircularSpUIv3T";
        src: url("CircularSpUIv3T.woff") format("woff"),
    }
    
    @font-face {
        font-family: 'Circular Sp UI v3 T';
        src: url('webfont/CircularSpUIv3T-Black.eot');
        src: url('webfont/CircularSpUIv3T-Black.eot?#iefix') format('embedded-opentype'), url('webfont/CircularSpUIv3T-Black.woff2') format('woff2'), url('webfont/CircularSpUIv3T-Black.woff') format('woff'), url('webfont/CircularSpUIv3T-Black.ttf') format('truetype'), url('webfont/CircularSpUIv3T-Black.svg#CircularSpUIv3T-Black') format('svg');
        font-weight: 900;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'Circular Sp UI v3 T';
        src: url('webfont/CircularSpUIv3T-Bold.eot');
        src: url('webfont/CircularSpUIv3T-Bold.eot?#iefix') format('embedded-opentype'), url('webfont/CircularSpUIv3T-Bold.woff2') format('woff2'), url('webfont/CircularSpUIv3T-Bold.woff') format('woff'), url('webfont/CircularSpUIv3T-Bold.ttf') format('truetype'), url('webfont/CircularSpUIv3T-Bold.svg#CircularSpUIv3T-Bold') format('svg');
        font-weight: bold;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: '';
        src: url('webfont/9fcec9e815cb385fae7cdcc77f939796.eot');
        src: url('webfont/9fcec9e815cb385fae7cdcc77f939796.eot?#iefix') format('embedded-opentype'), url('webfont/9fcec9e815cb385fae7cdcc77f939796.woff2') format('woff2'), url('webfont/9fcec9e815cb385fae7cdcc77f939796.woff') format('woff'), url('webfont/9fcec9e815cb385fae7cdcc77f939796.ttf') format('truetype'), url('webfont/9fcec9e815cb385fae7cdcc77f939796.svg#') format('svg');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: '.';
        src: url('webfont/d1e02d66f65a8dab87c923942a195ff3.eot');
        src: url('webfont/d1e02d66f65a8dab87c923942a195ff3.eot?#iefix') format('embedded-opentype'), url('webfont/d1e02d66f65a8dab87c923942a195ff3.woff2') format('woff2'), url('webfont/d1e02d66f65a8dab87c923942a195ff3.woff') format('woff'), url('webfont/d1e02d66f65a8dab87c923942a195ff3.ttf') format('truetype'), url('webfont/d1e02d66f65a8dab87c923942a195ff3.svg#.') format('svg');
        font-weight: bold;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: '';
        src: url('webfont/c291dc1437f7f180bf187a2930a10acd.eot');
        src: url('webfont/c291dc1437f7f180bf187a2930a10acd.eot?#iefix') format('embedded-opentype'), url('webfont/c291dc1437f7f180bf187a2930a10acd.woff2') format('woff2'), url('webfont/c291dc1437f7f180bf187a2930a10acd.woff') format('woff'), url('webfont/c291dc1437f7f180bf187a2930a10acd.ttf') format('truetype'), url('webfont/c291dc1437f7f180bf187a2930a10acd.svg#') format('svg');
        font-weight: bold;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'Circular Sp UI v3 T Book';
        src: url('webfont/CircularSpUIv3T-Book.eot');
        src: url('webfont/CircularSpUIv3T-Book.eot?#iefix') format('embedded-opentype'), url('webfont/CircularSpUIv3T-Book.woff2') format('woff2'), url('webfont/CircularSpUIv3T-Book.woff') format('woff'), url('webfont/CircularSpUIv3T-Book.ttf') format('truetype'), url('webfont/CircularSpUIv3T-Book.svg#CircularSpUIv3T-Book') format('svg');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: '.';
        src: url('webfont/5dbdb7c5bda2a206ea7ef2eee118dd51.eot');
        src: url('webfont/5dbdb7c5bda2a206ea7ef2eee118dd51.eot?#iefix') format('embedded-opentype'), url('webfont/5dbdb7c5bda2a206ea7ef2eee118dd51.woff2') format('woff2'), url('webfont/5dbdb7c5bda2a206ea7ef2eee118dd51.woff') format('woff'), url('webfont/5dbdb7c5bda2a206ea7ef2eee118dd51.ttf') format('truetype'), url('webfont/5dbdb7c5bda2a206ea7ef2eee118dd51.svg#.') format('svg');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
    }
    
    .al-top {
        padding-top: 913px;
        max-width: 1292px;
        padding-left: 14.44rem;
    }
    .al-profilo{
       font-size:1.8rem !important;
    }
    .al-profilo-label{
       font-size:1.2rem !important;
    }
    .logo-hook {
        width: 20%;
        height: auto;
    }
    
    .btn-action {
        background-color: black !important;
    }

    .pfpBox {
    border-radius: 100%;
    height: 180px;
    width: 180px;
background-image: url(https://icon-library.com/images/avatar-icon-images/avatar-icon-images-4.jpg4);
background-size:cover;
    left: 170px;
    top: 165px;
    position: relative;
    z-index: 2;
}
.al-table{
   font-size:20px;
  /* max-width:700px !important;
   margin-left:445px !important;*/
}
.infromazioniply {
   /*
    padding-bottom: 11px !important;
    padding-top: 83px !important;
    margin-left: 400px !important;
    color: black!important;
    max-width: 500px !important;*/
}
.infromazioniply2{

   padding-top: 83px !important;
    margin-left: 400px !important;
    color: black!important;
    max-width: 400px !important;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    font-size: 15px;
    color: black !important;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;

}
.al-menu{
   color:#fff !important;

}
.fa .fa-bars{
   color:#fff !important;

}
.fa{
color:#fff !important;

}
.al-welcome-title{
   font-size:20px;
   color:#fff;
   padding-top:11px;
   text-align:right;
   max-width:1014px;
}/*
 CSS for the main interaction
*/
.tabset > input[type="radio"] {
  position: absolute;
  left: -200vw;
}
.ciao{
  
  max-width:700px;
}
.tabset .tab-panel {
  display: none;
}

.tabset > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
.tabset > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
.tabset > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
.tabset > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
.tabset > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
.tabset > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
  display: block;
}

/*
 Styling
*/
body {
  font: 16px/1.5em "Overpass", "Open Sans", Helvetica, sans-serif;
  color: #333;
  font-weight: 300;
}

.tabset > label {
  position: relative;
  display: inline-block;
  padding: 15px 15px 25px;
  border: 1px solid transparent;
  border-bottom: 0;
  cursor: pointer;
  font-weight: 600;
}

.tabset > label::after {
  content: "";
  position: absolute;
  left: 15px;
  bottom: 10px;
  width: 22px;
  height: 4px;
  background: #8d8d8d;
}

.tabset > label:hover,
.tabset > input:focus + label {
  color: #06c;
}

.tabset > label:hover::after,
.tabset > input:focus + label::after,
.tabset > input:checked + label::after {
  background: #06c;
}

.tabset > input:checked + label {
  border-color: #ccc;
  border-bottom: 1px solid #fff;
  margin-bottom: -1px;
}

.tab-panel {
  padding: 30px 0;
  border-top: 1px solid #ccc;
}

3

body {
  padding: 30px;
}

.tabset {
    padding-left: 444px;


}
</style>

<body>






<div class="header">
	
	
</div>
<div class="content">
  	<!-- notification message -->
 	<?php 
	 if (isset($_SESSION['success'])) : 
	 
	 ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->

</div>
		
    












<body>
    <div class="topnav">
        <a href="index.html" class="al-menu">VENUS</a>
        <div id="myLinks">
            <a href="musicplayer.html" class="al-menu">MUSIC PLAYER</a>
            <a href="#contact" class="al-menu">LIVE</a>
            <a href="#about" class="al-menu">EVENT / TIKET</a>
            <a href="#news" class="al-menu">BLOG</a>
            <a href="#contact"class="al-menu">CONTACT</a>
            <a href="" data-toggle="modal" data-target="#modalLoginForm" class="al-menu">LOGIN REGISTER   <i class="fas fa-sign-in-alt"></i> </a>
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4>
                                ENTRA NELLA TUA ZONA DI CONFORT
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <h4>
                            Perchè registrarti?
                        </h4>
                        <p class="comment">
                            <li>
                                <ul>
                                    SALVA LE TUE PLAYLIST ED ASCOLTALE QUANDO VUOI!
                                </ul>
                                <ul>COMMENTA E CONDIVIDI SUI SOCIAL LE TUE CANZONI</ul>
                                <ul>C</ul>
                            </li>
                        </p>
                        <div class="modal-footer d-flex justify-content-center">
                            <a href="login.php"> <button class="al-button">Login</button></a>
                            <a href="register.php"> <button class="al-button">REGISTER</button></a>
                            <br>
                            <br>
                            <br>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-google"></i>
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>

    </div>
    </div>


    <div class="header">
        <h2 class="al-header-title">
           ciao <br>
        <?php echo $_SESSION['username']; ?>
        </h2>
      <h4 class="al-welcome-title">
      BENVENUTO NEL TUO SPAZIO PERSONALE VENUS
      </h4>
  
        
    </div>



    
    <div class="pfpBox">
       <img scr="https://images.unsplash.com/photo-1577895509079-2caca289c3a0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1001&q=80">
    </div>

   
    







<div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
  <label for="tab1">Märzen</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
  <label for="tab2">Rauchbier</label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
  <label for="tab3">Dunkles Bock</label>
  
  <div class="tab-panels">
    <section id="marzen" class="tab-panel">
    



    
        <b class="informazione">INFORMAZIONI PERSONALI </b>
        
        <br> 
        <table class="table al-table">
  <thead>
    <tr>
      <th scope="col" class="al-profilo">PROFILO</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="al-profilo-label">NAME</th>
      <td>

        <?php echo $_SESSION['username'];  ?>
      </td>
      
    </tr>
    <tr>
      <th scope="row" class="al-profilo-label">NIKNAME</th>
      <td>
        <?php echo "@", $_SESSION['username']; ?>
      </td>
      
    </tr>
    
    <tr>
      <th scope="row" class="al-profilo-label">PASSOWORD</th>
      <td>************</td>
    </tr>
  </tbody>
</table>
          </section>
    <section id="rauchbier" class="tab-panel">
      <h2>6B. Rauchbier</h2>
      <p><strong>Overall Impression:</strong>  An elegant, malty German amber lager with a balanced, complementary beechwood smoke character. Toasty-rich malt in aroma and flavor, restrained bitterness, low to high smoke flavor, clean fermentation profile, and an attenuated finish are characteristic.</p>
      <p><strong>History:</strong> A historical specialty of the city of Bamberg, in the Franconian region of Bavaria in Germany. Beechwood-smoked malt is used to make a Märzen-style amber lager. The smoke character of the malt varies by maltster; some breweries produce their own smoked malt (rauchmalz).</p>
    </section>
    <section id="dunkles" class="tab-panel">
      <h2>6C. Dunkles Bock</h2>
      <p><strong>Overall Impression:</strong> A dark, strong, malty German lager beer that emphasizes the malty-rich and somewhat toasty qualities of continental malts without being sweet in the finish.</p>
      <p><strong>History:</strong> Originated in the Northern German city of Einbeck, which was a brewing center and popular exporter in the days of the Hanseatic League (14th to 17th century). Recreated in Munich starting in the 17th century. The name “bock” is based on a corruption of the name “Einbeck” in the Bavarian dialect, and was thus only used after the beer came to Munich. “Bock” also means “Ram” in German, and is often used in logos and advertisements.</p>
    </section>
  </div>
  
</div>

<p><small>Source: <cite><a href="https://www.bjcp.org/stylecenter.php">BJCP Style Guidelines</a></cite></small></p></div>



























    
    <p class="infromazioniply">    
        <b class="informazione">INFORMAZIONI PERSONALI </b>
        
        <br> 
        <table class="table al-table">
  <thead>
    <tr>
      <th scope="col" class="al-profilo">PROFILO</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="al-profilo-label">NAME</th>
      <td>

        <?php echo $_SESSION['username'];  ?>
      </td>
      
    </tr>
    <tr>
      <th scope="row" class="al-profilo-label">NIKNAME</th>
      <td>
        <?php echo "@", $_SESSION['username']; ?>
      </td>
      
    </tr>
    
    <tr>
      <th scope="row" class="al-profilo-label">PASSOWORD</th>
      <td>************</td>
    </tr>
  </tbody>
</table>
        
        
        
      </p>
 
    
<a href="musicplayer.html" class="al-link">
  <i class="fas fa-arrow-left"></i>
            torna indietro

</a>




<?php  if (isset($_SESSION['username'])) : ?>
    	<h1 class="title">BENVENUTO NELLO SPAZIO PERSONALE VENUS <strong><?php echo $_SESSION['username']; ?></strong></h1>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>




        <small class="footer__copyright">© VENUS, 2021. Created by Andrea Lepori andrealepori.designer@gmail.com.</small>
    </div>


</body>
<script src="JS/zone.js"></script>
</html>