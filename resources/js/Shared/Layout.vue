<template>

    <Head title="Laravel loves Inertiajs" />

    <h1>Layout</h1>

    <slot />
    
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import { Head } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Link,
    Head
  },
}
</script>
