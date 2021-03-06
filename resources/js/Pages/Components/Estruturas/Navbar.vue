<template>
    <div>
    <b-navbar toggleable="lg" type="dark" variant="info">

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>

                <inertia-link href="/" as="button"
                size="" class="horizontal mr-2 my-sm-0" >
                <span class="text">Tarefas</span>
                </inertia-link>


        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
            <b-nav-form>
            <inertia-link href="/tipo_de_tarefa" as="b-button"
            size="sm" class="mr-2 my-sm-0" id="tiposTarefas">
            Tipos de Tarefas
            </inertia-link>
            <b-tooltip target="tiposTarefas" triggers="hover">
                Listar todos os <b>tipos de tarefas</b> cadastrados
            </b-tooltip>
            <inertia-link href="/tarefa/inserir" as="b-button"
            size="sm" class="mr-2 my-sm-0" id="tarefas">
            + Criar Tarefa
            </inertia-link>
            <b-tooltip target="tarefas" triggers="hover" placement="bottomleft">
                Cria uma nova <b>tarefa</b>
            </b-tooltip>
            </b-nav-form>


        </b-navbar-nav>
        </b-collapse>
    </b-navbar>
    </div>
</template>

<script>

export default {
	 components:{

      },

}
</script>

<style>
	#app {
		display: flex;
		flex-direction: column;
		align-items: center;
	}
</style>
