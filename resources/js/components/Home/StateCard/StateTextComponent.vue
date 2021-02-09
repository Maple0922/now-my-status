<template>
  <v-col cols="12">
    <v-subheader class="pl-0">ひとこと</v-subheader>
    <v-textarea
      solo
      name="input-7-4"
      v-model="message"
      readonly
      label="Solo textarea"
    ></v-textarea>
  </v-col>
</template>

<script>
export default {
  name: "StateTextComponent",
  props: ["message"],
};
</script>

<style lang="scss" scoped>
</style>>
