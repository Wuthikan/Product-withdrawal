<?php

namespace Tests\Feature;

use DurianSoftware\Repositories\CategoryRepository;
use Tests\TestCase;

class CategoryDestroyTest extends TestCase
{
    public function testDestroyCategoryComplete()
    {
        $repository = new CategoryRepository();

        $category = $repository->all()->first();

        $repository->delete($category->id);
        $result = $repository->delete($category->id);

        $this->assertTrue($result);
    }
}
