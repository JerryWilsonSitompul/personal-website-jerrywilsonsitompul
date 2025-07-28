<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ExperienceController extends Controller
{
    /**
     * Display the experience page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Experience');
    }
}
