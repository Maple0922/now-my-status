<template>
  <v-col class="d-flex" cols="8">
    <v-subheader class="pl-0" style="word-break: keep-all">状態</v-subheader>
    <v-text-field v-model="nowState" solo readonly></v-text-field>
  </v-col>
</template>

<script>
export default {
  name: "StateSelectComponent",
  data: () => ({
    items: [
      "💻 　仕事中",
      "🌙 　睡眠中",
      "☕️ 　休憩中",
      "🌴 　外出中",
      "😞 　絶望中",
    ],
  }),
  props: ["stateNum"],
  computed: {
    nowState() {
      return this.items[this.stateNum];
    },
  },
};
</script>
