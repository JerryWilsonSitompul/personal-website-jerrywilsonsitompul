<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Post;
use App\Category;

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
        $featuredPosts = Post::with(['category', 'author'])
                           ->published()
                           ->featured()
                           ->orderBy('published_at', 'desc')
                           ->limit(6)
                           ->get();

        $recentPosts = Post::with(['category', 'author'])
                         ->published()
                         ->orderBy('published_at', 'desc')
                         ->limit(10)
                         ->get();

        $categories = Category::withCount(['publishedPosts'])
                            ->having('published_posts_count', '>', 0)
                            ->orderBy('name')
                            ->get();

        return Inertia::render('Home', [
            'featuredPosts' => $featuredPosts,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
        ]);
    }
}