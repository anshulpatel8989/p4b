@include('layouts.header_main')

<div class="container">

  	<ol class="breadcrumb">
    	<li class="breadcrumb-item">Home</li>
    	<!-- <li class="breadcrumb-item">About Smile</li> -->
    	<li class="breadcrumb-item active">News and Events</li>
  	</ol>
  	<h3 class="page-title">News and Events</h3>


  	<div class="row news-events pb-5 pt-4">
	  @foreach($news as $news_data)
  		<div class="col-lg-4 ">
  			<div class="press-box">
				<img  alt="<?php echo $news_data->image;?>" src="storage/app/public/images/news/<?php echo $news_data->image;?>" class="img-fluid">
				<div class="content">
					<div class="news-title">
						<h5>{{$news_data->heading}}</h5>
						<p>{{$news_data->published_on}}</p>
					</div>

					<div class="text-center">
						<a href="news-event-detail.php" class="btn btn-warning custom-btn w-50">READ MORE</a>	
					</div>
				</div>
			</div>
  		</div>
		  @endforeach
  		
  	</div>
</div> 
@include('layouts.footer')