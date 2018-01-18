<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest() {
        $response = $this->post('/hotel-search', ['destinationName' => 'amman']);

        $response->assertStatus(200);
    }

}
