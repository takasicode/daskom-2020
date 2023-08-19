<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CONTACT</title>
		<link rel="stylesheet" href="style_CONTACT.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<header class="logo">
		<a href="#" class="logo">SONY</a>
		<ul>
			<div id="marker"></div>
			<li><a href="HOME.php">HOME</a></li>
			<li><a href="GALLERY.php">GALLERY</a></li>
			<li><a href="ABOUT.php">ABOUT</a></li>
			<li><a href="index.php">CONTACT</a></li>
		</ul>
	</header>
	<Section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
			<p>Jika kamu memiliki pertanyaan, pesan, ataupun kritik tentang produk kami, silahkan
			hubungi kami dengan cara mengisi form di bawah ini</p>
		</div>
		<div class="container">
			<div class="ContactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Alamat</h3>
						<p>Jalan pakunegara nomor 16 pangkalan bun</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i> </div>
					<div class="text">
						<h3>Email</h3>
						<p>111202012906@mhs.dinus.ac.id</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h3>No. telp</h3>
						<p>082252917552</p>
					</div>
				</div>
			</div>
			<div class="contactform">
				<form action="proses.php" method="POST">
					<h2>Kirim Pesan</h2>
					<div class="inputBox">
						<input type="text" name="nama" required="required">
						<span>Nama Lengkap</span>
					</div>
					<div class="inputBox">
						<input type="text" name="email" required="required">
						<span>Email</span>
					</div>
					<div class="inputBox">
						<textarea type="text" name="pertanyaan" required="required"></textarea>
						<span>Pertanyaan</span>
					</div>
					<div class="inputBox">
						<input type="submit" name="submit_form" value="send">
					</div>
				</form>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 0);
		})
	</script>
	<footer>
		<div class="container1">
			<div class="sec aboutus">
				<h2>About Us</h2>
				<p> Sony merupakan sebuah perusahaan yang bergerak di bidang inovasi
				teknologi. Sony telah banyak mengeluarkan berbagai macam inovasi di berbagai
				bidang teknologi salah satu yang terkenal ialah Playstation yang merupakan
				inovasi Sony yang sangat luar biasa di bidang teknologi hiburan.</p>
				<ul class="sci">
					<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="sec quickLinks">
				<h2>Quick Link</h2>
				<ul>
					<li><a href="HOME.html">Home</a></li>
					<li><a href="GALLERY.html">Gallery</a></li>
					<li><a href="ABOUT.html">About</a></li>
					<li><a href="CONTACT.html">Contact</a></li>
				</ul>
			</div>
			<div class="sec contact1">
				<h2>Contact Info</h2>
				<ul class="info">
					<li>
						<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						<span>Jalan Pakunegara no. 16 </br> pangkalan bun</span>
					</li>
					<li>
						<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						<p><a href="telp:082252917552">+628 225 291 552</a></br>
							<a href="telp:082252917552">+628 225 291 552</a></br></p>
					</li>
					<li>
						<span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
						<p><a href="mailto:111202012906@mhs.dinus.ac.id">111202012906@mhs.dinus.ac.id</a></p>
					</li>
				</ul>
			</div>
		</div>
	</footer>
	<div class="copyright">
		<p>Copyright 2020 Kelompok 4105 - Daskom. All rights Reserved :v</p>
	</div>
<body>
</html>