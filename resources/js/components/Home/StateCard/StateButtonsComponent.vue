<template>
  <v-card-actions class="flex-row justify-end">
    <v-btn color="orange" dark :to="{ name: 'edit' }">Edit</v-btn>
  </v-card-actions>
</template>

<script>
export default {
  name: "StateButtonsComponent",
};
</script>
