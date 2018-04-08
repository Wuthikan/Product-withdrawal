<?php

namespace Tests\Feature;

use DurianSoftware\Repositories\CategoryRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryReadTest extends TestCase
{
    public function testReadCategoryComplete()
    {
        $repository = new CategoryRepository();

        $category = $repository->all()->first();
        $showCategory = $repository->findById($category->id);

        $this->assertEquals($category->name, $showCategory->name);
        $this->assertEquals($category->description, $showCategory->description);
        $this->assertEquals($category->status, $showCategory->status);
        $this->assertEquals($category->platform_id, $showCategory->platform_id);
    }
}
