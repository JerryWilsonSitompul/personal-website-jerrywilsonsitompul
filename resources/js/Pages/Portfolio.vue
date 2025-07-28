<template>
  <div class="min-h-screen bg-gray-50 text-gray-800">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
      <!-- Header -->
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold mb-4">Portfolio</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
          A showcase of 30+ projects I've built over the years, demonstrating expertise 
          across various technologies and domains.
        </p>
      </div>

      <!-- Portfolio Stats -->
      <div class="grid md:grid-cols-3 gap-6 mb-12">
        <div class="bg-white rounded-2xl shadow p-6 text-center">
          <div class="text-3xl font-bold text-primary mb-2">30+</div>
          <div class="text-gray-600">Projects Completed</div>
        </div>
        <div class="bg-white rounded-2xl shadow p-6 text-center">
          <div class="text-3xl font-bold text-primary mb-2">20+</div>
          <div class="text-gray-600">Technologies Used</div>
        </div>
        <div class="bg-white rounded-2xl shadow p-6 text-center">
          <div class="text-3xl font-bold text-primary mb-2">10+</div>
          <div class="text-gray-600">Users Served</div>
        </div>
      </div>

      <!-- Portfolio Categories -->
      <div class="mb-8">
        <div class="flex flex-wrap justify-center gap-4">
          <button class="px-4 py-2 bg-primary text-white rounded-full text-sm">All Projects</button>
          <button class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-full text-sm">Web Apps</button>
          <button class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-full text-sm">APIs</button>
          <button class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-full text-sm">Full Stack</button>
          <button class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-full text-sm">Backend</button>
        </div>
      </div>

      <!-- Portfolio Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <!-- Portfolio Item -->
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-shadow overflow-hidden">
          <div class="h-48 bg-gradient-to-br from-primary to-primary-dark"></div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">E-Commerce Platform</h3>
            <p class="text-gray-600 text-sm mb-4">
              Full-stack e-commerce solution with payment integration, inventory management, and admin dashboard.
            </p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Laravel</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Vue.js</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">MySQL</span>
            </div>
            <div class="flex space-x-3">
              <a href="#" class="text-primary hover:underline text-sm">View Demo</a>
              <a href="#" class="text-primary hover:underline text-sm">Source Code</a>
            </div>
          </div>
        </div>

        <!-- Portfolio Item -->
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-shadow overflow-hidden">
          <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-700"></div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Project Management Tool</h3>
            <p class="text-gray-600 text-sm mb-4">
              Collaborative project management application with real-time updates, task tracking, and team communication.
            </p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Node.js</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">React</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Socket.io</span>
            </div>
            <div class="flex space-x-3">
              <a href="#" class="text-primary hover:underline text-sm">View Demo</a>
              <a href="#" class="text-primary hover:underline text-sm">Source Code</a>
            </div>
          </div>
        </div>

        <!-- Portfolio Item -->
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-shadow overflow-hidden">
          <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700"></div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">REST API Service</h3>
            <p class="text-gray-600 text-sm mb-4">
              Scalable RESTful API with authentication, rate limiting, and comprehensive documentation.
            </p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Laravel</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">JWT</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Redis</span>
            </div>
            <div class="flex space-x-3">
              <a href="#" class="text-primary hover:underline text-sm">View Demo</a>
              <a href="#" class="text-primary hover:underline text-sm">Documentation</a>
            </div>
          </div>
        </div>

        <!-- Portfolio Item -->
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-shadow overflow-hidden">
          <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-700"></div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Learning Management System</h3>
            <p class="text-gray-600 text-sm mb-4">
              Educational platform with course management, progress tracking, and interactive content delivery.
            </p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Ruby on Rails</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Vue.js</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">PostgreSQL</span>
            </div>
            <div class="flex space-x-3">
              <a href="#" class="text-primary hover:underline text-sm">View Demo</a>
              <a href="#" class="text-primary hover:underline text-sm">Case Study</a>
            </div>
          </div>
        </div>

        <!-- Portfolio Item -->
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-shadow overflow-hidden">
          <div class="h-48 bg-gradient-to-br from-red-500 to-red-700"></div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Analytics Dashboard</h3>
            <p class="text-gray-600 text-sm mb-4">
              Real-time analytics dashboard with data visualization, custom reports, and interactive charts.
            </p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Python</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Django</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Chart.js</span>
            </div>
            <div class="flex space-x-3">
              <a href="#" class="text-primary hover:underline text-sm">View Demo</a>
              <a href="#" class="text-primary hover:underline text-sm">Source Code</a>
            </div>
          </div>
        </div>

        <!-- Portfolio Item -->
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-shadow overflow-hidden">
          <div class="h-48 bg-gradient-to-br from-teal-500 to-teal-700"></div>
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Mobile App Backend</h3>
            <p class="text-gray-600 text-sm mb-4">
              Robust backend API for mobile applications with push notifications, file uploads, and user management.
            </p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Node.js</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">Express</span>
              <span class="px-2 py-1 bg-gray-100 rounded text-xs">MongoDB</span>
            </div>
            <div class="flex space-x-3">
              <a href="#" class="text-primary hover:underline text-sm">View Demo</a>
              <a href="#" class="text-primary hover:underline text-sm">Documentation</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Technologies Used -->
      <div class="bg-white rounded-2xl shadow p-8 mb-12">
        <h2 class="text-2xl font-bold text-center mb-8">Technologies I Work With</h2>
        <div class="grid md:grid-cols-4 gap-6">
          <div>
            <h3 class="font-semibold mb-4 text-primary">Languages</h3>
            <div class="space-y-2">
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">PHP</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">JavaScript</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">Python</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">Ruby</span>
              </div>
            </div>
          </div>
          <div>
            <h3 class="font-semibold mb-4 text-primary">Frameworks</h3>
            <div class="space-y-2">
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">Laravel</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">Vue.js</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">React</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">Node.js</span>
              </div>
            </div>
          </div>
          <div>
            <h3 class="font-semibold mb-4 text-primary">Databases</h3>
            <div class="space-y-2">
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">MySQL</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">PostgreSQL</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">MongoDB</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">Redis</span>
              </div>
            </div>
          </div>
          <div>
            <h3 class="font-semibold mb-4 text-primary">Tools</h3>
            <div class="space-y-2">
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">Docker</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">Git</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">AWS</span>
                <span class="px-3 py-1 bg-gray-100 rounded-full text-sm">VS Code</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="text-center">
        <h2 class="text-2xl font-bold mb-4">Interested in Working Together?</h2>
        <p class="text-gray-600 mb-6">
          I'm always open to discussing new projects and opportunities.
        </p>
        <div class="space-x-4">
          <a href="/" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">
            ← Back to Home
          </a>
          <a href="mailto:rijalsolahudin17@gmail.com" class="inline-flex items-center px-6 py-3 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors">
            Contact Me
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Portfolio',
};
</script>
