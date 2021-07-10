<?php

namespace Tests\Unit\Models;

use App\Models\CategoryReview;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryReviewTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
        $this->category_review = CategoryReview::factory()->create();
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_category_review_has_many_reviews()
    {
        $this->assertInstanceOf(HasMany::class, $this->category_review->reviews());
        $this->assertEquals('category_review_id', $this->category_review->reviews()->getForeignKeyName());
    }
}
