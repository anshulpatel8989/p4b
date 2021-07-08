@include('layouts.header_main')

<div class="slider">
	<img src="resources/images/homeSlider.jpg" class="img-fluid">
</div>

<div class="bg-light py-5">
	<div class="container home-country">

		<p>Founded in 2007, with its head office in England, Smile Telecoms Holdings Limited (Smile Group) owns and operates 4G LTE mobile broadband networks in the 800MHz band. As a result, customers can enjoy nationwide SuperFast mobile broadband services, and SuperClear voice calls over LTE in Nigeria, Tanzania, Uganda, and the Democratic Republic of Congo.</p>

		<div class="country-box">
			<div>
				<a href="nigeria.php">
					<img src="resources/images/nigeria.png">
					<h5>Nigeria</h5>
				</a>
			</div>
			<div>
				<a href="uganda.php">
					<img src="resources/images/uganda.png">
					<h5>Uganda</h5>
				</a>	
			</div>
			<div>
				<a href="tanzania.php">
					<img src="resources/images/tanzania.png">
					<h5>Tanzania</h5>
				</a>	
			</div>
			<div>
				<a href="the-drc.php">
					<img src="resources/images/drc.png">
					<h5>Democratic Republic of Congo</h5>
				</a>	
			</div>
		</div>		
	</div>
</div>

	

<div class="press-releases py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="heading text-center">Press Releases</h2>
			</div>
		</div>
	
		<div class="row">
			<div class="col-lg-12">
				<div class="press-slider">
				@foreach($news as $news_data)
					<div>
						<div class="press-box">
							<img src="resources/images/press1.jpg" class="img-fluid">
							<div class="content">
								<p>18 Feb 2021</p>
								<h5>{{$news_data->heading}}</h5>
							</div>	
						</div>		
					</div>
					@endforeach
					<div>
						<div class="press-box">
							<img src="resources/images/press1.jpg" class="img-fluid">
							<div class="content">
								<p>18 Feb 2021</p>
								<h5>Smile Telecomes Holdings Ltd. ("Groups") Announces Significant Changes in its Leadership</h5>
							</div>	
						</div>		
					</div>

					<div>
						<div class="press-box">
							<img src="resources/images/press1.jpg" class="img-fluid">
							<div class="content">
								<p>02 Jan 2021</p>
								<h5>Smile Telecomes Announces Shift in its Center of Main Interests to England And Wales</h5>
							</div>	
						</div>
					</div>

					<div>
						<div class="press-box">
							<img src="resources/images/press1.jpg" class="img-fluid">
							<div class="content">
								<p>12 December 2020</p>
								<h5>Smile Telecomes Holdings Enteres New Era with Approved Restructuring Plan - Fresh Money</h5>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="why-choose py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="heading text-center">Why Choose Smile?</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 text-center">
				<img src="resources/images/network.png">
				<h5>Best 4G Network</h5>
				<p>Enjoy SuperFast internet across Nigeria with 4G LTE data and SuperClear voice services.</p>
			</div>

			<div class="col-lg-4 text-center">
				<img src="resources/images/24x7-support.png">
				<h5>24x7 Help & Support</h5>
				<p>Our virtual chat assistant & Customer care service is available to help you 24/7</p>
			</div>

			<div class="col-lg-4 text-center">
				<img src="resources/images/best-value.png">
				<h5>BestValue</h5>
				<p>Get the BestValue for your money with our Data and Voice services.</p>
			</div>
		</div>
	</div>
</div>


<div class="container py-5">
	<div class="row">
		<div class="col-lg-8 my-auto">
			<p>Founded in 2007, with its head office in England, Smile Telecoms Holdings Limited (Smile Group) owns and operates 4G LTE mobile broadband networks in the 800MHz band in Nigeria, Tanzania and Uganda, offering nationwide SuperFast mobile broadband services to its customers.</p>

			<p>Smile has national broadband coverage comparable to the largest 3G network in each of its current countries of operation and after the introduction of SmileVoice, voice over LTE in early 2016, customers have been enjoying SuperClear, reliable voice calls, video calls and SMSs as well.</p>

			<p>Smile's objective is to transform the economies in which it operates by providing universal access to high-quality, reliable, easy-to-use and affordable communicaton services.</p>

			<p>Smile will launch its SuperFast mobile broadband and SuperClear voice services to customers in the Democratic Republic of the Congo (DRC) in 2020.</p>

			<a href="#"  class="btn btn-warning col-lg-3 custom-btn">KNOW MORE</a>
		</div>

		<div class="col-lg-4"> 
			<img src="resources/images/img1.jpg" class="img-fluid">
		</div>
	</div>
</div>

@include('layouts.footer')