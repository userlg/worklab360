<?php

namespace Tests\Feature\app\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_welcome_page_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_services_page_loads_successfully(): void
    {
        $response = $this->get('services');

        $response->assertStatus(200);
    }

    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get('contact');

        $response->assertStatus(200);
    }

    public function test_about_page_loads_successfully(): void
    {
        $response = $this->get('about');

        $response->assertStatus(200);
    }
}
