<template>
  <v-col cols="12" class="py-0">
    <v-subheader class="pl-0">元気</v-subheader>
    <v-slider
      v-model="slider"
      :thumb-size="24"
      thumb-label="always"
      min="1"
      max="9"
    >
      <template v-slot:prepend>
        <p style="font-size: 24px">{{ satisfactionEmojis[slider - 1] }}</p>
      </template>
    </v-slider>
  </v-col>
</template>

<script>
export default {
  name: "EditSliderComponent",
  data: () => ({
    satisfactionEmojis: ["😭", "😢", "☹️", "😐", "🙂", "😊", "😁", "😄", "😍"],
    slider: 1,
  }),
  // computed: {
  //   slider() {
  //     return this.feel;
  //   },
  // },
};
</script>

<style lang="scss" scoped>
</style>>
