<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $table = "dim_tags";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;

    protected $fillable = ['name', 'client_id'];
}
