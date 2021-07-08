
<footer class="pt-5 pb-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<img src="resources/images/logo_main.png" class="img-fluid footer-logo">
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h4>Services</h4>

					<ul>
						<li><a href="services.php">Consumer</a></li>
						<li><a href="services.php">Business</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="widget">
					<h4>Operations</h4>

					<ul>
						<li><a href="uganda.php">Uganda</a></li>
						<li><a href="nigeria.php">Nigeria</a></li>
						<li><a href="tanzania.php">Tanzania</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="widget">
					<h4>About</h4>

					<ul>
						<li><a href="">Who we are</a></li>
						<li><a href="">Partners</a></li>
						<li><a href="">Key managment</a></li>
						<li><a href="news-event.php">Media</a></li>
						<li><a href="careers.php">Careers</a></li>
					</ul>
				</div>
			</div>
		</div>


		<div class="row policy-ul">
			<div class="col-lg-12">
				<ul>
					<li><a href="terms-of-use.php">Terms of Use</a></li>
					<li><a href="privacy-policy.php">Privacy Policy</a></li>
					<li><a href="terms-conditions.php">Terms & Conditions</a></li>
				</ul>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-lg-8">
				 <p class="mb-0">Smile Telecoms Holdings Company Registration 72301. Smile Communications Company Registration 2007/009879/07</p>
			</div>
			<div class="col-lg-4 text-right">
				 <p class="mb-0">Copyright &copy; 2021 Smile Communications</p>
			</div>
		</div>

	</div>
</footer>





	<script src="resources/js/jquery.min.js"></script>
   	<script src="resources/js/popper.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/slick/slick.js" type="text/javascript"></script>

    <script type="text/javascript">
    	// header fixed
		window.onscroll = function() {myFunction()};
		var header = document.getElementById("fixedHeader");
		var sticky = header.offsetTop;
		function myFunction() {
		if (window.pageYOffset > sticky) {
		    	header.classList.add("sticky");
		  	} else {
		    	header.classList.remove("sticky");
		  	}
		}


    	// country box
    	$('.country-box').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 4,
		  responsive: [
		    {
		      breakpoint: 991,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});


		// Press Release
		$('.press-slider').slick({
		  dots: false,
		  infinite: false,
		  speed: 300,
		  arrows:true,
		  slidesToShow: 3,
		  slidesToScroll: 2,
		  responsive: [
		    {
		      breakpoint: 991,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: false,
		        dots: false
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 580,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});

		
    </script>
</body>	
</html>
