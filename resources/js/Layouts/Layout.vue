<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex items-center">
            <a href="/" class="text-xl font-bold text-gray-900"
              >Jerry Wilson Sitompul</a
            >
          </div>
          <div class="flex items-center space-x-8">
            <a
              href="/"
              class="text-gray-700 hover:text-primary transition-colors"
              >Home</a
            >
            <a
              href="/experience"
              class="text-gray-700 hover:text-primary transition-colors"
              >Experience</a
            >
            <a
              href="/portfolio"
              class="text-gray-700 hover:text-primary transition-colors"
              >Portfolio</a
            >
            <div class="flex items-center space-x-2">
              <button
                class="text-gray-700 hover:text-primary transition-colors text-sm"
              >
                EN
              </button>
              <span class="text-gray-400">|</span>
              <button
                class="text-gray-400 hover:text-primary transition-colors text-sm"
              >
                ID
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <main>
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-16">
      <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <p class="text-gray-600">
            © 2025 Jerry Wilson Sitompul. Built with Laravel & Inertia.js
          </p>
          <div class="flex justify-center space-x-6 mt-4">
            <a
              href="mailto:rijalsolahudin17@gmail.com"
              class="text-gray-500 hover:text-primary"
              >Email</a
            >
            <a
              href="https://linkedin.com/in/rijal-solahudin"
              class="text-gray-500 hover:text-primary"
              target="_blank"
              >LinkedIn</a
            >
            <a
              href="https://github.com/rijalsolahudin"
              class="text-gray-500 hover:text-primary"
              target="_blank"
              >GitHub</a
            >
            <a
              href="https://x.com/r_solahudin"
              class="text-gray-500 hover:text-primary"
              target="_blank"
              >Twitter</a
            >
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: "Layout",
};
</script>
