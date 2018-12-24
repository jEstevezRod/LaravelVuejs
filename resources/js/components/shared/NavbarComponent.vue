<template>
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-12">
                <div class="hero-head">
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar-brand">
                                <a class="navbar-item" href="..">
                                    <p class="title-navbar">Taskland </p>
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
                                            <li class="is-active">
                                                <router-link to="/">Home</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/dashboard">Dashboard</router-link>
                                            </li>
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
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "NavbarComponent",
    }
</script>

<style scoped>
    .hero-head {
        position: absolute;
        width: 100%;
    }

    .navbar {
        background-color: transparent;
    }

</style>