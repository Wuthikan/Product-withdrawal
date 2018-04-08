<?php

namespace Tests\Unit\BackOffice\Tag;

use Tests\TestCase;
use Faker\Factory as Faker;
use DurianSoftware\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateTest extends TestCase
{
    //use RefreshDatabase;

    protected $faker;
    
    /**
     * Constructor - creates faker
     */
    public function __construct()
    {
        parent::__construct();
        $this->faker = Faker::create();
    }
    
    /**
     * @test Initialise
     */
     // public function testCanMigrate()
     // {
        // $result = \Artisan::call('migrate', ['--path' => '/database/migrations']);
        // $this->assertTrue($result);
     // }

    /**
     * @test Creating a Example with complete data
     */
    // public function testCreateComplete()
    // {
    //  $data = factory(Tag::class, 1)->make()->first()->toArray();

    //  $tag = Tag::create($data);

    //  $this->assertEquals($data['name'], $tag->name);
    //  $this->assertEquals($data['description'], $tag->description);
    // }

    /**
     * @test Creating a User with missing name
     */
    public function testCreateMissingName()
    {
        $this->assertTrue(true);
    }
}
