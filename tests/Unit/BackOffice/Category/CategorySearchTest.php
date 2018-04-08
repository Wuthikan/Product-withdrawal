<?php

namespace Tests\Feature;

use DurianSoftware\Category;
use DurianSoftware\Repositories\CategoryRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategorySearchTest extends TestCase
{
    public function testSearchCategoryComplete()
    {
        $data = [
            'name' => 'Test Search #111',
            'description' => 'Test Search Description',
            'status' => 1,
            'platform_id' => 10
        ];

        $repository = new CategoryRepository();

        $repository->create($data);

        $categories = $repository->search([['name', 'LIKE', '%#111%']]);

        $this->assertNotCount(0, $categories);

        $categories = $repository->search([['description', 'LIKE', '%Search Description%']]);

        $this->assertNotCount(0, $categories);
    }
}
