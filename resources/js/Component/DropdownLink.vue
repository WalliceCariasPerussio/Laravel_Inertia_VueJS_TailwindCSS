<template>
    <div>
        <button type="submit" class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 text-left hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" v-if="as == 'button'">
            <slot></slot>
        </button>

        <a :href="href" class="block px-4 py-2 text-sm leading-5 color-text focus:outline-none  transition" v-else-if="as =='a'">
            <slot></slot>
        </a>

        <Link :href="href" class="block px-4 py-2 text-sm leading-5 color-text focus:outline-none  transition" v-else>
            <slot></slot>
        </Link>
    </div>
</template>

<style>
    .color-text {
        @apply text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700 focus:bg-gray-100;
        @apply dark:text-white dark:bg-gray-700 ;
    }
</style>

<script>
    import { defineComponent } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
        props: ['href', 'as']
    })
</script>
