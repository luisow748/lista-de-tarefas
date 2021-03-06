<template>
<layout>
<div class="conteudoCentral">
<h4>Tarefas:</h4>
    <div class="selectFiltroTipo">
        <b-form-select  size="sm" id="tipo-tarefa" v-model="tipoTarefaSelecionada"
        @change="retornaTarefasPorTipo">
        <template #first>
            <b-form-select-option class='textoInputCentralizado' value="" disabled>
             -- Selecione um Tipo de Tarefa --
            </b-form-select-option>
        </template>
            <b-form-select-option v-for="o in tipoDeTarefas"
                :value="o.id" :key="o.id">  {{o.nome}}
            </b-form-select-option>
        </b-form-select>
    </div>

        <b-alert v-if="mensagem" variant="success" show>{{mensagem}}</b-alert>

        <div v-for="t in tarefas" :key="t.id" class="containerPrincipal flex">
            <div class="toggleButtonDiv checked flex-item-1">
                <toggle-button v-model="t.status" :labels="{checked: 'Ok!', unchecked: ''}"
                @change="atualizarTarefa(t)"/>
            </div>

            <div class="container flex">
                <div class="itemData flex-item-1">{{data(t.data_limite)}}</div>
                <div class="item flex-item-1">{{t.tipo_de_tarefas}}</div>

                <div class="item flex-item-1">{{t.descricao}}</div>

                <div class="itemExcluir flex-item-1">
                    <b-button variant="primary" size="sm" class=""
                        @click="editarTarefa(t)">
                        Editar
                    </b-button>
                    <b-button variant="danger" size="sm" class=""
                        @click="confirmaExclusao(t.id)">
                        Excluir
                    </b-button>
                </div>
            </div>
        </div>


</div>
</layout>
</template>

<script>
import Layout from '../../Layouts/Layout'
import moment from 'moment'
export default {
    data() {
      return {
        dismissSecs: 10,
        dismissCountDown: 0,
        showDismissibleAlert: false,
        checked: false,
        tipoTarefaSelecionada: ''
      }
    },
    components:{
        Layout
    },
    props: {
        tarefas: Array,
        mensagem: String,
        tipoDeTarefas: Array
    },
    methods:{
        editarTarefa(tarefa){
            this.$inertia.get('/tarefa/'+tarefa.id+'/atualizar', tarefa)
        },
        atualizarTarefa(tarefa){
            this.$inertia.post('/tarefa/'+tarefa.id+'/atualizar', tarefa)
        },
        confirmaExclusao(idTarefa){
        this.$confirm(
            {
            message: `Tem certeza que deseja excluir a tarefa nº`+idTarefa+`?`,
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
                this.$inertia.delete('/tarefa/excluir/'+idTarefa);

                }
            }
            }
        )
        },
        data(value){
         if (value) {
           return moment(String(value)).format('DD/MM/YYYY')
          }
        },
        retornaTarefasPorTipo(){

            this.$inertia.get('/tarefa/'+this.tipoTarefaSelecionada)
        }

    }
}
</script>
<style>
</style>
