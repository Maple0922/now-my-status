<template>
  <v-col class="d-flex align-center py-0" cols="8">
    <v-subheader class="pl-0" style="word-break: keep-all">状態</v-subheader>
    <p
      class="rounded-xl mb-0 state lighten-3 text-body-2"
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
      { id: 1, text: "🌙  睡眠中", color: "purple" },
      { id: 2, text: "☕️  休憩中", color: "green" },
      { id: 3, text: "🌴  外出中", color: "yellow" },
      { id: 4, text: "😞  絶望中", color: "red" },
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
  padding: 6px 8px;
}
</style>
