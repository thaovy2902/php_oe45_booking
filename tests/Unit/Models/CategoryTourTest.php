<?php

namespace Tests\Unit\Models;

use App\Models\CategoryTour;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTourTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
        $this->category_tour = CategoryTour::factory()->create();
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_category_tour_has_many_tours()
    {
        $this->assertInstanceOf(HasMany::class, $this->category_tour->tours());
        $this->assertEquals('cat_tour_id', $this->category_tour->tours()->getForeignKeyName());
    }
}
