<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_home()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }
    
    public function test_shop()
    {
        $response = $this->get('/shop');

        $response->assertStatus(302);
    }

    public function test_shop_tag()
    {
        $response = $this->get('/shop/tag');

        $response->assertStatus(302);
    }

    public function test_product()
    {
        $response = $this->get('/product');

        $response->assertStatus(302);
    }
    public function test_cart()
    {
        $response = $this->get('api/users');

        $response->assertStatus(302);
    }

}
