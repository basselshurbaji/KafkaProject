<?php


namespace App\ProducerPackage\Implementations;


use App\ProducerPackage\ProducerInterface;
use \RdKafka;

class KafkaProducer implements ProducerInterface
{

    public function produce($message)
    {
        $conf = new RdKafka\Conf();
        $rk = new RdKafka\Producer($conf);
        $rk->addBrokers("localhost:9092");
        $topic = $rk->newTopic("test");
        $topic->produce(RD_KAFKA_PARTITION_UA, 0, json_encode($message, JSON_PRETTY_PRINT));
        $rk->flush(10000);

    }
}
