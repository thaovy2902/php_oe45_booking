<?php

namespace Tests\Unit\Models;

use App\Models\Image;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TourTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
        $this->tour = Tour::factory()->create();
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_tour_belongs_to_many_users()
    {
        // kiểm tra instance BelongsToMany
        $this->assertInstanceOf(BelongsToMany::class, $this->tour->users());
        // kiểm tra foreignKey
        $this->assertEquals('tour_id', $this->tour->users()->getForeignPivotKeyName());
        // kiểm tra related pivot key
        $this->assertEquals('account_id', $this->tour->users()->getRelatedPivotKeyName());
    }
    public function test_tour_belongs_to_category_tour()
    {
        $this->assertInstanceOf(BelongsTo::class, $this->tour->category_tour());
        $this->assertEquals('cat_tour_id', $this->tour->category_tour()->getForeignKeyName());
    }
    public function test_imageable_with_tour()
    {
        $image = Image::factory()->create([
            "imageable_id" => $this->tour->id,
            "imageable_type" => "tours",
        ]);

        $this->assertInstanceOf(Tour::class, $image->imageable);
    }
    public function test_tour_morph_many_image()
    {
        // kiểm tra instance MorphOne
        $this->assertInstanceOf(MorphMany::class, $this->tour->images());
        //kiểm tra key type
        $this->assertEquals('imageable_type', $this->tour->images()->getMorphType());
        $this->assertEquals('imageable_id', $this->tour->images()->getForeignKeyName());
    }
}
