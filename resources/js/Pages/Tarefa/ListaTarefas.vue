<template>
<layout>
    <div class="conteudoCentral">
    <h4>Tarefas:</h4>

        <b-alert v-if="mensagem" variant="success" show>{{mensagem}}</b-alert>

        <div v-for="t in tarefas" :key="t.id" class="container flex">
            <div class="itemData flex-item-1">{{t.data_limite}}</div>
            <div class="item flex-item-1">{{t.tipo_de_tarefas}}</div>
            <div class="item flex-item-1">{{t.descricao}}</div>
            <div class="itemExcluir flex-item-1">
                <b-button variant="danger" size="sm" class=""
                @click="confirmaExclusao(t.id)">
                    Excluir
                </b-button>
            </div>
        </div>

    </div>
</layout>
</template>

<script>
import Layout from '../../Layouts/Layout'
export default {
    data() {
      return {
        dismissSecs: 10,
        dismissCountDown: 0,
        showDismissibleAlert: false
      }
    },
    components:{
        Layout
    },
    props: {
        tarefas: Array,
        mensagem: String
    },
    methods:{
        countDownChanged(dismissCountDown) {
            this.dismissCountDown = dismissCountDown
        },
        showAlert() {
            this.dismissCountDown = this.dismissSecs

        },
        confirmaExclusao(idTarefa){
        this.$confirm(
            {
            message: `Tem certeza que deseja excluir a tarefa nº`+idTarefa+`?`,
            button: {
                no: 'Cancelar',
                yes: 'Excluir'
            },
            /**
            * Callback Function
            * @param {Boolean} confirm
            */
            callback: confirm => {
                if (confirm) {
                console.log(idTarefa)
                }
            }
            }
        )
        }

    }
}
</script>
<style>
</style>
