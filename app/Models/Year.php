<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Year extends Model
{
    use SoftDeletes;

    protected $table = "dim_years";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;

    protected $fillable = ['year'];
}
