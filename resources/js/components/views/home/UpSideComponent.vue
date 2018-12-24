<template>
    <section class="hero is-medium is-bold header-image">
        <hero-component></hero-component>
    </section>
</template>

<script>
    export default {
        name: "UpSideComponent"
    }
</script>

<style scoped>
    .header-image {
        background-image: url("../../../../../public/images/cortada.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #999;
    }

</style>