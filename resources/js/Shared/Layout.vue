<template>
    <header class="justify-between">
        <Navbar />
    </header>

<section class="p-6">
    <slot />
</section>
  

</template>

<script>
import Navbar from "./Navbar.vue"

export default {
    components: { Navbar }
}
</script>

<style>

</style>