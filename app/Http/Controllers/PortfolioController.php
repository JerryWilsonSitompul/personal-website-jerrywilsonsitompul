<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Portfolio');
    }
}
