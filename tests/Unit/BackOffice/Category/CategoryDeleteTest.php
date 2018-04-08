<?php

namespace Tests\Feature;

use DurianSoftware\Repositories\CategoryRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryDeleteTest extends TestCase
{
    public function testDeleteCategoryComplete()
    {
        $repository = new CategoryRepository();

        $category = $repository->all()->first();

        $result = $repository->delete($category->id);

        $repository->restore($category->id);

        $this->assertTrue($result);
    }
}
