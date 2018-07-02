<?php

namespace App\Observers;

use App\Entities\Model;
use Ramsey\Uuid\Uuid;

class ModelObserver
{
    /**
     * @param Model $model
     */
    public function creating(Model $model)
    {
        $model->{$model->getKeyName()} = str_replace('-', '', Uuid::uuid1()->toString());
    }
}