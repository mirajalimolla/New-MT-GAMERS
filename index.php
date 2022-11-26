<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title>This is my first web page in this new computer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- Header scroll effect -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"
		integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<!-- This is typing APT -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"
		integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
		crossorigin="anonymous"></script>
	<!-- Font Awesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
		integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<section id="owner">
		<div class="header_saticfy">
			<header id="header">
				<div class="header_container">
					<div class="menu">
						<ul>
							<li><a href="#" style="color: crimson;">HOME</a></li>
							<li><a href="#">VIEDO</a></li>
							<li><a href="#">LIVE STREAMING</a></li>
						</ul>
					</div>
					<div class="logo">
						<img src="mtGamers.png" alt="The image is not loaded">
					</div>
					<div class="menu">
						<ul>
							<li><a href="#">GROUP</a></li>
							<li><a href="contact.php">CONTACT US</a></li>
							<li><a href="#">LOGIN</a></li>
						</ul>
					</div>
				</div>
			</header>
		</div>

		<section id="video">
			<!-- Image Section/Home bar -->
			<video autoplay muted loop class="myVideo">
				<source src="bg.mp4" type="video/mp4">
			</video>

			<section id="video_container">
				<div class="mySelf">
					<h1>Hi, I'm <span class="typeName">MT GAMERS</span>
					</h1>
					<big>I'm a <b class="typing"></b></big>
				</div>
			</section>
		</section>

		<!-- Create Service section -->
		<section id="service">
			<div class="service_container">
				<div class="serice_header">
					<h1>OUR SERVICES</h1>
				</div>
				<div class="service_box row">
					<div class="box col-md">
						<h2>Videos</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus voluptate
							harum, nulla hic itaque architecto ea quaerat distinctio quisquam corrupti! Doloremque
							adipisci molestiae possimus iusto aliquid recusandae cupiditate expedita quae veritatis,
							vitae hic. Facilis optio consequuntur soluta maxime dolor.</p>
					</div>
					<div class="box col-md">
						<h2>Live Steam</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus voluptate
							harum, nulla hic itaque architecto ea quaerat distinctio quisquam corrupti! Doloremque
							adipisci molestiae possimus iusto aliquid recusandae cupiditate expedita quae veritatis,
							vitae hic. Facilis optio consequuntur soluta maxime dolor.</p>
					</div>
					<div class="box col-md">
						<h2>Contests</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus voluptate
							harum, nulla hic itaque architecto ea quaerat distinctio quisquam corrupti! Doloremque
							adipisci molestiae possimus iusto aliquid recusandae cupiditate expedita quae veritatis,
							vitae hic. Facilis optio consequuntur soluta maxime dolor.</p>
					</div>
					<div class="box col-md">
						<h2>Contests</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus voluptate
							harum, nulla hic itaque architecto ea quaerat distinctio quisquam corrupti! Doloremque
							adipisci molestiae possimus iusto aliquid recusandae cupiditate expedita quae veritatis,
							vitae hic. Facilis optio consequuntur soluta maxime dolor.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Create dynamic image changer -->
		<section id="image">
			<div class="shadow">
				<!-- <div id="img_arrow" class="left_arrow">
					<big>></big>
				</div> -->
				<img  class="immm" src="image_bg2.png" alt="" height="400px">
				<div class="image_image" src="">
					<img class="cngImg">
				</div>
				<!-- <div id="img_arrow" class="right_arrow">
					<big><</big>
				</div> -->
			</div>
		</section>

		<!-- Create About section -->
		<section id="about">
			<div class="about_container">
				<h1>ABOUT ME</h1>
				<p> Hi, I am Rahul Khan owner of the MT GAMERS youtube channel, I have been creating Free Fire gaming
					videos on youtube. I'm RK! Here you will find me playing mobile games and having some fun. I'm
					playing Free Fire. With you on the MT Gamers channel. Full Indian gamer with Bengali and Hindi
					commentary.</p>
			</div>
		</section>

		<!-- Create details form -->
		<section id="details">
			<div class="details_container">
				<h1>DETAILS FOR ME</h1>
				<div class="details1">
					<div class="image">
						<img src="mtGamers.png">
					</div>
					<div class="image_details">
						<h2>Who i'm I</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia, blanditiis
							obcaecati quibusdam at, tempore veniam corporis, maxime hic expedita officiis est repellat
							repellendus ratione libero optio fugit ab ea odio voluptatum? Dignissimos sit veritatis
							enim. Laboriosam, dolor alias! Tenetur tempore quis error nostrum perspiciatis quibusdam
							libero, deserunt quaerat est beatae consequatur numquam, magni, perferendis reiciendis rem!
							Voluptatum, porro architecto? Magnam, facere! Natus nobis vel deleniti modi totam blanditiis
							explicabo ea vero quam corporis alias fugiat sed eum facere repellat, neque soluta beatae
							consectetur quo ipsam laborum quae. Autem rem porro reiciendis sequi dolorem tempora odio.!
						</p>
					</div>
				</div>
				<div class="details2">
					<div class="image_details">
						<p class="details_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae
							quia, blanditiis obcaecati quibusdam at, tempore veniam corporis, maxime hic expedita
							officiis est repellat repellendus ratione libero optio fugit ab ea odio voluptatum?
							Dignissimos sit veritatis enim. Laboriosam, dolor alias! Tenetur tempore quis error nostrum
							perspiciatis quibusdam libero, deserunt quaerat est beatae consequatur numquam, magni,
							perferendis reiciendis rem! Voluptatum, porro architecto? Magnam, facere! Natus nobis vel
							deleniti modi totam blanditiis explicabo ea vero quam corporis alias fugiat sed eum facere
							repellat, neque soluta beatae consectetur quo ipsam laborum quae. Autem rem porro reiciendis
							sequi dolorem tempora odio.!</p>
					</div>
					<div class="image">
						<img src="freeFire.png">
					</div>
				</div>
				<div class="details3">
					<div class="image">
						<img src="garena_logo.png">
					</div>
					<div class="image_details">
						<p class="details_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae
							quia, blanditiis obcaecati quibusdam at, tempore veniam corporis, maxime hic expedita
							officiis est repellat repellendus ratione libero optio fugit ab ea odio voluptatum?
							Dignissimos sit veritatis enim. Laboriosam, dolor alias! Tenetur tempore quis error nostrum
							perspiciatis quibusdam libero, deserunt quaerat est beatae consequatur numquam, magni,
							perferendis reiciendis rem! Voluptatum, porro architecto? Magnam, facere! Natus nobis vel
							deleniti modi totam blanditiis explicabo ea vero quam corporis alias fugiat sed eum facere
							repellat, neque soluta beatae consectetur quo ipsam laborum quae. Autem rem porro reiciendis
							sequi dolorem tempora odio.!</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Creare the video section -->
		<section id="video_slider">
			<!-- <i onclick="slideRight()" id="left_btn" class="arrow fa-solid fa-arrow-left"></i> -->
			<div class="video_buttons">
				<b onclick="slideRight()" id="left_btn" class="arrow"><</b>
				<b onclick="slideLeft()" id="right_btn" class="arrow">></b>
			</div>
			<div class="slider_container">
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/gHhsCdXKmbQ?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/grHrmQ7YGW4?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/grHrmQ7YGW4?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
				<div class="slider_item">
					<iframe width="300" height="300" style="margin-bottom: -4px;" dsrc="https://www.youtube.com/embed/_XMG9LXS6qU?autoplay=1&mute=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
				</div>
			</div>
			<!-- <i onclick="slideLeft()" id="right_btn" class="arrow fa-solid fa-arrow-right"></i> -->
		</section>

		<!-- Create footer section -->
		<footer id="footer">
			<div class="footer_container">
				<div class="heading_section">
					<h1>MT GAMERS</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, nulla quos voluptatibus eligendi
						natus voluptatum ut dolorem ipsum soluta beatae amet.</p>
					<hr style="opacity: 1;">
				</div>
				<div class="details_section">
					<div class="footer_menu">
						<ul>
							<a href="#"><b>></b><li>HOME</li></a>
							<a href="#"><b>></b><li>VIDEO</li></a>
							<a href="#"><b>></b><li>LIVE STREAMING</li></a>
						</ul>
						<ul>
							<a href="#"><b>></b><li>GROUP</li></a>
							<a href="#"><b>></b><li>LOGIN</li></a>
							<a href="#"><b>></b><li>SIGN UP</li></a>
						</ul>
					</div>
					<div class="social">
						<h3>FOLLOW HERE</h3>
						<a target="_blank" href="https://www.facebook.com/MTgamersRK"><i
								class="fa-brands fa-facebook"></i></a>
						<a target="_blank" href="https://www.youtube.com/channel/UC-eWMHHZfutLlVJvQFGe6Xw"><i
								class="fa-brands fa-youtube"></i></a>
						<a target="_blank" href="https://www.instagram.com/mtgamerspro/"><i
								class="fa-brands fa-instagram"></i></a>
						<a target="_blank" href="#"><i class="fa-brands fa-discord"></i></a>
					</div>
					<div class="contact">
						<h3>Contact me</h3>
						<span>No - </span><b>91+ 1234567890</b>
					</div>
					
				</div>
				<div class="copyright">
					<big>ⓒcopyright</big>
				</div>
			</div>
		</footer>
	</section>

	<script type="text/javascript" src="script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
		crossorigin="anonymous"></script>
</body>
</html>