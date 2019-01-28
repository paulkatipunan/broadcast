<?php

if (!function_exists('push')) {

    function push($data)
    {

        $client = new \GuzzleHttp\Client();

	    $response = $client->request('POST', env('WS_HOST').'/api/broadcast/client/' .env('WS_TOKEN'), ['json' => $data]);

	    if ($response) {
	    	$message = 'SUCCESS';
	    } else {
	    	$message = 'FAILED';
	    }
	    
	    return response()->json($message);

    }

}