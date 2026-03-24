<?php

namespace App\Repository;

use App\Model\Horses;
use Psr\Log\LoggerInterface;

class HorsesRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findALL(): array
    {
        $this->logger->info('Collection retrived');

        return $horses = [
            new Horses(1, 'Iris', 'Race', 'Ready'),
            new Horses(2, 'Bob', 'Farming', 'Ready'),
            new Horses(3, 'Grace', 'Race', 'Ready'),
        ];
    }
}
