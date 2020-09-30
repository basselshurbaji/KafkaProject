<?php


namespace App\ProducerPackage\Implementations;


class LogProducer implements \App\ProducerPackage\ProducerInterface
{

    public function produce($message)
    {
        error_log(json_encode($message, JSON_PRETTY_PRINT));
    }
}
