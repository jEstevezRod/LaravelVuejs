<template>


    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="..">
                <span class="my-logo"> Taskland</span>
            </a>

            <a role="button" class="navbar-burger burger" :class="{ 'is-active': isActive }"
               @click="isActive = !isActive" aria-label="menu" aria-expanded="isActive"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu" :class="{ 'is-active': isActive }">


            <div class="navbar-end">
                <a class="navbar-item">
                    <router-link to="/">Home</router-link>
                </a>

                <a class="navbar-item">
                    <router-link to="/dashboard">Dashboard</router-link>
                </a>
                <a class="navbar-item">
                    <router-link to="/dashboard">Calendar</router-link>
                </a>

                <a class="navbar-item">
                    <router-link to="/dashboard">Notes</router-link>
                </a>
                <a class="navbar-item">
                    <router-link to="/dashboard">Messages</router-link>
                </a>


                <b-dropdown position="is-bottom-left">
                    <a class="navbar-item" slot="trigger">
                        <span>Menu </span>
                        <i class="fas fa-caret-down"></i>
                    </a>

                    <b-dropdown-item custom>
                        Logged as <b>Rafael Beraldo</b>
                    </b-dropdown-item>
                    <hr class="dropdown-divider">

                    <b-dropdown-item value="settings">
                        <b-icon icon="settings"></b-icon>
                        Settings
                    </b-dropdown-item>
                    <b-dropdown-item value="logout" @click.prevent="logout">
                        <b-icon icon="logout"></b-icon>
                        Logout
                    </b-dropdown-item>
                </b-dropdown>
            </div>
        </div>

    </nav>

</template>

<script>
    export default {
        name: "NavbarComponent",
        props: {
            userName: String ,
        },
        data() {
            return {
                isActive: false,
            }
        },
        methods: {
            logout() {
                this.$axios.get('logout')
                window.location.href = '/'
            },
            toggleNav() {
                let nav = document.getElementById("nav-menu");
                let className = nav.getAttribute("class");
                if (className == "nav-right nav-menu") {
                    nav.className = "nav-right nav-menu is-active";
                } else {
                    nav.className = "nav-right nav-menu";
                }
            }
        }
    }
</script>

<style scoped>
    .my-logo {
        font-family: 'Waiting for the Sunrise', cursive;
        font-size: 30px;
        font-weight: 600;
    }

    i {
        margin: 0 5px;
    }
</style>