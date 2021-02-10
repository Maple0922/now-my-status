<template>
  <v-container class="ma-0 pa-0">
    <v-card-title class="font-weight-bold"
      >{{ name
      }}<span class="font-weight-regular d-inline-block ml-2">
        のstate</span
      ></v-card-title
    >
  </v-container>
</template>

<script>
export default {
  name: "EditTitleComponent",
  props: ["name"],
};
</script>
