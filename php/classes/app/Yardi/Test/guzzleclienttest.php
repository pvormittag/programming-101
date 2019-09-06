<?php

//namespace App\Test;

use \GuzzleHttp\Client;
use \GuzzleHttp\Exception\RequestException;

class GuzzleClientTest {
    protected function getGuzzleClient() {
        global $client;
        
        if ($client !== null) {
            return $client;
        }
    
        if (TESTING) {
            $queue = [
    //__DIR__ . '/mock/property-JWL-Lease_Info.http.txt',
    ];
        
    $queue = array_map(function ($path) {
        return \GuzzleHttp\Psr7\parse_response(file_get_contents($path));
    }, $queue);
    
    $mock = new \GuzzleHttp\Handler\MockHandler($queue);
    $handler = \GuzzleHttp\HandlerStack::create($mock);
    } else {
    $handler = \GuzzleHttp\HandlerStack::create();
    }
    
    global $transactions;
    $history = \GuzzleHttp\Middleware::history($transactions);
    $handler->push($history);
    
    $client = new \GuzzleHttp\Client([
    'handler' => $handler,
    'timeout'  => 30.0,
    ]);
    
    return $client;
    }
}   