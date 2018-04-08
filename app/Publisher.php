<?php

namespace DurianSoftware;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
{
    use SoftDeletes;

    protected $table = 'dim_publishers';
    protected $dates = ['deleted_at'];

    protected $fillable = ['client_id', 'name', 'description'];
}
