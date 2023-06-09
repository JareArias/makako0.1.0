import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createPinia } from 'pinia';
import { OhVueIcon, addIcons } from "oh-vue-icons";
import {  RiArrowRightSLine, FaFacebookSquare, BiTwitter, BiLinkedin, BiFilter, GiPriceTag, MdDaterangeOutlined } from "oh-vue-icons/icons"

addIcons(RiArrowRightSLine, FaFacebookSquare, BiTwitter, BiLinkedin, BiFilter, GiPriceTag, MdDaterangeOutlined);

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(createPinia)
            .component("v-icon", OhVueIcon)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
