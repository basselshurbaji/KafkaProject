<?php

namespace App\Http\Controllers;

use App\ProducerPackage\ProducerInterface;
use App\ProducerPackage\ProducerMessage;
use App\ProducerPackage\ProducerMessageMetaData;
use App\ProducerPackage\ProducersProvider;
use Laravel\Lumen\Routing\Controller;

class HelloWorldController extends Controller
{
    function test1(){
        date_default_timezone_set ("UTC");
        $message = new ProducerMessage();
        $meta = new ProducerMessageMetaData();
        $meta->startTime = date("Y-m-d h:i:sa");
        $meta->httpMethod = "GET";
        $meta->inputSize = "No idea how to do it yet!";
        $meta->outputSize = "No idea how to do it yet!";
        $meta->endTime = date("Y-m-d h:i:sa");
        $meta->duration = strtotime($meta->endTime) - strtotime($meta->startTime);

        $data = new HelloWorldProducedMessage();
        $data->responseData = "Hello World 1";

        $message->meta = $meta;
        $message->data = $data;

        foreach (ProducersProvider::getProducers() as $value){
            $value->produce($message);
        }
        return response()->json("Hello World 1");
    }

    function test2(){
        return response()->json("Hello World 2");
    }

    function test3(){
        return response()->json("Hello World 3");
    }
}
