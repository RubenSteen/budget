import { createApp, h } from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import DefaultLayout from "@/Shared/Layouts/Default"

InertiaProgress.init({
  // The delay after which the progress bar will
  // appear during navigation, in milliseconds.
  delay: 250,

  // The color of the progress bar.
  color: '#29d',

  // Whether to include the default NProgress styles.
  includeCSS: true,

  // Whether the NProgress spinner will be shown.
  showSpinner: true,
})

createInertiaApp({
  title: title => `${title} - My App`,

  // Default Layouts (https://laracasts.com/series/build-modern-laravel-apps-using-inertia-js/episodes/13)
  resolve: name => {
    let page = require(`./Pages/${name}`).default;
    if (page.layout === undefined) {
      page.layout = DefaultLayout; //Set it in the view to null if you don't want any layout to be used
    }
    return page;
  },

  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .component('Head', Head)
      .mixin({ methods: { route: window.route } })
      .mount(el)
  },
})