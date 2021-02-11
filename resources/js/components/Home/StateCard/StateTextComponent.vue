<template>
  <v-col cols="12" class="py-0">
    <v-subheader class="pl-0">ひとこと</v-subheader>
    <p class="rounded grey lighten-3 message pa-3 mb-0 text-body-2">
      {{ message }}
    </p>
  </v-col>
</template>

<script>
export default {
  name: "StateTextComponent",
  props: ["message"],
};
</script>
