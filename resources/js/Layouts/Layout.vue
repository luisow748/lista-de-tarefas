<template>
<div>
  <main>
  <Navbar />

    <article>
      <slot />
    </article>
  </main>
</div>
</template>

<script>
import Navbar from '../Pages/Components/Estruturas/Navbar'
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
