<template>
    <div>
        <up-side-component></up-side-component>
        <administration-component></administration-component>
        <cookie-law theme="dark-lime">
            <div slot-scope="props" class="w-100 has-text-centered">
                <span >
                    This website uses cookies to ensure you get the best experience on our website.
                </span>
                <button class="skew button is-danger is-pulled-right m-5" @click="props.close"><span>Ignore me</span></button>
                <button class="skew button is-success is-pulled-right m-5" @click="props.accept"><span>I accept</span></button>
            </div>

        </cookie-law>
        <feed-component></feed-component>
    </div>
</template>

<script>
    import CookieLaw from 'vue-cookie-law'
    export default {
        name: "MainComponent",
        components: { CookieLaw },
    }
</script>

<style scoped>
    .w-100 {
        width: 100%;
    }
    .m-5 {
        margin: 0 5px;
    }

</style>