<template>
<div>
  <main>
  <Navbar />
    <header>
      <inertia-link href="/">Home</inertia-link>
      <inertia-link href="/sobre">About</inertia-link>
      <inertia-link href="/contato">Contact</inertia-link>
    </header>

    <article>
      <slot />
    </article>
  </main>
</div>
</template>

<script>
import Navbar from '../Components/Estruturas/Navbar'
  export default {
      components: {
          Navbar
      },
    props: {
      title: String,
    },
    watch: {
      title: {
        immediate: true,
        handler(title) {
          document.title = title
        },
      },
    },
  }
</script>
