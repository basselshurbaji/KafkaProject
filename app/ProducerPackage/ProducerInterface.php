<?php


namespace App\ProducerPackage;


interface ProducerInterface
{
    public function produce($message);
}
