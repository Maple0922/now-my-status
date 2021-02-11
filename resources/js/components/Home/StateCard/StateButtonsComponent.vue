<template>
  <v-container class="d-flex flex-row justify-end">
    <v-btn color="blue darken-4" dark :to="{ name: 'edit', params: { id: id } }"
      >Edit</v-btn
    >
    <!-- <v-btn color="red" dark :to="{ name: 'delete', params: { id: id } }"
      >Delete</v-btn
    > -->
  </v-container>
</template>

<script>
export default {
  name: "StateButtonsComponent",
  props: {
    id: Number,
  },
};
</script>
