<?php

namespace App\Interfaces\BusinessLogics;

use App\Requests\Auths\CreateRequest;

interface CreatePreRepositoryInterface
{
    public function exec(CreateRequest $request);
}
