<?php
namespace CompanyGroup;

use Illuminate\Database\Seeder;
use \DurianSoftware\Models\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::truncate();
        factory(Company::class, 200)->create();
    }
}
