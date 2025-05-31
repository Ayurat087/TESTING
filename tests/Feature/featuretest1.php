<?php

namespace Tests\Feature;

use Tests\TestCase;

class CalculatorFeatureTest extends TestCase
{
    /** @test */
public function it_can_divide_numbers_from_route()
{
    $response = $this->get('/calculator/divide/20/5');
    $response->assertStatus(200);
    $response->assertJson(['result' => 4]);
}

/** @test */
public function it_can_get_modulus_from_route()
{
    $response = $this->get('/calculator/modulus/10/3');
    $response->assertStatus(200);
    $response->assertJson(['result' => 1]);
}

/** @test */
public function it_can_power_numbers_from_route()
{
    $response = $this->get('/calculator/power/2/3');
    $response->assertStatus(200);
    $response->assertJson(['result' => 8]);
}

/** @test */
public function it_can_get_square_root_from_route()
{
    $response = $this->get('/calculator/sqrt/25');
    $response->assertStatus(200);
    $response->assertJson(['result' => 5]);
}

}