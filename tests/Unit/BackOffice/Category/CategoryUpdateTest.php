<?php

namespace Tests\Feature;

use DurianSoftware\Category;
use DurianSoftware\Repositories\CategoryRepository;
use Tests\TestCase;

class CategoryUpdateTest extends TestCase
{
    public function testUpdateCategoryComplete()
    {
        $repository = new CategoryRepository();

        $data = factory(Category::class, 1)->make()->first()->toArray();

        $category = $repository->all()->first();

        $category = $repository->update($category->id, $data);

        $this->assertTrue($category);
    }
}
