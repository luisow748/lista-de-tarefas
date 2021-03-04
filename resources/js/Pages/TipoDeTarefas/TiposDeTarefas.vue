<template>
<layout>
    <div class='conteudoCentral'>
    <b-alert v-if="mensagem" variant="success" show>{{mensagem}}</b-alert>


        <div class='navTipoDeTarefas'>
            <div>
                <b-button variant="primary" size="sm" class="mr-2 my-sm-0"
                @click="inserirNovoTipo = true">
                + Criar Tipo
                </b-button>
                <b-button variant="secondary" size="sm" class="mr-2 my-sm-0"
                @click="voltarParaInicio">
                Voltar
                </b-button>
            </div>
        </div>
        <NovoTipoTarefa v-if="inserirNovoTipo" />

        <div v-if="!inserirNovoTipo">
            <div class='itemTipoTarefa' v-for="t in tipoDeTarefas" :key="t.id">
                {{t.nome}}

                <b-button class="" size='sm' variant="danger" @click="confirmaExclusao(t.id)">Excluir</b-button>
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
        NovoTipoTarefa,

    },
    props: {
        tipoDeTarefas: Array,
        mensagem: String,
        inserirNovoTipo: Boolean
    },
    methods: {
        deletarTipoTarefa(id){
            this.$inertia.delete('/tipo_de_tarefa/'+id)
        },
        voltarParaInicio(){
            this.$inertia.get('/')
        },
        confirmaExclusao(idTarefa){
        this.$confirm(
            {
            message: `Tem certeza que deseja excluir o tipo de tarefa nº`+idTarefa+`?`,
            button: {
                yes: 'Excluir',
                no: 'Cancelar'
            },
            /**
            * Callback Function
            * @param {Boolean} confirm
            */
            callback: confirm => {
                if (confirm) {
                this.$inertia.delete('/tipo_de_tarefa/'+idTarefa);

                }
            }
            }
        )
        },

    }
}
</script>
<style>
</style>
