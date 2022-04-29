<template>
    <Head :title="__('Home')" />
    <InitialLayout>
        <div>
            <h2>{{message}}</h2>
        </div>
    </InitialLayout>

</template>

<script>
    import { Link, Head } from '@inertiajs/inertia-vue3'
    import InitialLayout from './Layouts/InitialLayout'

    export default {
          components: {
            Head,
            Link,
            InitialLayout
        },
        props: {
            message: String
        },
    }
</script>
