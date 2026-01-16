<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * PageController
 *
 * Handles public-facing page routes that are accessible to guests.
 */
class PageController extends Controller
{
    /**
     * Display the welcome/home page.
     */
    public function welcome(): View
    {
        return view('pages.welcome');
    }

    /**
     * Display the services page.
     */
    public function services(): View
    {
        return view('pages.services');
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the contact page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Display the terms of service page.
     */
    public function terms(): View
    {
        return view('pages.terms');
    }

    /**
     * Display the privacy policy page.
     */
    public function privacy(): View
    {
        return view('pages.privacy');
    }
}
