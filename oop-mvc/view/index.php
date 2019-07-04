<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>layout</title>
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".bar").click(function() {
				$("#menuUpdate ul").slideToggle()
			});
		});

	</script>
</head>

<body>
	<header>
		<div id="backgroundTop">
			<div id="headerContent">
				<div class="icon-top">
					<img src="images/Makestyle.png" />
					<img src="images/Makestyle1.png" />
					<img src="images/Makestyle1 (copy).png" />
				</div>
				<nav id="menuTop">
					<ul>
						<?php
if(isset($_SESSION['user_name'])){

?>
						<li>
							<a>
								<i class="glyphicon glyphicon-user"></i>
								<strong><?=$_SESSION['user_name']?></strong>
							</a>
						</li>
						<li>
						
							<a href="logout.php"><strong>Logout</strong></a>
						</li>
						<?php
							}
							else{
							?>
						<li>
							<a href="register.php"><strong>Register</strong></a>
						</li>
						<li>
							<a href="login.php"><strong>Login</strong></a>
						</li>
						<?php
							}
						?>


						<li class="menu-sub">


							<a class="link-menu" href="#" title="handlekury">
								<i class="fa fa-caret-down"></i><strong>HANDLEKURY</strong></a>
							<div class="submenu-content">
								<img src="images/Makestyle4.png" />
							</div>
						</li>
						<li><img width="30px" src="images/store1.png" id="imageStore1" /></li>
						<li><img width="35px" src="images/store.png" id="imageStore" /></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="logo">
			<img aline="center" src="images/logo.png" />
		</div>
		<div id="handlekurv-mobile">
			<a href="#" title="handlekurv-mobile"><strong>HANDLEKURV</strong></a>
			<img width="25px" src="images/store1.png" />
		</div>
		<nav id="menuTop-mobile">
			<ul>
				<li><a href="#" title="kundesen">KUNESSENTER</a></li>
				<li><a href="#" title="logg inn min sida">LOGG INN MIN SIDE</a></li>
				<li><a href="#" title="registeredeg">REGISTERE DEG</a></li>
				<li><a href="#" title="favoriter">FAVORITER</a></li>
			</ul>
		</nav>

		<div id="menuUpdate">
			<ul>
				<li><img width="30px" class="bar" src="images/bar.png" alt=""></li>
				<li><a href="#" title="TIL HENNE">TIL HENNE</a></li>
				<li><a href="#" title="TIL HANNA">TIL HANNA</a></li>
				<li><a href="#" title="DUFT">DUFT</a></li>
				<li><a href="#" title="MERKER">TMERKER</a></li>
				<li><a href="#" title="ACCESSOARER">ACCESSOARER</a></li>
				<li><a href="#" title="OKOLOGISK"> ØKOLOGISK</a></li>
				<li><a href="#" title="TILBUD">TILBUD</a></li>
			</ul>
			<div class="box">

				<input type="search" id="search" placeholder="SØk PRODUKTER..." /><i id="invert" class="fa fa-search"></i>
			</div>
		</div>

	</header>
	<main>
		<div id="banner">
			<div>
				<img width="15px" class="image-add" src="images/add.png" alt="">
			</div>
			<div class="img-banner">
				<img width="100%" src="images/banner.png" />
				<div>
					<img width="40px" class="image-slide" src="images/Makestyle-slide.png" alt="">
				</div>

				<div>
					<img width="40px" class="image-slide2" src="images/Makestyle-next.png" alt="">
				</div>
				<div>
					<img width="15px" class="image-slide1" src="images/Makestyle-slide1.png" alt="">
				</div>
			</div>

			<div id="menuSelect">
				<ul>
					<li><a class="nyhener" href="#" title="NYHETER DESEMEMR">NYHETER DESEMEMR</a></li>
					<li class="Bestse"><a class="bestse" href="#" title="BESTSELGERE">BESTSELGERE</a></li>
					<li><a class="tilbud" href="#" title="TILBUD">TILBUD</a></li>
					<li><a class="make" href="#" title="MAKESTYLE ANBEFALER">MAKESTYLE ANBEFALER</a></li>
				</ul>
			</div>
		</div>
		<div id="listTop">
			<ul>
				<li>
					<div id="itemTop">
						<div class="item-Favorter">
							<div class="favo">
								<a href="#" title="favorier">FAVORTER</a>
							</div>
							<div class="mobile-next">
								<img src="images/images-mobile/Makestyle-mobile-iconnext1.png" />
								<img src="images/images-mobile/Makestyle-mobile-iconnextright1.png" />

							</div>
						</div>
						<div class="item" align="center">
							<img class="eos" src="images/item11.png" />
							<img class="heart" src="images/heart_marked.png" />
							<!-- <img src="images/kiop.png" /> -->
						</div>
						<div class="item-content">
							<img class="eye" src="images/eye-marked.png" />
							<p class="top-Content1">TL FRESH FRUIT</p>
							<p class="top-Content-bottom">224 <br>
								<br><strong>-224</strong> </p>
						</div>
					</div>
				</li>
				<li>
					<div id="itemTop">
						<div class="item-Favorter">
							<div class="favo">
								<a href="#" title="favorier">FAVORTER</a>
							</div>
							<div class="mobile-next">
								<img src="images/images-mobile/Makestyle-mobile-iconnext1.png" />
								<img src="images/images-mobile/Makestyle-mobile-iconnextright1.png" />

							</div>
						</div>
						<div class="item" align="center">
							<img class="eos" src="images/item2.png" />
							<img class="heart" src="images/heart.png" />
							<!-- <img src="images/kiop.png"/> -->
						</div>
						<div class="item-content">
							<!-- <img class="eye" src="images/eye_maked.png"/> -->
							<p class="top-Content">TL FRESH FRUIT</p>
							<p class="top-Content-bottom">224 <br>
								<br><strong>-224</strong> </p>
						</div>
					</div>
				</li>
				<li>
					<div id="itemTop">
						<div class="item-Favorter">
							<div class="favo">
								<a href="#" title="favorier">FAVORTER</a>
							</div>
							<div class="mobile-next">
								<img src="images/images-mobile/Makestyle-mobile-iconnext1.png" />
								<img src="images/images-mobile/Makestyle-mobile-iconnextright1.png" />

							</div>
						</div>
						<div class="item" align="center">
							<img class="eos" src="images/item3.png" />
							<img class="heart" src="images/heart.png" />
							<!-- <img src="images/kiop.png"/> -->
						</div>
						<div class="item-content">
							<!-- <img class="eye" src="images/eye_maked.png"/> -->
							<p class="top-Content">TL FRESH FRUIT</p>
							<p class="top-Content-bottom">224 <br>
								<br><strong>-224</strong> </p>
						</div>
					</div>
				</li>
				<li>
					<div id="itemTop">
						<div class="item-Favorter">
							<div class="favo">
								<a href="#" title="favorier">FAVORTER</a>
							</div>
							<div class="mobile-next">
								<img src="images/images-mobile/Makestyle-mobile-iconnext1.png" />
								<img src="images/images-mobile/Makestyle-mobile-iconnextright1.png" />

							</div>
						</div>
						<div class="item" align="center">
							<img class="eos" src="images/item4.png" />
							<img class="heart" src="images/heart.png" />
							<!-- <img src="images/kiop.png"/> -->
						</div>
						<div class="item-content">
							<img class="eye" src="images/eye.png" />
							<p class="top-Content">TL FRESH FRUIT</p>
							<p class="top-Content-bottom">224 <br>
								<br><strong>-224</strong> </p>
						</div>
					</div>
				</li>
				<li>
					<div id="itemTop">
						<div class="item-Favorter">
							<div class="favo">
								<a href="#" title="favorier">FAVORTER</a>
							</div>
							<div class="mobile-next">
								<img src="images/images-mobile/Makestyle-mobile-iconnext1.png" />
								<img src="images/images-mobile/Makestyle-mobile-iconnextright1.png" />

							</div>
						</div>
						<div class="item" align="center">
							<img class="eos" src="images/item5.png" />
							<img class="heart" src="images/heart.png" />
							<div>
								<!-- <img src="images/kiop.png"/> -->
							</div>
						</div>
						<div class="item-content">
							<img class="eye" src="images/eye.png" />
							<p class="top-Content">TL FRESH FRUIT</p>
							<p class="top-Content-bottom">224 <br>
								<br><strong>-224</strong> </p>
						</div>
					</div>
					<div id="itemTopmake">
						<img src="images/images-mobile/item-mobile.png" />
						<img src="images/images-mobile/item-mobile.png" />
						<img src="images/images-mobile/item-mobile.png" />
						<img src="images/images-mobile/item-logo.png" />
					</div>
					<div id="itemToplogo">
						<img src="images/images-mobile/Makestyle-mobile-iconbottomleft.png" />
						<img width="120px" src="images/images-mobile/logo-left.png" />
						<img width="120px" src="images/images-mobile/logo-right.png" />
						<img src="images/images-mobile/Makestyle-mobile-iconbottomright.png" />
					</div>
					<div id="itemTopterm">
						<img src="images/images-mobile/Makestyle-mobile-term1.png" />
						<img src="images/images-mobile/Makestyle-mobile-term1.png" />
						<img src="images/images-mobile/Makestyle-mobile-term1.png" />
						<img src="images/images-mobile/Makestyle-mobile-term1.png" />
						<img src="images/images-mobile/Makestyle-mobile-term1.png" />
					</div>
					<div id="itemTopesta">
						<p><strong>UTVALAGE MAKER</strong></p>
						<img src="images/images-mobile/Makestyle-mobile-establish.png" />
						<img src="images/images-mobile/Makestyle-mobile-establis2.png" />
					</div>
				</li>
			</ul>
		</div>
		<div id="listBottom">
			<ul>
				<li>
					<img width="300px" src="images/girl.png" />
					<div class="item-Bottom">
						<p align="left" class="bottom-Content1">SISTE MYTT FRA <br>MAKESTYLEBLOGGEN</p>
					</div>
				</li>
				<li>
					<img width="300px" src="images/item6.png" />
					<div class="item-Bottom">
						<p class="bottom-Content">NEGLER OG NEGLEPELIE</p>
					</div>
				</li>
				<li>
					<img width="300px" src="images/item7.png" />
					<div class="item-Bottom">
						<p class="bottom-Content">GRONN SONE</p>
					</div>
				</li>
			</ul>
		</div>
	</main>
	<!-- <div class="footer">
        <div class="main-footer">
            <div class="info">
                <div class="email-fill-out">
                    <br>ABONNERE NYHETSBREV <br><br>
                    <input type="text" value="E-POST ADRESSE" size="20px">
                </div>
                <div class="facebook-insta-logo">
                    <div class="facebook-footer">
                        <img src="images/fb.png">FOLG OSS PA FACEBOOK <br>
                        <img src="images/insta.png"> FOLG OSS PA INSTAGRAM
                    </div>
                </div>
                <div class="footer-spac"></div>
                <div class="footer-space"">
                    <br> &ensp;KUNDLE SUPPORT
                    <br> &ensp;66695333
                    <br> &ensp;post@makestyle.no
                </div>
            </div>
            <div class=" footer-menu">
                    <div class="kontakt-oss-menu">
                        KONTAKT OSS <br> <br>
                        Om Makestyle <br>
                        Kontakt oss <br>
                        Jobb hos oss
                    </div>
                    <div class="handle-trygt-menu">
                        HANDLE TRYGT <br><br>
                        Betingelser <br>
                        Garanti <br>
                        Retur
                    </div>
                    <div class="min-konto-menu">
                        MIN KONTO <br><br>
                        Handlekurv <br>
                        Profil
                    </div>
                    <div class="ingen-tollgebyr-menu">
                        INGEN TOLLEGEBYR <br> <br>
                        90 DAGER APENT KJOP <br> <br>
                        KUN 49 KR FRANK <br> <br>
                        RASK LEVERING
                    </div>
                </div>
                <div class="payment-logo">
                    <img src="images/logo_final.png">
                </div>
            </div>
        </div>
        <div class="copyright">
            c 2013 MAKESTYLE // DESIGN + CMS NETPOWER
            <div class="circle"></div>
        </div>
    </div> -->
</body>

</html>
