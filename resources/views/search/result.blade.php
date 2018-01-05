@if(isset($results))
<hgroup class="mb20">
    <h1>Search Results</h1>
    <h2 class="lead"><strong class="text-danger">{{count($results)}}</strong> results were found </h2>								
</hgroup>
<section class="col-xs-12 col-sm-6 col-md-12">
    @foreach($results as $result)
    <article class="search-result row">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="#" title="{{$result['hotelInfo']['hotelName']}}" class="thumbnail"><img src="{{$result['hotelInfo']['hotelImageUrl']}}" alt="{{$result['hotelInfo']['hotelName']}}" /></a>

            <ul class="meta-search">
                <li><span>country: </span><strong class="text-danger">{{$result['destination']['country']}}</strong></li>
                <li><span>city:</span> <strong class="text-danger">{{$result['destination']['city']}}</strong></li>
                <li><strong class="text-danger">{{$result['hotelInfo']['hotelStarRating']}} </strong>out of 5 </li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
            <h3 ><a href="#" title="">{{$result['hotelInfo']['hotelName']}}</a></h3>
            <p>{{$result['destination']['longName']}} {{$result['hotelInfo']['hotelStreetAddress']}}</p>						
            
        </div>
        <span class="clearfix borda"></span>
    </article>		
    <hr>
    @endforeach
</section>
@else

    <h3 class="text-danger">No Results !</h3>

@endif