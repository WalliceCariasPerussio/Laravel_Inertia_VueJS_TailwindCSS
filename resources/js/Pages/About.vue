<template>
    <Head :title="__('About')" />
    <!-- This example requires Tailwind CSS v2.0+ -->
    <InitialLayout>
        <div>
            <h2>{{__(`This is the :attribute page.`,[`About`])}}</h2>
        </div>
    </InitialLayout>


</template>


<script>
    import InitialLayout from './Layouts/InitialLayout'
    import { Link,Head } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Head,
            Link,
            InitialLayout
        }
    }
</script>
