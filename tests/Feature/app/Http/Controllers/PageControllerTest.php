<?php

namespace Tests\Feature\app\Http\Controllers;

use Tests\TestCase;

class PageControllerTest extends TestCase
{
    public function test_welcome_page_loads_successfully(): void
    {

        $this->withoutMiddleware();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_services_page_loads_successfully(): void
    {
        $this->withoutMiddleware();

        $response = $this->get('services');

        $response->assertStatus(200);
    }

    public function test_contact_page_loads_successfully(): void
    {
        $this->withoutMiddleware();

        $response = $this->get('contact');

        $response->assertStatus(200);
    }

    public function test_about_page_loads_successfully(): void
    {
        $this->withoutMiddleware();

        $response = $this->get('about');

        $response->assertStatus(200);
    }

    public function test_terms_page_loads_successfully(): void
    {
        $this->withoutMiddleware();

        $response = $this->get('terms');

        $response->assertStatus(200);
    }

    public function test_privacy_page_loads_successfully(): void
    {
        $this->withoutMiddleware();

        $response = $this->get('privacy');
        $response->assertStatus(200);
    }
}
