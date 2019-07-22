<template>
    <div>
        <h1 class="mb-5">Expériences</h1>
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
            title: "Name",
            description:
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum architecto dolor, vitae magnam voluptate accusantium assumenda numquam error mollitia, officia facere consequuntur reprehenderit cum voluptates, ea tempore beatae unde."
          },
          {
            from: new Date(2017, 8),
            title: "Name",
            description:
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum architecto dolor, vitae magnam voluptate accusantium assumenda numquam error mollitia, officia facere consequuntur reprehenderit cum voluptates, ea tempore beatae unde."
          },
          {
            from: new Date(2016, 11),
            title: "Name",
            description:
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum architecto dolor, vitae magnam voluptate accusantium assumenda numquam error mollitia, officia facere consequuntur reprehenderit cum voluptates, ea tempore beatae unde."
          },
          {
            from: new Date(2018, 7),
            title: "Name",
            description:
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum architecto dolor, vitae magnam voluptate accusantium assumenda numquam error mollitia, officia facere consequuntur reprehenderit cum voluptates, ea tempore beatae unde."
          },
          {
            from: new Date(2016, 1),
            title: "Name",
            description:
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum architecto dolor, vitae magnam voluptate accusantium assumenda numquam error mollitia, officia facere consequuntur reprehenderit cum voluptates, ea tempore beatae unde."
          },
          {
            from: new Date(2016, 6),
            title: "Name",
            description:
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum architecto dolor, vitae magnam voluptate accusantium assumenda numquam error mollitia, officia facere consequuntur reprehenderit cum voluptates, ea tempore beatae unde."
          },
          {
            from: new Date(2013, 1),
            title: "Name",
            description:
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum architecto dolor, vitae magnam voluptate accusantium assumenda numquam error mollitia, officia facere consequuntur reprehenderit cum voluptates, ea tempore beatae unde."
          },
          {
            from: new Date(2015, 1),
            title: "Name",
            description:
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum architecto dolor, vitae magnam voluptate accusantium assumenda numquam error mollitia, officia facere consequuntur reprehenderit cum voluptates, ea tempore beatae unde."
          },
          {
            from: new Date(2012, 1),
            title: "Name",
            description:
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum architecto dolor, vitae magnam voluptate accusantium assumenda numquam error mollitia, officia facere consequuntur reprehenderit cum voluptates, ea tempore beatae unde."
          }
        ]
      })
    }
</script>