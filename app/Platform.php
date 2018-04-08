<?php

namespace DurianSoftware;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $softDelete = true;

    protected $table = 'dim_platforms';
    protected $dates = ['deleted_at'];

    public $fillable = ['client_id', 'name', 'description'];
}
