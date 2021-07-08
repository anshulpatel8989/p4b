@include('layouts.header_main')


<div class="slider">
	<img src="resources/images/careers-banner.jpg" class="img-fluid">
</div>

<div class="container">

  	<ol class="breadcrumb">
    	<li class="breadcrumb-item">Home</li>
    	<li class="breadcrumb-item active">Careers</li>
  	</ol>
  	<h3 class="page-title">Careers</h3>

  	<p>Smile is a diverse, equal oppprtunities organisation and is committed to developing talent in the telecommunications industry in all of the countries it operates in. In addition to considering your skills and competencies, your fit with our culture and values is important.</p>

  	<div class="col-lg-12">
  		<div class="row">
  		
  			<div class="available-opportunities w-100">
				<h4 class="color-secondaryGreen"><strong>Available Opportunities</strong></h4>
				
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 carrer-count-box">
						<div class="box1 cust-box">
							<h2 class="color-Orange">0</h2>
							<span>Engineering and IT</span>
						</div>		
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 carrer-count-box">
						<div class="boc2 cust-box">
							<h2 class="color-Orange">0</h2>
							<span>Finance and Commercial</span>
						</div>	
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 carrer-count-box">
						<div class="box3 cust-box">
							<h2 class="color-Orange">0</h2>
							<span>Marketing and Insights</span>
						</div>	
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 carrer-count-box">
						<div class="box4 cust-box">
							<h2 class="color-Orange">0</h2>
							<span>Sales and Customer Support</span>
						</div>	
					</div>
				</div>
			</div>


		</div>


		<div class="refine-job row">

			<h4 class="color-secondaryGreen col-lg-12 px-0"><strong>Refine Your Job Search</strong></h4>
			
			<div class="form-content col-lg-12 px-0">
				<form method="post" class="row">
					<div class="input-box col-lg-3 col-md-4 col-sm-12 col-12">
						<div class="form-group">
							<label>Country</label>
							<select name="department" id="department" class="form-control">
								<option value="">Select</option>
								<option value="">Country 1</option>
								<option value="">Country 2</option>
								<option value="">Country 3</option>
								<option value="">Country 4</option>
							</select>
						</div>
					</div>
					<div class="input-box col-lg-3 col-md-4 col-sm-12 col-12">
						<div class="form-group">
							<label>Department</label>
							<select name="location" id="location" class="form-control">
								<option>Select</option>
								<option value="">Department 1</option>
								<option value="">Department 2</option>
								<option value="">Department 3</option>
							</select>
						</div>
					</div>
					<div class="input-box col-lg-3 col-md-4 col-sm-12 col-12">
						<div class="form-group">
							<label>Location</label>
							<select name="location" id="location" class="form-control">
								<option>Select</option>
								<option value="">Location 1</option>
								<option value="">Location 2</option>
								<option value="">Location 3</option>
							</select>
						</div>
					</div>
					<div class="input-box col-lg-3 col-md-4 col-sm-12 col-12">
						<button type="button" name="submit" value="Search Job" id="click" class="btn btn-success btn-block" style="margin-top: 28px;">Search Job <i class=" fa fa-angle-right"></i></button>
					</div>

				</form>

			</div>
			
		</div>
		

		<div class="row pb-5 border-top pt-3">
		@foreach($carrer as $carrer_data)
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 refine-job-result">
				<div class="carrer-box row">
					<div class="col-1 px-0">
						<img src="resources/images/consumer.png" class="img-fluid">
					</div>  
					<div class="col-11 pr-0"> 
						<div class="d-flex" style="justify-content: space-between;">
							<h4>{{$carrer_data->job_title}}</h4>
							<img src="resources/images/ug-48.png" width="38" height="38">
						</div>	
						<div id="dept_nm">
							<p>{{$carrer_data->department_name}}</p>
						</div>
						<span id="experience" class="mr-20">
							<i class="far fa-clock mr-10"></i>
							<span>{{$carrer_data->experience}}</span>
						</span>
						<span id="location" class="mr-20">
							<i class="fas fa-map-marker-alt mr-10"></i>
							<span>{{$carrer_data->location_name}}</span>
						</span>
						<div id="apply_btn">
							<a href="{{route('career_details')}}">APPLY NOW <i class="fa fa-angle-right" style="color: #777;"></i></a>
						</div>
					</div>
				</div>
			</div>

			@endforeach

			<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-12 refine-job-result">
				<div class="carrer-box row">
					<div class="col-1 px-0">
						<img src="resources/images/consumer.png" class="img-fluid">
					</div>  
					<div class="col-11 pr-0"> 
						<div class="d-flex" style="justify-content: space-between;">
							<h4>BI Developer</h4>
							<img src="resources/images/ug-48.png" width="38" height="38">
						</div>	
						<div id="dept_nm">
							<p>Engineering and it</p>
						</div>
						<span id="experience" class="mr-20">
							<i class="far fa-clock mr-10"></i>
							<span>3-4 years</span>
						</span>
						<span id="location" class="mr-20">
							<i class="fas fa-map-marker-alt mr-10"></i>
							<span>Kampala</span>
						</span>
						<div id="apply_btn">
							<a href="{{route('career_details')}}">APPLY NOW <i class="fa fa-angle-right" style="color: #777;"></i></a>
						</div>
					</div>
				</div>
			</div> -->
		</div>


  	</div>


</div>  	




@include('layouts.footer')