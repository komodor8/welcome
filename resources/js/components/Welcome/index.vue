<template>
    <div class="container">
        <presentation></presentation>

         <skills></skills>

       <experiences></experiences>

     <training></training>

     <mailme></mailme>

    </div>
</template>

<script>
    import experiences from "./components/experiences.vue";
    import presentation from "./components/presentation.vue";
    import skills from "./components/skills.vue";
    import training from "./components/training.vue";
    import mailme from "./components/mailme.vue";

    export default {

        components: {
            experiences, mailme, presentation, skills, training
        },
    }
</script>