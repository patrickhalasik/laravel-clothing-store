<script>
import { Head } from '@inertiajs/inertia-vue3';

import Layout from "../Shared/Layout.vue"

export default {
  components: { Layout, Head }
}
</script>

<template>
    <Head title="News" />

    <Layout>
        This is the news page.
    </Layout>

</template>

