<template>

    <div class='conteudoCentral'>

                <b-form-group
                    label="Nome do tipo:"
                    label-for="descr"
                    label-cols-sm="3"
                    label-align-sm="right"
                >
                    <b-form-input v-if="modo == 'editar'" v-model="tipoTarefaAtualizar.nome" id="descr"></b-form-input>
                    <b-form-input v-else v-model="tipo.nome" id="descr"></b-form-input>

                </b-form-group>

                <div>
                    <b-button variant="success"
                    @click="salvarTipoTarefa">Salvar</b-button>
                    <b-button variant="outline-primary"
                    @click="limparCamposEVoltar">Cancelar</b-button>
                </div>

    </div>

</template>

<script>
import Layout from '../../Layouts/Layout'
export default {
    data(){
        return {
            tipo:{
                nome: ''
            }

        }
    },
    props:{
        tipoTarefaAtualizar: Array,
        modo: String
    },
    methods: {
        salvarTipoTarefa(){
            this.$inertia.post('/tipo_de_tarefa/inserir', this.tipo)

        },
         limparCamposEVoltar(){
            this.nome = []
            this.$inertia.get('/tipo_de_tarefa')

        }
    },
    components:{
        Layout
    }

}
</script>
<style>
</style>


