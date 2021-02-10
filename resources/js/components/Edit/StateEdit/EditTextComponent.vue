<template>
  <v-col cols="12" class="py-0">
    <v-subheader class="pl-0">ひとこと</v-subheader>
    <v-textarea
      solo
      name="message"
      :value="nowMessage"
      label="Enter some message!"
      class="bg-grey"
      @input="updateChildText"
    ></v-textarea>
  </v-col>
</template>

<script>
export default {
  name: "EditTextComponent",
  props: ["nowMessage"],
  data: () => ({
    message: "",
  }),
  methods: {
    updateChildText(text) {
      this.$emit("updateChildText", text);
    },
  },
};
</script>
