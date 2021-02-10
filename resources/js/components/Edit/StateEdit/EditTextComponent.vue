<template>
  <v-col cols="12" class="py-0">
    <v-subheader class="pl-0">ひとこと</v-subheader>
    <v-textarea
      solo
      name="message"
      v-model="message"
      label="Enter some message!"
      class="bg-grey"
    ></v-textarea>
  </v-col>
</template>

<script>
export default {
  name: "EditTextComponent",
  data: () => ({
    message: "",
  }),
};
</script>
