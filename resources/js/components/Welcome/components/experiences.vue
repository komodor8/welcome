<template>
    <div class="no-gutters bg-danger my-md-5 p-md-5">
        <h1 class="mb-5">Expériences</h1>
        <Timeline
            :timeline-items="dataTimeline"
            :message-when-no-items="messageWhenNoItems"
            :unique-year="true"
            order="desc"
            colorDots="#FF00EB"
        />
    </div>
</template>

<script>
    import Timeline from 'timeline-vuejs'

    export default {
        components: {
            Timeline
        },

        data: () => ({
        messageWhenNoItems: "There arent items",
        dataTimeline: [
            {
                from: new Date(2019, 5),
                title: "Développeur web fullstack – Belvédère communication, Montréal – 2 ans",
                description:
                  "<strong>Projet 1: </strong>Méthode Agile dans le développement d'un projet d'une multinationale. Développement d'un outil interne qui permet de gérer les réclamations numériquement entre entrepôts et concessionnaires. </br><strong>Technologies utilisées :</strong> Laravel, VueJS, ORM Eloquent, testing, Gestion de base de données, cronjob. </br></br> <strong>Projet 2: </strong>Développment d'une application mobile qui permet de communiquer des informations à des syndicats, de tracer les heures supplémentaires, frais des utilisateurs.  </br><strong>Technologies utilisées : </strong> ReactNative et meteor"
            },
            {
                from: new Date(2017, 5),
                title: "Développeur web – JPM & Associés, Dijon(21) – 3 mois",
                description:
                  "<strong>Projet :</strong> Développement d’une application web pour les entreprises qui souhaitent créer une campagne de communication originale par email à leurs clients ou collaborateurs.</br><strong>Technologies utilisées :</strong> NodeJS, Framework Express, ReactJS, GitLab, JWT, Authentification avec Passport, ORM Sequelize, PostgreSQL."
                },
            {
                from: new Date(2014, 8),
                title: " Stage assistant ingénieur d’affaires – vNext pure player Microsoft, Paris (75) – 6 mois",
                description:
                  "Connaissance des systèmes d’information en entreprise <ul class='show-list-circle'><li>Ouverture de nouveaux comptes - gestion des relations clients</li><li>Proposition de nouveaux services Microsoft</li><li>Négociation prix / service / date et délai de réalisation de l’implémentation des services Microsoft</li><li>Réalisation de devis, propositions commerciales, avant-ventes et PoC (Proof of Concepts)</li><li>Mailing de nos nouveaux produits à nos clients, organisation du stand pour les salons IT</li></ul>"
            },
        ]
      })
    }
</script>