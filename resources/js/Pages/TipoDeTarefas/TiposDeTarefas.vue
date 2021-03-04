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

                <b-button variant="danger" @click="deletarTipoTarefa(t.id)" size="sm" class="mr-2 my-sm-0" >
                Excluir
                </b-button>
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
        deletarTipoTarefa(id){
            this.$inertia.delete('/tipo_de_tarefa/'+id)
        }

    }
}
</script>
<style>
</style>
