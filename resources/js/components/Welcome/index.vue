<template>
    <div class="container">
        <div class="col-md-12 bg-danger p-5 mb-5">
            <presentation></presentation>
        </div>

        <div class="col-md-12 bg-danger p-5 mb-5">
            <skills></skills>
        </div>

        <div class="col-md-12 bg-danger p-5 mb-5">
            <experiences></experiences>
        </div>

        <div class="col-md-12 bg-danger p-5 mb-5">
            <training></training>
        </div>
    </div>
</template>

<script>
    import experiences from "./components/experiences.vue";
    import presentation from "./components/presentation.vue";
    import skills from "./components/skills.vue";
    import training from "./components/training.vue";

    export default {

        components: {
            experiences, presentation, skills, training
        },
    }
</script>