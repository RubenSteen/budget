<template>
  <Layout>
    <Head title="Something else" />
    <h2>Welcome</h2>
  </Layout>
</template>

<script>
import Layout from "@/Shared/Layout"

export default {
  components: {
    Layout
  },
  props: {
    name: String,
    }
}
</script>