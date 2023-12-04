@include('layouts.main')
<style>
.row
{
    background-color: rgb(255, 255, 255);
} 
</style>
<body>
    <br>
    <h1 style="text-align: center;">Number of Pizzas Sold in Specific Date</h1>
    <br>
    <div class="container" >
    <form enctype="multipart/form-data" method="POST" action="{{url('pizzadate')}}">
        {{csrf_field()}}
        <div class="form-group" style="text-align: center;">
            <i class="fa fa-calendar"></i>
            <label data-error="wrong" data-success="right" for="birthdate" style="display: inline-block; width: 150px; ">First Date:
            <input type="date" id="birthdate" class="form-control validate" name="firstdate">
            </label>
            
            <i class="fa fa-calendar"></i>
            <label data-error="wrong" data-success="right" for="birthdate" style="display: inline-block;width: 150px; ">Second Date:
            <input type="date" id="birthdate" class="form-control validate" name="seconddate">
            </label>
        </div>
        <div class="form-group" style="text-align: center;">
            <input type="submit" value="Submit" class="btn btn-primary py-2 px-4">
        </div>
    </form>
    </div>
    
    <div>
    @if(empty($orderdateChart))
        <div id="app2"></div>
    @else
        <div class="row">
            {!! $orderdateChart->container() !!}
        </div>
             {!! $orderdateChart->script() !!}
     @endif 
    </div>  
</body>