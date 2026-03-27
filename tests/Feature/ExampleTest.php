<?php

<<<<<<< HEAD
namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
=======
test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
>>>>>>> 5acfe9fb83c8cf5147d9e149fe0648d91637eb80
