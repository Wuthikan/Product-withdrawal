<?php
namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use DurianSoftware\Models\CompanyGroup;

class Company extends Model
{
    protected $table = "dim_companies";
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['name', 'company_group_id'];

    public function companygroup()
    {
        return $this->belongsTo(\DurianSoftware\Models\CompanyGroup::class, 'id', 'company_group_id');
    }
}
