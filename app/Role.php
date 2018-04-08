<?php

namespace DurianSoftware;

// use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public $timestamps = false;
    protected $fillable = ['name','display_name','description'];
}
