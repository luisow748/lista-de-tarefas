<template>
<div>
  <main>
  <Navbar />

    <article>
      <slot />
    </article>
  </main>
  <vue-confirm-dialog></vue-confirm-dialog>
</div>
</template>

<script>
import Navbar from '../Pages/Components/Estruturas/Navbar'
  export default {
    title: 'Tarefas',
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
