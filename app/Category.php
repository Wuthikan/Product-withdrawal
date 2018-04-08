<?php

namespace DurianSoftware;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $softDelete = true;

    protected $table = 'dim_categories';

    public $fillable = ['client_id', 'name', 'description'];
}
