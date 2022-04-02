<template>
 <nav class="flex items-center justify-between flex-wrap bg-red-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">

    <ApplicationLogo />
    <span class="font-semibold text-xl tracking-tight">Laravel Clothing Store</span>
  </div>

  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">

      <Link href="/homepage" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4" :class="{'font-bold underline text-yellow-200': $page.component === 'Homepage'}">
            <span style="display:flex; align-items:center">
                <HomepageIcon />
                Accueil
            </span>
      </Link>


      <Link href="/shop" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4" :class="{'font-bold underline text-yellow-200': $page.component === 'Shop'}">
            <span style="display:flex; align-items:center">
                <ShopIcon />
                Magasin
            </span>
      </Link>

      <Link href="/news" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4" :class="{'font-bold underline text-yellow-200': $page.component === 'News'}">
            <span style="display:flex; align-items:center">
                <NewsIcon />
                News
            </span>
      </Link>

      <Link href="/minichat" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4" :class="{'font-bold underline text-yellow-200': $page.component === 'Minichat'}">
            <span style="display:flex; align-items:center">
                <MinichatIcon />
                Mini-chat
            </span>
      </Link>
    </div>
    <div>
      <a href="/login" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Se connecter / S'inscrire</a>
    </div>
  </div>
</nav>

</template>

<script setup>

import { Link } from '@inertiajs/inertia-vue3' 
import ApplicationLogo from '@/Icons/ApplicationLogo.vue'
import HomepageIcon from '@/Icons/HomepageIcon.vue'
import ShopIcon from '@/Icons/ShopIcon.vue'
import NewsIcon from '@/Icons/NewsIcon.vue'
import MinichatIcon from '@/Icons/MinichatIcon.vue'


</script>