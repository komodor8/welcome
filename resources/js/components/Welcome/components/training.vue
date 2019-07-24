<template>
    <div
      class="no-gutters bg-light p-1 my-5 my-md-5 p-md-5"
      id="training"
    >
        <h1 class="mb-5">Formation</h1>
        <Timeline
              :timeline-items="dataTimeline"
              :message-when-no-items="messageWhenNoItems"
              :unique-year="true"
              order="desc"
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
            from: new Date(2017, 5),
            title: " Diplôme développeur logiciels - Développement web fullstack",
            description:
              "Acquisition de compétences dans différents langages serveurs, langage SQL et langages client. Utilsation des API dans mes différents projets."
          },
          {
            from: new Date(2014, 8),
            title: "Master 2 marketing et vente en B to B – IAE Lyon",
            description:
              "Contenu des enseignements : Vente et négociation de solutions d’affaires en IT – plan d’actions commerciales et gestion de portefeuilles clients – prévision et budgétisation des ventes – analyse de l’environnement marché et veille concurrentielle – conception et lancement d’offres B to B."
          },
          {
            from: new Date(2012, 11),
            title: "Master 1 Marketing, mention assez bien - IAE Dijon",
            description:
              "Semestre en Norvège à l\’université Hedmark University College à Rena, mention bien, contenu des enseignements : marketing, du management et du commerce à l’international."
          },
          {
            from: new Date(2011, 11),
            title: "Licence 3 Sciences de gestion - l’IAE de Dijon",
            description:
              "spécialité marketing."
          },
          {
            from: new Date(2010, 11),
            title: "DUT Gestion des Entreprises et des administrations.",
            description:
              " option Petites et Moyennes Organisation à Dijon."
          },
          {
            from: new Date(2008, 11),
            title: " Baccalauréat Scientifique à Dijon.",
            description:
              ""
          }
        ]
      })
    }
</script>