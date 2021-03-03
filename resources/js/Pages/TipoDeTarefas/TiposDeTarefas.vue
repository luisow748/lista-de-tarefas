<template>
<layout>
    <div class='conteudoCentral'>
        <div class='navTipoDeTarefas'>
            <div>
                <inertia-link href="/tarefa/inserir" as="b-button" size="sm" class="mr-2 my-sm-0" >
                + Criar Tipo
                </inertia-link>
            </div>
        </div>

        <p class='itemTipoTarefa' v-for="t in tipoDeTarefas" :key="t.id">
            {{t.nome}}

                <inertia-link href="/tarefa/inserir" as="b-button" variant="danger" size="sm" class="mr-2 my-sm-0" >
                Excluir
                </inertia-link>

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
