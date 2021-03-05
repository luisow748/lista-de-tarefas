<template>
    <layout>
    <div class='conteudoCentral'>

        <!-- <b-card bg-variant="light"> -->
            <b-form-group
            label-cols-lg="3"
            label="Nova Tarefa"
            label-size="lg"
            label-class="font-weight-bold pt-0"
            class="mb-0">
                <b-form-group
                    label="Descrição:"
                    label-for="descr"
                    label-cols-sm="3"
                    label-align-sm="right"
                >
                    <b-form-input v-if="modo == 'editar'" v-model="tarefa.descricao" id="descr"></b-form-input>
                    <b-form-input v-else v-model="novaTarefa.descricao" id="descr"></b-form-input>

                </b-form-group>

                <b-form-group
                    label="Tipo de tarefa:"
                    label-for="tipo-tarefa"
                    label-cols-sm="3"
                    label-align-sm="right"
                >
                    <b-form-select v-if="modo == 'editar'" id="tipo-tarefa" v-model="tarefa.tipo_de_tarefas_id">

                        <b-form-select-option v-for="o in tipoDeTarefas"
                            :value="o.id" :key="o.id">  {{o.nome}}
                        </b-form-select-option>
                    </b-form-select>

                    <b-form-select v-else id="tipo-tarefa" v-model="novaTarefa.tipo_de_tarefas_id">

                        <b-form-select-option v-for="o in tipoDeTarefas"
                            :value="o.id" :key="o.id">  {{o.nome}}
                        </b-form-select-option>
                    </b-form-select>

                </b-form-group>

                <b-form-group
                    label="Data limite:"
                    label-for="nested-state"
                    label-cols-sm="3"
                    label-align-sm="right"
                >

                    <b-form-datepicker v-if="modo == 'editar'" id="datepicker-dateformat2" v-model="tarefa.data_limite"
                    :date-format-options="{day: 'numeric', month: 'numeric', year: 'numeric' }"
                    locale="br">
                    </b-form-datepicker>

                    <b-form-datepicker v-else id="datepicker-dateformat2" v-model="novaTarefa.data_limite"
                    :date-format-options="{day: 'numeric', month: 'numeric', year: 'numeric' }"
                    locale="br">
                    </b-form-datepicker>


                </b-form-group>

                <div>

                    <b-button v-if=" modo == 'editar' " variant="success" @click="atualizarTarefa(tarefa)">Atualizar</b-button>
                    <b-button v-else variant="success" @click="salvarTarefa">Salvar</b-button>
                    <b-button variant="outline-primary" @click="limparCampos">Cancelar</b-button>
                </div>

                </b-form-group>
            <!--</b-form-group> -->
        <!-- </b-card> -->
    </div>
    </layout>
</template>

<script>
import Layout from '../../Layouts/Layout'

export default {
    data(){
        return{
            novaTarefa:{
                descricao:'',
                data_limite: '',
                tipo_de_tarefas_id: '',

            }
        }
    },
    components:{
        Layout
    },
    props:{
        tipoDeTarefas: Array,
        tarefa: Array,
        modo: String

    },

    methods:{
        salvarTarefa(){
            this.$inertia.post('/tarefa/inserir', this.novaTarefa)
        },
        limparCampos(){
            this.tarefa = []
            this.$inertia.get('/')
        },
        atualizarTarefa(tarefa){
            this.$inertia.post('/tarefa/'+tarefa.id+'/atualizar', tarefa)
        },
    },
    created(){

    }

}
</script>
<style>
</style>
