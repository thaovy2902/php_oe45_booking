<?php

namespace Tests\Unit\Models;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Review;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
        $this->review = Review::factory()->create();
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_imageable_with_review()
    {
        $image = Image::factory()->create([
            "imageable_id" => $this->review->id,
            "imageable_type" => "reviews",
        ]);

        $this->assertInstanceOf(Review::class, $image->imageable);
    }
    public function test_review_morph_many_image()
    {
        $this->assertInstanceOf(MorphMany::class, $this->review->images());
        $this->assertEquals('imageable_type', $this->review->images()->getMorphType());
        $this->assertEquals('imageable_id', $this->review->images()->getForeignKeyName());
    }
    public function test_review_belongs_to_category_review()
    {
        $this->assertInstanceOf(BelongsTo::class, $this->review->category_review());
        $this->assertEquals('category_review_id', $this->review->category_review()->getForeignKeyName());
    }
    public function test_review_belongs_to_user()
    {
        $this->assertInstanceOf(BelongsTo::class, $this->review->user());
        $this->assertEquals('account_id', $this->review->user()->getForeignKeyName());
    }
    public function test_review_has_many_comments()
    {
        $comment = Comment::factory()->create([
            'review_id' => $this->review->id
        ]);
        $this->assertInstanceOf(HasMany::class, $this->review->comments());
        $this->assertEquals('review_id', $this->review->comments()->getForeignKeyName());
    }
}
