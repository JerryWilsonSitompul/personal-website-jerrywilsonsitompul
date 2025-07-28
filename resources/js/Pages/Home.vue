<template>
  <div class="min-h-screen bg-gray-50 text-gray-800">
    <div
      class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-8"
    >
      <!-- Left sidebar with profile, experience and portfolio -->
      <aside class="lg:w-1/3 space-y-8">
        <!-- Profile card -->
        <div class="bg-white rounded-2xl shadow p-6 text-center">
          <div
            class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-primary bg-primary flex items-center justify-center text-white text-2xl font-bold"
          >
            JWS
          </div>
          <h2 class="text-2xl font-bold mb-2">Jerry Wilson Sitompul</h2>
          <div class="flex flex-wrap justify-center gap-2 mb-4">
            <span
              class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium"
            >
              Software Engineer
            </span>
            <span
              class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium"
            >
              Fullstack Developer
            </span>
          </div>
          <p class="text-sm text-gray-600 mb-4">
            I am a passionate, adaptable, and loyal Software Engineer who
            thrives on building robust, efficient, and maintainable systems. I
            believe that software is not just about writing programs, but about
            creating meaningful impact.
          </p>
          <p class="text-sm font-medium text-gray-700 mb-4">
            Pekanbaru, Indonesia
          </p>
          <div class="flex justify-center space-x-6 text-gray-500">
            <a
              href="mailto:jerrywilsonsitompul@gmail.com"
              class="hover:text-primary"
              title="Email"
              >✉️</a
            >
            <a
              href="https://linkedin.com/in/jerrywilsonsitompul95"
              class="hover:text-primary"
              title="LinkedIn"
              target="_blank"
              >🔗</a
            >
            <a
              href="https://github.com/jerrywilsonsitompul"
              class="hover:text-primary"
              title="GitHub"
              target="_blank"
              >💻</a
            >
            <a
              href="https://x.com/jerrywisonsitompul"
              class="hover:text-primary"
              title="Twitter"
              target="_blank"
              >🐦</a
            >
          </div>
        </div>

        <!-- Experience card -->
        <div class="bg-white rounded-2xl shadow p-6">
          <h3 class="text-xl font-semibold mb-2">Experience</h3>
          <p class="text-sm text-gray-600 mb-4">
            Experienced in building
            <span class="text-primary font-medium">scalable systems</span> and
            leading
            <span class="text-primary font-medium">development teams</span>
            across multiple industries.
          </p>
          <div class="flex justify-between">
            <div class="text-center">
              <div class="text-3xl font-bold text-primary">5+</div>
              <div class="text-xs text-gray-500 uppercase">Years</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-primary">3</div>
              <div class="text-xs text-gray-500 uppercase">Companies</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-primary">30+</div>
              <div class="text-xs text-gray-500 uppercase">Projects</div>
            </div>
          </div>
          <div class="mt-4">
            <a
              href="/experience"
              class="text-primary hover:text-primary-dark text-sm font-medium"
            >
              View All Experience →
            </a>
          </div>
        </div>

        <!-- Portfolio card -->
        <div class="bg-white rounded-2xl shadow p-6">
          <h3 class="text-xl font-semibold mb-2">Portfolio</h3>
          <p class="text-sm text-gray-600 mb-4">
            Designing and developing software solutions tailored to
            <span class="text-primary font-medium">specific needs</span> with an
            emphasis on
            <span class="text-primary font-medium">efficiency</span> and
            <span class="text-primary font-medium">scalability</span>.
          </p>
          <div class="flex justify-between mb-4">
            <div class="text-center">
              <div class="text-3xl font-bold text-primary">30+</div>
              <div class="text-xs text-gray-500 uppercase">Projects</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-primary">20+</div>
              <div class="text-xs text-gray-500 uppercase">Technologies</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-primary">10+</div>
              <div class="text-xs text-gray-500 uppercase">Users Served</div>
            </div>
          </div>
          <div class="flex flex-wrap gap-2 text-xs">
            <span class="px-2 py-1 bg-gray-100 rounded">Laravel</span>
            <span class="px-2 py-1 bg-gray-100 rounded">NodeJS</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Ruby on Rails</span>
            <span class="px-2 py-1 bg-gray-100 rounded">CodeIgniter</span>
            <span class="px-2 py-1 bg-gray-100 rounded">PHP</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Vue</span>
            <span class="px-2 py-1 bg-gray-100 rounded">API</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Full Stack</span>
          </div>
          <div class="mt-4">
            <a
              href="/portfolio"
              class="text-primary hover:text-primary-dark text-sm font-medium"
            >
              View All Projects →
            </a>
          </div>
        </div>
      </aside>

      <!-- Main content -->
      <main class="flex-1 space-y-8">
        <!-- Hero section -->
        <section
          class="bg-gradient-to-r from-green-50 to-green-100 rounded-2xl shadow p-8"
        >
          <h1 class="text-4xl font-extrabold leading-tight mb-4">
            Sharing Ideas &amp;
            <span class="text-primary">Building Knowledge</span>
          </h1>
          <p class="text-gray-700 text-base">
            Software Engineer &amp; Full‑Stack Developer who is passionate,
            adaptable, and loyal in creating innovative solutions and sharing
            knowledge through code. Besides programming, I also enjoy writing
            about technology insights, life experiences, and software
            engineering practices.
          </p>
        </section>

        <!-- Featured posts -->
        <section>
          <h2 class="text-2xl font-semibold mb-4">Featured Posts</h2>
          <div class="grid md:grid-cols-2 gap-6">
            <article
              class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition-shadow"
            >
              <h3 class="font-semibold text-lg mb-2">
                PrayTime Reminder VSCode Extension – My First Open Source
                Project
              </h3>
              <p class="text-gray-600 text-sm mb-3">
                A VSCode extension to remind you to pray on time. Released
                July&nbsp;2025.
              </p>
              <div class="flex flex-wrap gap-2 text-xs text-gray-500">
                <span>#VSCode Extension</span>
                <span>#Open Source</span>
                <span>#Productivity</span>
              </div>
            </article>
            <article
              class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition-shadow"
            >
              <h3 class="font-semibold text-lg mb-2">
                Release v1.0.3 Personal Website – GitLab Support &amp;
                Structural Improvements
              </h3>
              <p class="text-gray-600 text-sm mb-3">
                Highlights of the latest release of my personal website,
                including structural improvements and GitLab integration.
              </p>
              <div class="flex flex-wrap gap-2 text-xs text-gray-500">
                <span>#personal web</span>
                <span>#release</span>
                <span>#announcement</span>
              </div>
            </article>
          </div>
        </section>
      </main>
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
};
</script>

<style scoped></style>
