<template>
    <div class="hero-head">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="../">
                        <p class="title-navbar" >Joy Nuts</p>
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                </div>
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="tabs is-right">
                            <ul>
                                <li class="is-active"><a>Home</a></li>
                                <li><a href="">Dashboard</a></li>
                                <li><a href="">Calendario</a></li>
                                <li><a href="">Notas</a></li>
                                <li><a href="">Mensajes</a></li>
                            </ul>
                            <span class="navbar-item">
                                        <p></p>
                                        <a class="button is-white is-outlined" href="/logout">
                                            <span @click.prevent="logout">Logout</span>
                                        </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        name: "NavbarComponent",
        methods: {
            logout() {
                axios.post('/api/logout').then(function (response) {

                }).catch(function (response) {

                })
            }
        }
    }
</script>

<style scoped>

</style>