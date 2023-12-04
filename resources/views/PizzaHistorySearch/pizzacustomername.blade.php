@include('layouts.main')
<style>
  body{
    background-color:#ede4dc;
}
.byline{
  text-align:center;
  font-size:18px;
}
.byline a{
  text-decoration:none;
  color: #ce0000;
}

#gradient{
    width:0;
    height:50px;
    margin:0 auto;
    border-radius:100%;
    -webkit-box-shadow: 0 50px 200px 150px rgba(255, 255, 255, 0.93);
    -moz-box-shadow: 0 50px 200px 150px rgba(255, 255, 255, 0.93);
    box-shadow: 0 50px 200px 150px rgba(255, 255, 255, 0.93);
}
.searchbox{
    background-color:#fffbf8;
    padding:13px;
    width:335px;
    margin:100px auto;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    border-radius:6px;
    -webkit-box-shadow:
        0 2px 4px 0 rgba(72, 72, 72, 0.83),
        0 10px 15px 0 rgba(126, 126, 126, 0.12),
        0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset, 
        0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
    -moz-box-shadow: 
        0 2px 4px 0 rgba(72, 72, 72, 0.83),
        0 10px 15px 0 rgba(126, 126, 126, 0.12),
        0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset, 
        0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
    box-shadow: 
        0 2px 4px 0 rgba(72, 72, 72, 0.83),
        0 10px 15px 0 rgba(126, 126, 126, 0.12),
        0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset, 
        0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
}
input[type="search"]{
    width:250px;
    height:30px;
    padding-left:15px;
    border-radius:6px;
    border:none;
    color:#939393;
    font-weight:500;
    background-color:#fffbf8;
    -webkit-box-shadow:
        0 -2px 2px 0 rgba(199, 199, 199, 0.55),
        0 1px 1px 0 #fff,
        0 2px 2px 1px #fafafa,
        0 2px 4px 0 #b2b2b2 inset,
        0 -1px 1px 0 #f2f2f2 inset,
        0 15px 15px 0 rgba(41, 41, 41, 0.09) inset;
    -moz-box-shadow: 
        0 -2px 2px 0 rgba(199, 199, 199, 0.55),
        0 1px 1px 0 #fff,
        0 2px 2px 1px #fafafa,
        0 2px 4px 0 #b2b2b2 inset,
        0 -1px 1px 0 #f2f2f2 inset,
        0 15px 15px 0 rgba(41, 41, 41, 0.09) inset;
    box-shadow:
        0 -2px 2px 0 rgba(199, 199, 199, 0.55),
        0 1px 1px 0 #fff,
        0 2px 2px 1px #fafafa,
        0 2px 4px 0 #b2b2b2 inset,
        0 -1px 1px 0 #f2f2f2 inset,
        0 15px 15px 0 rgba(41, 41, 41, 0.09) inset;
}
button[type="submit"]{
    width:35px;
    height:30px;
    background-image:url(data:image/png;base64,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);
    background-repeat: no-repeat;
    background-position: 10px 5px;
    background-color:transparent;
    -webkit-background-size:20px 20px;
    background-size:20px 20px;
    border:none;
    cursor:pointer;
}
input[type="search"]:focus{
    outline:0;
}

</style>
<!DOCTYPE html>
<html lang="en">
  <body>

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Transaction History</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <form class="searchbox" method="get" action="{{ url('/pizzacustomersearch/name') }}">
            <input type="search" name ="name" placeholder="Search" />
            <button type="submit" value="search">&nbsp;</button>
    </form>


    <td>

    @if(isset($finalsearch))
		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Transaction Histories</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            @if ($finalsearch-> isEmpty())
            <p class="mt-5">Sorry, No results found for that Customer Name <b>"{{ $searchname }}"</p>
            @else
            <p class="mt-5">There are {{ $finalsearch->count() }} result(s) for <b>"{{ $searchname }}"</p>  
          </div>
        </div>

        @foreach($finalsearch->groupByType() as $type => $modelfinalsearch)

        <div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>CUSTOMER PIZZA TRANSACTION HISTORY</span></h3>
	        			</div>

                @foreach($modelfinalsearch as $finalsearch)

	        			<div class="d-block">
	        				<a class="btn btn-default" role="button" href="{{ route('show.pizzacustomersearch',['id'=> $finalsearch->url ]) }}"><p>{{ $finalsearch->title }}</p></a>
	        			</div>

                @endforeach

        			</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>CUSTOMER CUSTOMIZE PIZZA TRANSACTION HISTORY</span></h3>
	        			</div>

                @foreach($modelfinalsearch as $finalsearch)

	        			<div class="d-block">
	        				<a class="btn btn-default" role="button" href="{{ route('show.customizecustomersearch',['id'=> $finalsearch->url ]) }}"><p>{{ $finalsearch->title }}</p></a>
	        			</div>

                @endforeach

	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>
                @endforeach    
            @endif
    @endif

    </td>
    
  </body>
</html>

@include('layouts.footer')