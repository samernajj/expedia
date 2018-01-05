<?php

namespace App\Http\Controllers;

use Ixudra\Curl\Facades\Curl;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller {

    /**
     * Display search form
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $parameters = array(
            'destinationName' => NULL,
            'minTripStartDate' => NULL,
            'maxTripStartDate' => NULL,
            'lengthOfStay' => NULL,
            'minStarRating' => NULL,
            'maxStarRating' => NULL,
            'minTotalRate' => NULL,
            'maxTotalRate' => NULL,
            'minGuestRating' => NULL,
            'maxGuestRating' => NULL,
        );

        return view('search.index', compact('parameters'));
    }

    /**
     * Get remote data from json link
     *
     * @param  App\Http\Requests\SearchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function getRemoteData(SearchRequest $request) {
        //get parameters
        $destinationName = $request->destinationName;
        $minTripStartDate = $request->minTripStartDate;
        $maxTripStartDate = $request->maxTripStartDate;
        $lengthOfStay = $request->lengthOfStay;
        $minStarRating = $request->minStarRating;
        $maxStarRating = $request->maxStarRating;
        $minTotalRate = $request->minTotalRate;
        $maxTotalRate = $request->maxTotalRate;
        $minGuestRating = $request->minGuestRating;
        $maxGuestRating = $request->maxGuestRating;

        $parameters = array(
            'scenario' => 'deal-finder',
            'page' => 'foo',
            'uid' => 'foo',
            'productType' => 'Hotel',
            'destinationName' => $destinationName,
            'destinationCity' => $destinationName,
            'minTripStartDate' => $minTripStartDate,
            'maxTripStartDate' => $maxTripStartDate,
            'lengthOfStay' => $lengthOfStay,
            'minStarRating' => $minStarRating,
            'maxStarRating' => $maxStarRating,
            'minTotalRate' => $minTotalRate,
            'maxTotalRate' => $maxTotalRate,
            'minGuestRating' => $minGuestRating,
            'maxGuestRating' => $maxGuestRating,
        );

        //send curl request to json api        
        $response = Curl::to('https://offersvc.expedia.com/offers/v2/getOffers')
                ->withData($parameters)
                ->asJson(true)
                ->withContentType('application/json')
                //->enableDebug(storage_path('logs') . '/logFile.txt')
                ->get();

        $results = NULL;
        if((count($response['offers']) > 0)){
        //filter the json search result
            $results = $response['offers']['Hotel'];
        }
        return view('search.index', compact('results', 'parameters'));
    }

}
