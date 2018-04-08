<?php
namespace CompanyGroup;

use Illuminate\Database\Seeder;
use \DurianSoftware\Models\CompanyGroup;

class CompanyGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyGroup::truncate();
        factory(CompanyGroup::class, 100)->create();
    }
}
