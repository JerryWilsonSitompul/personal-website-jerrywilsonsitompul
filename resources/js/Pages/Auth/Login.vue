<template>
  <div
    class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8"
  >
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Sign in to admin panel
        </h2>
      </div>
      <form @submit.prevent="submit" class="mt-8 space-y-6">
        <input type="hidden" name="_token" :value="$page.props.csrf_token" />
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="email" class="sr-only">Email address</label>
            <input
              id="email"
              v-model="form.email"
              name="email"
              type="email"
              autocomplete="email"
              required
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
              placeholder="Email address"
            />
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input
              id="password"
              v-model="form.password"
              name="password"
              type="password"
              autocomplete="current-password"
              required
              class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
              placeholder="Password"
            />
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input
              id="remember-me"
              v-model="form.remember"
              name="remember-me"
              type="checkbox"
              class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
            />
            <label for="remember-me" class="ml-2 block text-sm text-gray-900">
              Remember me
            </label>
          </div>
        </div>

        <div>
          <button
            type="submit"
            :disabled="form.processing"
            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-50"
          >
            <span v-if="form.processing">Signing in...</span>
            <span v-else>Sign in</span>
          </button>
        </div>

        <div v-if="form.errors.email" class="text-red-600 text-sm mt-2">
          {{ form.errors.email }}
        </div>

        <!-- Debug information -->
        <div
          v-if="form.isDirty && !form.processing"
          class="text-xs text-gray-500 mt-2"
        >
          Debug: Form is ready to submit
        </div>

        <div v-if="form.processing" class="text-xs text-blue-500 mt-2">
          Debug: Processing login request...
        </div>

        <div v-if="form.wasSuccessful" class="text-xs text-green-500 mt-2">
          Debug: Login was successful, redirecting...
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { useForm, usePage, router } from "@inertiajs/vue3";
import { onMounted, computed } from 'vue';

const page = usePage();
const authUser = computed(() => page.props.auth.user);

onMounted(() => {
  if (authUser.value) {
    console.log('User is already logged in, redirecting to admin...');
    router.visit('/admin');
  }
});

const form = useForm({
  email: "",
  password: "",
  remember: false,
  _token: page.props.csrf_token,
});

const submit = () => {
  console.log("Submitting login form with:", {
    email: form.email,
    password: form.password ? "[HIDDEN]" : "empty",
    remember: form.remember,
    csrf_token: page.props.csrf_token ? "present" : "missing",
  });

  form.post("/login", {
    onSuccess: (page) => {
      console.log("Login successful!", page);
      // Force navigation to admin dashboard
      router.visit('/admin', { 
        method: 'get',
        replace: true 
      });
    },
    onError: (errors) => {
      console.log("Login errors:", errors);
    },
    onFinish: () => {
      console.log("Login request finished");
    },
  });
};
</script>
