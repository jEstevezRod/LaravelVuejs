<template>

    <div class="column is-3 is-flex has-cursor-pointer">
        <div class="card is-shady">
            <div class="card-image has-text-centered">
                <img :src="item.image" class="has-margin5 image-target" alt="">
            </div>
            <div class="card-content">
                <div class="content">
                    <h4 class="has-text-centered"> {{ item.title }} </h4>
                    <p>{{ item.description}}</p>
                    <p class="has-text-centered"><a href="#" class="button is-danger">Ir a {{ item.title }}</a></p>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "TargetComponent",
        props: {
            item: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                image_src: '../../../public/images/home.png',
            }
        }
    }
</script>

<style scoped>
    .has-margin5 {
        margin: 45px 30px 20px 30px;
    }
    .image-target {
        width: 150px;
        height: 150px;
    }
</style>