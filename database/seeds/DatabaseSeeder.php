<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Warehouse\WarehouseTableSeeder::class);
        $this->call(\DurianSoftware\Seeder\BackOffice\Category\CategoryTableSeeder::class);
        $this->call(Publisher\PublishersTableSeeder::class);
        $this->call(NewsEvent\NewsEventTableSeeder::class);
        $this->call(Platform\PlatformSeeder::class);
        $this->call(General\GeneralTableSeeder::class);
        $this->call(CustomerTier\CustomerTierTableSeeder::class);
        $this->call(Tag\TagSeeder::class);
        $this->call(Warehouse\WarehouseTableSeeder::class);
        $this->call(Country\CountryTableSeeder::class);
        $this->call(CompanyGroup\CompanyGroupTableSeeder::class);
        $this->call(CompanyGroup\CustomerTierTableSeeder::class);
        $this->call(CompanyGroup\CompanyTableSeeder::class);
        $this->call(Publisher\PublishersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->product();
    }

    public function userSeed()
    {
        $this->call(User\DaysTableSeeder::class);
        $this->call(User\MonthsTableSeeder::class);
        $this->call(User\YearsTableSeeder::class);
        $this->call(User\UsersTableSeeder::class);
    }

    public function product()
    {
        $this->call(Product\ProductSeeder::class);
    }
}
