<?php


namespace App\ProducerPackage;


use App\ProducerPackage\Implementations\KafkaProducer;
use App\ProducerPackage\Implementations\LogProducer;

class ProducersProvider
{
    public static function getProducers() {
        return array(new LogProducer(), new KafkaProducer());
    }
}
