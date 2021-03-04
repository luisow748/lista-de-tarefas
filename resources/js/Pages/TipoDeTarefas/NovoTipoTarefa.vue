<template>


    <div class='conteudoCentral'>

                <b-form-group
                    label="Nome do tipo:"
                    label-for="descr"
                    label-cols-sm="3"
                    label-align-sm="right"
                >
                    <b-form-input v-model="tipo.nome" id="descr"></b-form-input>

                </b-form-group>

                <div>
                    <b-button variant="success" @click="salvarTipoTarefa">Salvar</b-button>
                    <b-button variant="outline-primary" @click="limparCampos">Cancelar</b-button>
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
    methods: {
        salvarTipoTarefa(){

            this.$inertia.post('/tipo_de_tarefa/inserir', this.tipo)
            console.log(this.tipo)

        },
         limparCampos(){
            this.nome = []

        }
    },
    props: {

    },
    components:{
        Layout
    }

}
</script>
<style>
</style>


