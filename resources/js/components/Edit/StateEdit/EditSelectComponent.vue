<template>
  <v-col class="d-flex" cols="8">
    <v-subheader class="pl-0" style="word-break: keep-all">状態</v-subheader>
    <v-select
      :items="items"
      v-model="state"
      label="Select a state!"
      solo
    ></v-select>
  </v-col>
</template>

<script>
export default {
  name: "EditSelectComponent",
  data: () => ({
    items: [
      "💻 　仕事中",
      "🌙 　睡眠中",
      "☕️ 　休憩中",
      "🌴 　外出中",
      "😞 　絶望中",
    ],
    state: 0,
  }),
  computed: {
    nowState() {
      return this.items[this.stateNum];
    },
  },
};
</script>

<style lang="scss" scoped>
</style>>
