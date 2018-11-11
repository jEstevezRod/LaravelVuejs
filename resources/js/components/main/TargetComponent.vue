<template>

    <div class="column is-3 is-flex has-cursor-pointer">
        <div class="card is-shady">
            <div class="card-image has-text-centered">
                <img src="../../../../public/images/home.png" class="has-margin5" alt="">
            </div>
            <div class="card-content">
                <div class="content">
                    <h4 class="has-text-centered">Dashboard</h4>
                    <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer
                        enim neque.</p>
                    <p class="has-text-centered"><a href="#" class="button is-danger">Ir a Dashboard</a></p>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "TargetComponent",
        data: {
            image_src: '../../../public/images/home.png',
        }
    }
</script>

<style scoped>
    .has-margin5 {
        margin: 45px 30px 20px 30px;
    }

</style>