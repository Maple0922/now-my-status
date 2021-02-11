<template>
  <v-col cols="12" class="py-0">
    <v-subheader class="pl-0">元気</v-subheader>
    <v-slider
      :thumb-size="28"
      thumb-label="always"
      min="1"
      max="9"
      :value="nowFeel"
      @change="updateChildSlider"
    >
      <template v-slot:prepend>
        <p style="font-size: 24px">{{ satisfactionEmojis[nowFeel - 1] }}</p>
      </template>
    </v-slider>
  </v-col>
</template>

<script>
export default {
  name: "EditSliderComponent",
  props: ["nowFeel"],
  data: () => ({
    satisfactionEmojis: ["😭", "😢", "☹️", "😐", "🙂", "😊", "😁", "😄", "😍"],
    slider: "",
  }),
  methods: {
    updateChildSlider(slider) {
      this.$emit("updateChildSlider", slider);
    },
  },
};
</script>
