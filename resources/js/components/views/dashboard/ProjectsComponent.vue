<template>

    <div class="my-custom">
        <!--<div>ESTO FUNCIONA {{$route.params.id}}</div>-->
        <state :tasks_list="tasks_list" v-for="state in states_list" :state="state"></state>
    </div>
</template>

<script>
    export default {
        name: "ProjectsComponent",
        props: {},
        data() {
            return {
                tasks_list: [],
                states_list: [],
            }
        },
        mounted() {
            this.$axios.get('/projects/' + this.$route.params.id)
                .then(response => {
                    console.log(response.data)
                    this.tasks_list = response.data.tasks
                    this.states_list = response.data.states
                })

        },
        beforeUpdate() {
            this.$axios.get('/projects/' + this.$route.params.id)
                .then(response => {
                    console.log(response.data)
                    this.tasks_list = response.data.tasks
                    this.states_list = response.data.states
                })
        }
    }
</script>

<style scoped>

    .my-custom {
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
    }

</style>