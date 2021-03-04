<template>
<layout>
    <div class='conteudoCentral'>
    <b-alert v-if="mensagem" variant="success" show>{{mensagem}}</b-alert>


        <div class='navTipoDeTarefas'>
            <div>
                <b-button variant="primary" size="sm" class="mr-2 my-sm-0" @click="inserirNovoTipo = true">
                + Criar Tipo
                </b-button>
            </div>
        </div>
        <NovoTipoTarefa v-if="inserirNovoTipo" />

        <div v-if="!inserirNovoTipo">
            <div class='itemTipoTarefa' v-for="t in tipoDeTarefas" :key="t.id">
                {{t.nome}}

                <inertia-link href="/tarefa/inserir" as="b-button" variant="danger" size="sm" class="mr-2 my-sm-0" >
                Excluir
                </inertia-link>
            </div>
        </div>

    </div>
</layout>
</template>

<script>
import Layout from '../../Layouts/Layout'
import NovoTipoTarefa from '../TipoDeTarefas/NovoTipoTarefa'
export default {
    data(){
        return {

        }
    },
    components:{
        Layout,
        NovoTipoTarefa
    },
    props: {
        tipoDeTarefas: Array,
        mensagem: String,
        inserirNovoTipo: Boolean
    },
    methods: {


    }
}
</script>
<style>
</style>
