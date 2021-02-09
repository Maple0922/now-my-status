<template>
  <v-col cols="12">
    <v-subheader class="pl-0">ひとこと</v-subheader>
    <v-textarea
      solo
      name="message"
      v-model="message"
      label="Enter some message!"
    ></v-textarea>
  </v-col>
</template>

<script>
export default {
  name: "EditTextComponent",
  message: "",
};
</script>

<style lang="scss" scoped>
</style>>
