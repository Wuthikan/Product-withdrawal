<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = "dim_role";
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['company_id', 'name', 'description'];
}
