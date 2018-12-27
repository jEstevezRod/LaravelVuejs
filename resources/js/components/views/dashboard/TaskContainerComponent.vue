<template>
    <section class="container is-fluid test">
        <h1 class="title has-text-centered"> Dashboard</h1>
        <div class="columns">
            <!--left side-->
            <div class="column is-3 sidebar-wrapper">
                <div class="columns">
                    <div class="column sidebar">
                        <div class="teams-wrapper">
                            <p class="subtitle">TEAMS:</p>
                            <ul>
                                <li>team 1</li>
                                <li>team 2</li>
                                <li>team 3</li>
                            </ul>
                        </div>
                        <div class="projects-wrapper">
                            <p class="subtitle">PROJECTS</p>
                            <ul>
                                <li>project 1</li>
                                <li>project 2</li>
                                <li>project 3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="column box">
                        <p class="subtitle">Tasks</p>
                        <form action="/tasks" method="post" @submit.prevent="onSubmit">
                            <input type="hidden" name="_token" :value="csrf">
                            <label for="teamwork">Your team: </label>
                            <input type="text" name="teamwork" id="teamwork" v-model="teamwork">
                            <label for="subject">Your title is: </label>
                            <input type="text" name="subject" id="subject" v-model="subject">
                            <label for="description">Your description is: </label>
                            <input type="text" name="description" id="description" v-model="description">
                            <label for="state">Your task state is: </label>
                            <input type="text" name="state" id="state" v-model="state">

                            <button type="submit">Add task</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--right side-->

            <div class="column is-9 task-wrapper">
                <div class="columns is-variable is-2-mobile">
                    <div class="column task-state has-text-centered"> QUEUE
                        <hr>
                    <div class="box">soy una tarea</div>
                    <div class="box">soy una tarea</div>
                    <div class="box">soy una tarea</div>
                    </div>
                    <div class="column task-state has-text-centered"> IN PROGRESS
                        <hr>
                        <div v-for="task in tasks_list" class="box">{{task.subject}}</div>

                    </div>
                    <div class="column task-state has-text-centered">FINISHED
                        <hr>
                        <div class="box">soy una tarea</div>
                        <div class="box">soy una tarea</div>
                        <div class="box">soy una tarea</div>
                        <div class="box">soy una tarea</div></div>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "TaskContainer",
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                teamwork: '',
                subject: '',
                description: '',
                state: 'queue',
                tasks_list: [],
            }
        },
        mounted() {

                this.$axios.get('/tasks')
                    .then(response => this.tasks_list = response.data.tasks)
                    .catch(error => console.log(error.response))

        },
        methods: {

            onSubmit() {
                this.$axios.post('/tasks', {
                    teamwork : this.teamwork,
                    subject: this.subject,
                    description: this.description
                })
                    .then(this.onSuccess)
                    .catch()
            },

            onSuccess(response) {
                alert(response.data.message)
                this.tasks_list.push(response.data.task)
            }
        }

    }
</script>

<style scoped>
    .test {
        padding-top: 100px;
        min-height: 800px;
    }
    .sidebar-wrapper {
        border-radius: 4px;
    }

    .task-wrapper {
        border-radius: 4px;
    }
    .sidebar {
        margin: 20px;
        padding: 20px;
        border-radius: 4px;
        border: 1px solid #ebebed;
        background-color: #f0f0f2;
        box-shadow: 1px 1px 7px #9a9a9a;
        min-height: 300px;
    }
    .projects-wrapper {
        margin-top: 30px;
    }
    .task-state {
        border: 1px solid #cbcbcb;
        border-radius: 5px;
        margin: 15px 15px;
        min-height: 100px;
        background-color: #84d6ac;
        box-shadow: 1px 1px 7px #d3d3d3;
    }
</style>