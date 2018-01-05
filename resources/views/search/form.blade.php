<form action='/hotel-search' method='POST'>
    @include('layouts.errors') 
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="example-search-input" class=" col-form-label col-2 ">Going to</label>
        <div class="col-6">
            <input class="form-control" value="{{$parameters['destinationName']}}" type="search" placeholder="Destination Name or City Name"  id="destinationName" name="destinationName">
        </div>
        <label for="example-search-input" class=" col-form-label col-2">Length Of Stay</label>
        <div class="col-2">
            <input class="form-control" type="number" value="{{$parameters['lengthOfStay']}}" name="lengthOfStay"  id="lengthOfStay">
        </div>
    </div>

    <div class="form-group row">
        <label for="example-date-input" class="col-2 col-form-label">Min Trip Start Date</label>
        <div class="col-4">
            <input class="form-control"  type="date" data-date-format="yyyy-mm-dd" id="example-date-input" name="minTripStartDate" value="{{$parameters['minTripStartDate']}}" >
        </div>
        <label for="example-date-input" class="col-2 col-form-label">Max Trip Start Date</label>
        <div class="col-4">
            <input class="form-control" type="date" data-date-format="yyyy-mm-dd"  id="example-date-input" name="maxTripStartDate" value="{{$parameters['maxTripStartDate']}}">
        </div>
    </div>


    <div class="form-group row">
        <label for="example-number-input" class="col-2 col-form-label">Star Rating</label>
        <div class="col-5">
            <input value="{{$parameters['minStarRating']}}" name="minStarRating" class="form-control" placeholder="Min Star Rating" type="number"  id="example-number-input" step="0.1" min="1" max="5">
        </div>
        <div class="col-5">
            <input value="{{$parameters['maxStarRating']}}" name="maxStarRating" class="form-control" type="number" placeholder="Max Star Rating" id="example-number-input" step="0.1" min="1" max="5">
        </div>
    </div>

    <div class="form-group row">
        <label for="example-number-input" class="col-2 col-form-label">Total Rate</label>
        <div class="col-5">
            <input value="{{$parameters['minTotalRate']}}" name="minTotalRate" class="form-control" placeholder="Min Total Rate" type="text"  id="example-number-input">
        </div>
        <div class="col-5">
            <input value="{{$parameters['maxTotalRate']}}"  name="maxTotalRate" class="form-control" type="text" placeholder="Max Total Rate" id="example-number-input" >
        </div>
    </div>

    <div class="form-group row">
        <label for="example-number-input" class="col-2 col-form-label">Guest Rating</label>
        <div class="col-5">
            <input value="{{$parameters['minGuestRating']}}"  name="minGuestRating" class="form-control" placeholder="Min Guest Rating" type="text"  id="example-number-input">
        </div>
        <div class="col-5">
            <input value="{{$parameters['maxGuestRating']}}"  name="maxGuestRating" class="form-control" type="text" placeholder="Max Guest Rating" id="example-number-input" >
        </div>
    </div>
    <button type="search" class="btn btn-primary col-5">Search</button>
</form>