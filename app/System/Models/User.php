<?php

namespace App\System\Models;

// use Illuminate\Database\Eloquent\Model;

use App\Shared\Models\User as Shared;
use Hyn\Tenancy\Traits\UsesSystemConnection;

class User extends Model
{
    //
        use UsesSystemConnection;
}
