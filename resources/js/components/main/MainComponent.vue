<template>
    <div>
        <up-side-component></up-side-component>
        <administration-component></administration-component>
        <feed-component></feed-component>
        <footer-component></footer-component>
    </div>
</template>

<script>
    import UpSideComponent from "./UpSideComponent";
    export default {
        name: "MainComponent",
        components: {UpSideComponent}
    }
</script>

<style scoped>

</style>