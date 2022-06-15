<template>
  
  <Head title="Something else" />
  <Layout>
    <h2>Welcome</h2>
  </Layout>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import { Head } from '@inertiajs/inertia-vue3'
import Layout from "@/Shared/Layout"

export default {
  components: {
    Link,
    Head,
    Layout
  },
  props: {
    name: String,
    }
}
</script>