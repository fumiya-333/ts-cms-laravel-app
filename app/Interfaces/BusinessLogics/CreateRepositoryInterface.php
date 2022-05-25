<?php

namespace App\Interfaces\BusinessLogics;

use Illuminate\Http\Request;
use App\Models\MUser;

interface CreateRepositoryInterface
{
    public function exec(Request $request, &$msg);
    public function isEmailAuth(MUser $request, &$msg);
}
