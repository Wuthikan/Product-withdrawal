<?php

namespace Tests\Feature;

use DurianSoftware\Repositories\CategoryRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryRestoreTest extends TestCase
{
    public function testRestoreCategoryComplete()
    {
        $repository = new CategoryRepository();

        $category = $repository->all()->first();

        $repository->delete($category->id);

        $result = $repository->restore($category->id);
        
        $this->assertTrue($result);
    }
}
