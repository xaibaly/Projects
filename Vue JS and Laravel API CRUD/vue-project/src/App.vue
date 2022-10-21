<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>
    <div class="max-w-7xl mx-auto pt-6 pl-5 mb-5">
      <nav class="p-2">
        <RouterLink class="px-4 py-2 mr-4 bg-indigo-600 hover:bg-indigo-800 rounded text-white" to="/">Home</RouterLink>
        <RouterLink :to="{ name:'ProductIndex' }" class="px-4 py-2 mr-4 bg-indigo-600 hover:bg-indigo-800 rounded text-white" >Products</RouterLink>
      </nav>
    </div>
  </header>
<main class="max-w-7xl mx-auto min-h-screen pl-5">

  <RouterView />
</main>
</template>
