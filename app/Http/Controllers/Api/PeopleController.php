<?php

namespace App\Http\Controllers\Api;

use App\JsonApi\People;
use App\Person;
use CloudCreativity\LaravelJsonApi\Http\Controllers\EloquentController;

class PeopleController extends EloquentController
{

    /**
     * PeopleController constructor.
     *
     * @param People\Hydrator $hydrator
     */
    public function __construct(People\Hydrator $hydrator)
    {
        parent::__construct(new Person(), $hydrator);
    }

}
