import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

// Import the global stylesheet so that Tailwind classes are available
import '../css/app.css';

/*
 * This file bootstraps the Inertia.js application. It resolves Vue
 * components dynamically based on the page name provided by the
 * server-side route and mounts the resulting app on the page. See
 * resources/js/Pages/Home.vue for the main page definition.
 */
createInertiaApp({
    title: (title) => `${title} - Jerry Wilson Sitompul`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
    progress: {
        color: '#22c55e',
    },
});