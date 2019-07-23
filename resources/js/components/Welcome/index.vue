<template>
    <div class="container">
            <presentation></presentation>

            <skills></skills>

            <experiences></experiences>

            <training></training>
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