<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackagesStatuses extends Model
{
    protected $table = 'package_statuses';
    //
    protected $fillable = [
        'name',
    ];
}
