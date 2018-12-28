<template>
    <div class="column is-3-desktop is-4-tablet is-6-mobile task-state">
        <p class="subtitle has-text-white has-text-centered">{{state.name}} </p>
        <hr>
        <div class="box" v-for="task in taskToShow"> {{task.subject }}</div>
    </div>
</template>

<script>
    import {EventBus} from '../../../event-bus.js';

    export default {
        props: ['state', 'tasks_list'],
        name: "StateComponent",
        data() {
            return {
                taskToShow: []
            }
        },
        mounted() {
            EventBus.$on('updateTasks', value => {
                value.state == this.state.name ? this.taskToShow.push(value) : false
            })
            for (let task of this.tasks_list) {
                if (task.state === this.state.name) {
                    this.taskToShow.push(task)
                }
            }
        },
        methods: {

        }

    }
</script>

<style scoped>


    .task-state {
        border: 1px solid #cbcbcb;
        border-radius: 5px;
        margin: 15px 15px;
        min-height: 100px;
        background-color: #34495e;
        box-shadow: 1px 1px 7px #d3d3d3;
    }

</style>