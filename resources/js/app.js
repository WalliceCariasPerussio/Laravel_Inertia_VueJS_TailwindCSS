require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp} from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {

    function __(key, attribute = []) {

        var text =  props.initialPage.props.lang[key] || key;

        attribute.forEach(element => {
            text = text.replace(":attribute", __(element))
        });

        return text;
    }

    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mixin({ methods: { route,__ } })
      .mount(el)
  },
})

InertiaProgress.init()
