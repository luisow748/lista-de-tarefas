<template>
<layout>
    <div class='conteudoTipoDeTarefas'>
        <h4>Tipos de tarefas cadastradas:</h4>

        <p v-for="t in tipoDeTarefas" :key="t.id">
            {{t.nome}}<br>

        </p>
    </div>
</layout>
</template>

<script>
import Layout from '../../Layouts/Layout'
export default {
    components:{
        Layout
    },
    props: {
        tipoDeTarefas: Array
    }
}
</script>
<style>
</style>
