<?php

namespace App\Models\Repositories;

use App\Models\Entities\User;
use App\Models\Repositories\AbstractRepository;


class UserRepository extends AbstractRepository
{
    /**
     * Make new instance of this class
     *
     * @param \App\Models\Entities\Address $model
     * @return void
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function paginate($limit = 10)
    {
        return parent::paginate($limit);
    }

}