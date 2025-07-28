<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

/**
 * Controller responsible for rendering the home page. The index method
 * returns an Inertia response which instructs the client to load the
 * Home.vue component defined in resources/js/Pages.
 */
class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Home');
    }
}