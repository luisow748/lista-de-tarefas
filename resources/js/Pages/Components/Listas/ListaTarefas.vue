<template>
<layout>
    <div class="conteudoCentral">
    <h4>Tarefas:</h4>

        <b-alert v-if="mensagem" variant="success" show>{{mensagem}}</b-alert>

        <p v-for="t in tarefas" :key="t.id">
            {{t.descricao}}<br>
            {{t.data_limite}}<br>
        </p>
    </div>
</layout>
</template>

<script>
import Layout from '../../../Layouts/Layout'
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

        }
    }
}
</script>
<style>
</style>
