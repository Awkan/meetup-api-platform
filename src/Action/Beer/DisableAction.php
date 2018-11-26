<?php

declare(strict_types=1);

namespace App\Action\Beer;

use App\Entity\Beer;

class DisableAction
{
    public function __invoke(Beer $data): Beer
    {
        $data->setStatus(Beer::OFFLINE_STATUS);

        return $data;
    }
}
