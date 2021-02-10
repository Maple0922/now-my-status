<template>
  <v-col class="d-flex align-center py-0" cols="8">
    <v-subheader class="pl-0" style="word-break: keep-all">状態</v-subheader>
    <p
      class="rounded-lg mb-0 state lighten-3 text-body-2"
      :class="items[nowStateId].color"
    >
      {{ items[nowStateId].text }}
    </p>
  </v-col>
</template>

<script>
export default {
  name: "StateSelectComponent",
  data: () => ({
    items: [
      { id: 0, text: "💻  仕事中", color: "blue" },
      { id: 1, text: "🛠  開発中", color: "grey" },
      { id: 2, text: "🌙  睡眠中", color: "purple" },
      { id: 3, text: "☕️  休憩中", color: "green" },
      { id: 4, text: "🍽  食事中", color: "orange" },
      { id: 5, text: "💦  多忙中", color: "cyan" },
      { id: 6, text: "🌴  外出中", color: "yellow" },
      { id: 7, text: "🙇‍♀️  生理中", color: "pink" },
      { id: 8, text: "😞  絶望中", color: "red" },
    ],
  }),
  props: ["stateNum"],
  computed: {
    nowStateId() {
      return this.items[this.stateNum].id;
    },
  },
};
</script>

<style lang="scss" scoped>
.state {
  padding: 6px 14px 6px 10px;
}
</style>
