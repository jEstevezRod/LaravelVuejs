<template>
    <form action="/tasks" method="post" @submit.prevent="addState">
        <div class="modal-card" style="width: auto">
            <header class="modal-card-head">
                <p class="modal-card-title has-text-centered">Add new state</p>
            </header>
            <section class="modal-card-body">

                <input type="hidden" name="_token" :value="csrf">
                <label for="name">The name for the new state: </label>
                <input type="text" class="input is-info" id="name" v-model="state_name">
                <label for="project">Do you want to add in any project ?</label>
                <input type="text" class="input" id="project" v-model="state_project">

            </section>
            <footer class="modal-card-foot">
                <button class="button" type="button" @click="$parent.close()">Close</button>
                <button type="submit" class="button is-primary" @click="$parent.close()">Add State</button>
            </footer>
        </div>
    </form>

</template>

<script>
    import { EventBus } from '../../../event-bus.js';

    export default {
        name: "ModalAddStateComponent",
        data (){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                state_name: '',
                state_project: '',

            }

        },
        methods: {
            addState() {
                this.$axios.post('/states', {
                    name: this.state_name,
                    project: this.state_project
                })
                    .then(this.onSuccessState)
            },

            onSuccessState(response) {
                alert(response.data.message)
                EventBus.$emit('updateStates', response.data.state);
            },

        }
    }
</script>

<style scoped>

</style>