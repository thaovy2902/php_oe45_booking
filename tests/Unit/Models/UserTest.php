<?php

namespace Tests\Unit\Models;

use App\Models\Image;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_contains_valid_fillable_properties()
    {
        $this->assertEquals(['name', 'email', 'password'], $this->user->getFillable());
    }
    public function test_imageable_with_user()
    {
        $image = Image::factory()->create([
            "imageable_id" => $this->user->id,
            "imageable_type" => "users",
        ]);

        $this->assertInstanceOf(User::class, $image->imageable);
    }
    public function test_user_morph_many_image()
    {
        $this->assertInstanceOf(MorphMany::class, $this->user->images());
        $this->assertEquals('imageable_type', $this->user->images()->getMorphType());
        $this->assertEquals('imageable_id', $this->user->images()->getForeignKeyName());
    }
    public function test_user_belongs_to_many_tours()
    {
        $this->assertInstanceOf(BelongsToMany::class, $this->user->tours());
        $this->assertEquals('account_id', $this->user->tours()->getForeignPivotKeyName());
        $this->assertEquals('tour_id', $this->user->tours()->getRelatedPivotKeyName());
    }
    public function test_user_has_many_reviews()
    {
        $this->assertInstanceOf(HasMany::class, $this->user->reviews());
        $this->assertEquals('account_id', $this->user->reviews()->getForeignKeyName());
    }
    public function test_user_has_many_comments()
    {
        $this->assertInstanceOf(HasMany::class, $this->user->comments());
        $this->assertEquals('account_id', $this->user->comments()->getForeignKeyName());
    }
}
