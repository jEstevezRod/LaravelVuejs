<template>

    <div class="my-custom" :key="$route.params.id" >
        <state :tasks_list="tasks_list" v-for="state in states_list" :state="state" ></state>
    </div>
</template>

<script>
    import {EventBus} from '../../../event-bus.js';

    export default {
        name: "ProjectsComponent",
        data() {
            return {
                tasks_list: [],
                states_list: [],
                state: '',
                project_id: this.$route.params.id
            }
        },
        created() {
            EventBus.$on('updateStates', value => this.states_list.push(value))
            EventBus.$on('updateTasks', value => this.tasks_list.push(value))
            this.$axios.get('/projects/' + this.$route.params.id)
                .then(response => {
                    console.log(response.data)
                    this.tasks_list = response.data.tasks
                    console.log(response.data.tasks)
                    this.states_list = response.data.states
                })

        },


    }
</script>

<style scoped>

    .my-custom {
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
    }

</style>