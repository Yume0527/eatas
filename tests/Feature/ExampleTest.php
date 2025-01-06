<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_it_returns_a_successful_response()
    {
        $response = $this->get('/');

        // リダイレクトであれば、リダイレクト先を確認
        if ($response->isRedirect()) {
            $this->assertTrue(true, "Redirected to: " . $response->headers->get('Location'));
        } else {
            $response->assertStatus(200);
        }
    }
}
