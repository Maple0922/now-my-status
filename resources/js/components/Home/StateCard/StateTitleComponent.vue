<template>
  <v-container class="ma-0 pa-0 pb-5">
    <v-card-title class="font-weight-bold"
      >{{ name
      }}<span class="font-weight-regular d-inline-block ml-2">
        のstate</span
      ></v-card-title
    >
    <v-card-subtitle class="pb-0">Last updated: {{ updated }}</v-card-subtitle>
  </v-container>
</template>

<script>
export default {
  name: "StateTitleComponent",
  props: ["updated", "name"],
};
</script>
