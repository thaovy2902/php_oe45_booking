<?php

namespace Tests\Unit\Models;

use App\Models\Image;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
    public function testContainsValidFillableProperties()
    {
        $this->assertEquals([
            'name',
            'description',
            'duration',
            'num_of_participants',
            'cat_tour_id',
            'avgRate',
            'price'
        ], $this->tour->getFillable());
    }

    public function testTourBelongsToManyUsers()
    {
        $this->assertInstanceOf(BelongsToMany::class, $this->tour->users());

        $this->assertEquals('tour_id', $this->tour->users()->getForeignPivotKeyName());

        $this->assertEquals('account_id', $this->tour->users()->getRelatedPivotKeyName());
    }

    public function testTourBelongsToCategoryTour()
    {
        $this->assertInstanceOf(BelongsTo::class, $this->tour->categoryTour());

        $this->assertEquals('cat_tour_id', $this->tour->categoryTour()->getForeignKeyName());
    }

    public function testImageableWithTour()
    {
        $image = Image::factory()->create([
            "imageable_id" => $this->tour->id,
            "imageable_type" => "tours",
        ]);

        $this->assertInstanceOf(Tour::class, $image->imageable);
    }

    public function testTourMorphManyImage()
    {

        $this->assertInstanceOf(MorphMany::class, $this->tour->images());

        $this->assertEquals('imageable_type', $this->tour->images()->getMorphType());

        $this->assertEquals('imageable_id', $this->tour->images()->getForeignKeyName());
    }

    public function testTourHasManyRatings()
    {
        $this->assertInstanceOf(HasMany::class, $this->tour->ratings());

        $this->assertEquals('tour_id', $this->tour->ratings()->getForeignKeyName());
    }
}
