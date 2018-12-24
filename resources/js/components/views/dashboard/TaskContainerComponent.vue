<template>
    <section class="container is-fluid test">
        <h1 class="title has-text-centered"> Dashboard</h1>
        <div class="columns">
            <!--left side-->
            <div class="column is-3 sidebar-wrapper">
                <div class="columns">
                    <div class="column sidebar">
                        <div class="teams-wrapper">
                            <h4>TEAMS:</h4>
                            <ul>
                                <li>team 1</li>
                                <li>team 2</li>
                                <li>team 3</li>
                            </ul>
                        </div>
                        <div class="projects-wrapper">
                            <h4>PROJECTS</h4>
                            <ul>
                                <li>project 1</li>
                                <li>project 2</li>
                                <li>project 3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <form action="/tasks" method="post" @submit.prevent="onSubmit">
                            <input type="hidden" name="_token" :value="csrf">
                            <input type="text" name="author" id="author" v-model="author">
                            <input type="text" name="teamwork" id="teamwork" v-model="teamwork">
                            <input type="text" name="subject" id="subject" v-model="subject">
                            <input type="text" name="description" id="description" v-model="description">
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
                        <div class="box">soy una tarea</div>
                        <div class="box">soy una tarea</div></div>
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
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            author: '',
            teamwork: '',
            subject: '',
            description: ''
        }),
        methods: {
            onSubmit() {
                this.$axios.post('/tasks', {
                    author : this.author,
                    teamwork : this.teamwork,
                    subject: this.subject,
                    description: this.description
                }).then(
                    console.log("done")
                ).catch(
                    console.log("bad request")
                )
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