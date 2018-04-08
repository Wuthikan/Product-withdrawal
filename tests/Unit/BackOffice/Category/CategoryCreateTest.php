<?php

namespace Tests\Feature;

use DurianSoftware\Category;
use DurianSoftware\Repositories\CategoryRepository;
use Tests\TestCase;

class CategoryCreateTest extends TestCase
{
    public function testCreateCategoryComplete()
    {
        $data = factory(Category::class, 1)->make()->first()->toArray();
        $repository = new CategoryRepository();

        $category = $repository->create($data);

        $this->assertEquals($data['name'], $category->name);
        $this->assertEquals($data['description'], $category->description);
    }
}
