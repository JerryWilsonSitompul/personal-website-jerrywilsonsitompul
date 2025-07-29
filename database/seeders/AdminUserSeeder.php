<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
            'role' => 'admin',
        ]);

        // Create some categories
        $categories = [
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Tech insights and programming tips',
                'color' => '#3b82f6'
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Frontend and backend development',
                'color' => '#10b981'
            ],
            [
                'name' => 'Career',
                'slug' => 'career',
                'description' => 'Professional growth and experiences',
                'color' => '#f59e0b'
            ],
            [
                'name' => 'Personal',
                'slug' => 'personal',
                'description' => 'Personal thoughts and life experiences',
                'color' => '#ef4444'
            ]
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }

        // Create sample posts
        $posts = [
            [
                'title' => 'Finally Released! PrayTime Reminder VSCode Extension – My First Open Source Project',
                'slug' => 'praytime-reminder-vscode-extension',
                'excerpt' => 'Today I\'m very happy because... taaraaa! I\'ve finally released my very first open source project to the public!',
                'content' => '<p>Hello everyone! Today I\'m very happy because... taaraaa! I\'ve finally released my very first open source project to the public\'s called PrayTime Reminder — a Visual Studio Code extension I built to help developers remember their prayer times while coding.</p>

<p>This project started from a personal need. As a Muslim developer, I often get so immersed in coding that I forget about prayer times. So I thought, why not create a VS Code extension that can remind me?</p>

<h2>Features</h2>
<ul>
<li>Automatic prayer time calculation based on your location</li>
<li>Customizable reminder notifications</li>
<li>Beautiful prayer time display in the status bar</li>
<li>Multiple calculation methods supported</li>
</ul>

<p>Building this extension taught me so much about VS Code API, TypeScript, and the publishing process. It\'s amazing how VS Code\'s extension ecosystem works!</p>',
                'featured_image' => null,
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(26),
                'category_id' => 1,
                'author_id' => $admin->id,
                'tags' => ['VSCode', 'Open Source', 'Extension'],
                'read_time' => 3,
            ],
            [
                'title' => 'Release v1.0.3 Personal Website – Git Support, Structural Improvements, and More!',
                'slug' => 'personal-website-v1-0-3-release',
                'excerpt' => 'Hi, everyone! We\'re very excited to share the latest update. Today, we\'re releasing version v1.0.3, which includes...',
                'content' => '<p>Hi, everyone! We\'re very excited to share the latest update. Today, we\'re releasing version v1.0.3 of my personal website, which includes several significant improvements and new features.</p>

<h2>What\'s New in v1.0.3</h2>

<h3>🔧 Structural Improvements</h3>
<ul>
<li>Refactored component architecture for better maintainability</li>
<li>Improved responsive design across all devices</li>
<li>Enhanced SEO optimization</li>
<li>Better performance with optimized asset loading</li>
</ul>

<h3>📁 Git Support Integration</h3>
<ul>
<li>Added GitHub integration for project showcases</li>
<li>Automatic repository syncing</li>
<li>Commit history visualization</li>
<li>Branch status indicators</li>
</ul>

<h3>🎨 UI/UX Enhancements</h3>
<ul>
<li>Updated color scheme with better contrast</li>
<li>Improved navigation menu</li>
<li>Enhanced typography and spacing</li>
<li>Added dark mode toggle</li>
</ul>

<p>This release represents months of hard work and feedback incorporation. I\'m particularly excited about the Git integration feature, which allows visitors to see my latest projects and contributions in real-time.</p>',
                'featured_image' => null,
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(3),
                'category_id' => 2,
                'author_id' => $admin->id,
                'tags' => ['Personal Website', 'Release', 'Git'],
                'read_time' => 2,
            ],
            [
                'title' => 'The Danger of Getting Stuck in Your Comfort Zone',
                'slug' => 'danger-of-comfort-zone',
                'excerpt' => 'Comfortable life feels good. Everything seems safe and secure, as if nothing out there can threaten us.',
                'content' => '<p>Comfortable life feels good. Everything seems safe and secure, as if nothing out there can threaten us. We know what to expect each day. No big pressure, no tough challenges. But there\'s something we often overlook: comfort zones can be dangerous if we stay in them too long.</p>

<h2>Why Comfort Zones Feel So Good</h2>
<p>Our brain is designed to seek comfort and avoid uncertainty. When we\'re in our comfort zone, stress levels are low, and we feel in control. We do things we\'re already good at, interact with people who think like us, and follow routines that feel safe.</p>

<h2>The Hidden Dangers</h2>

<h3>1. Growth Stops</h3>
<p>Growth happens when we face challenges. If we never leave our comfort zone, we stop learning new skills, stop adapting to change, and stop growing as individuals.</p>

<h3>2. Opportunities Pass By</h3>
<p>Most good opportunities come with some level of risk or uncertainty. If we always choose the safe path, we might miss chances for career advancement, new relationships, or exciting experiences.</p>

<h3>3. Skills Become Outdated</h3>
<p>In today\'s fast-changing world, standing still means falling behind. Technology evolves, industries change, and new ways of thinking emerge. If we don\'t continuously learn and adapt, our skills might become irrelevant.</p>

<h2>How to Break Free</h2>

<h3>Start Small</h3>
<p>You don\'t need to make dramatic changes overnight. Try learning a new skill, talking to someone new, or taking a different route to work.</p>

<h3>Embrace Discomfort</h3>
<p>Recognize that feeling uncomfortable is often a sign that you\'re growing. Instead of avoiding discomfort, lean into it.</p>

<h3>Set Challenges</h3>
<p>Regularly set goals that push you slightly beyond your current abilities. This keeps you growing while building confidence.</p>

<p>Remember, your comfort zone is a beautiful place, but nothing ever grows there. The magic happens when you step outside and embrace the unknown.</p>',
                'featured_image' => null,
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(15),
                'category_id' => 4,
                'author_id' => $admin->id,
                'tags' => ['Personal Growth', 'Mindset', 'Self Improvement'],
                'read_time' => 5,
            ]
        ];

        foreach ($posts as $postData) {
            Post::create($postData);
        }
    }
}
