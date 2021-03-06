<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
    use SoftDeletes;

    protected $table = "dim_platforms";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;

    protected $fillable = ['name', 'description'];
}
