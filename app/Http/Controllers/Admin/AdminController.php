<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use App\Post;
use App\Category;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $user = auth()->user();
            if (!$user || (!$user->is_admin && !in_array($user->role, ['admin', 'editor']))) {
                abort(403, 'Access denied');
            }
            return $next($request);
        });
    }

    public function index()
    {
        Log::debug('=== ADMIN DASHBOARD ACCESS ===');
        Log::debug('User: ' . auth()->user()->email);
        Log::debug('Request URL: ' . request()->fullUrl());
        Log::debug('Is Inertia: ' . (request()->header('X-Inertia') ? 'YES' : 'NO'));
        
        $stats = [
            'total_posts' => Post::count(),
            'published_posts' => Post::published()->count(),
            'draft_posts' => Post::where('is_published', false)->count(),
            'featured_posts' => Post::featured()->count(),
            'total_categories' => Category::count(),
            'total_views' => Post::sum('views_count'),
        ];

        $recent_posts = Post::with(['category', 'author'])
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return Inertia::render('Admin/Dashboard', [
            'stats' => $stats,
            'recent_posts' => $recent_posts,
        ]);
    }
}
