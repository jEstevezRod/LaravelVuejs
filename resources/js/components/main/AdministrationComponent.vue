<template>
    <section class="container">
        <div class="columns features">
            <target-component v-for="item in items" :item="item"></target-component>
        </div>
    </section>
</template>

<script>
    export default {
        name: "AdministrationComponent",
        data() {
            return {
                items: [
                    {id: 1, title: 'Dashboard', description: 'Manage and see all your task in progress or finished', image:'../../../public/images/home.png'},
                    {id: 2, title: 'Calendar', description: 'You can see all your task easily in a calendar', image:'../../../public/images/calendar.png'},
                    {id: 3, title: 'Notes', description: 'Need take a quick note ? It\'s your place!', image:'../../../public/images/note.png'},
                    {id: 4, title: 'Messages', description: 'Easy way to communicate with your teammates', image:'../../../public/images/question.png'},
                ]
            }
        }
    }
</script>

<style scoped>

    .features {
        padding: 5rem 0;
    }

</style>