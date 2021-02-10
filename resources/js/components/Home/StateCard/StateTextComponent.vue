<template>
  <v-col cols="12" class="py-0">
    <v-subheader class="pl-0">ひとこと</v-subheader>
    <p class="rounded-lg grey lighten-4 message pa-3">{{ message }}</p>
  </v-col>
</template>

<script>
export default {
  name: "StateTextComponent",
  props: ["message"],
};
</script>
