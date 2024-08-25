<?php

namespace Albertoroldanq\WeightConversions\Tests;

use Albertoroldanq\WeightConversions\WeightConversions;

class WeightConversionsTest extends TestCase
{
    /** @test */
    public function it_converts_from_kilograms_to_pounds()
    {
        // Arrange
        $kilograms = 54;

        // Act
        $pounds = WeightConversions::kilogramstoPounds($kilograms);

        // Assert
        $this->assertEquals(119.0484, $pounds);
    }

    /** @test */
    public function it_converts_from_pounds_to_kilograms()
    {
        // Arrange
        $pounds = 13.765;

        // Act
        $kilograms = WeightConversions::kilogramstoPounds($pounds);

        // Assert
        $this->assertEquals(30.346319, $kilograms);
    }

    /** @test */
    public function it_converts_from_kilograms_to_stones()
    {
        // Arrange
        $kilograms = 27;

        // Act
        $stones = WeightConversions::kilogramsToStones($kilograms);

        // Assert
        $this->assertEquals(4.25169, $stones);
    }

    /** @test */
    public function it_converts_from_stones_to_pounds()
    {
        // Arrange
        $stones = 27;

        // Act
        $pounds = WeightConversions::stonesToPounds($stones);

        // Assert
        $this->assertEquals(378, $pounds);
    }

    /** @test */
    public function it_converts_from_pounds_to_stones()
    {
        // Arrange
        $pounds = 10.34;

        // Act
        $stones = WeightConversions::poundsToStones($pounds);

        // Assert
        $this->assertEquals(0.7385714285714285, $stones);
    }

    /** @test */
    public function it_converts_from_grams_to_ounces()
    {
        // Arrange
        $grams = 10.34;

        // Act
        $ounces = WeightConversions::gramsToOunces($grams);

        // Assert
        $this->assertEquals(0.36473306407520417, $ounces);
    }

    /** @test */
    public function it_converts_from_ounces_to_grams()
    {
        // Arrange
        $ounces = 10.34;

        // Act
        $grams = WeightConversions::ouncesToGrams($ounces);

        // Assert
        $this->assertEquals(293.13383, $grams);
    }
}
