<template>
  <v-col class="d-flex py-0" cols="8">
    <v-subheader class="pl-0" style="word-break: keep-all">状態</v-subheader>
    <v-select
      :items="items"
      item-text="text"
      item-value="id"
      v-model="state"
      label="Select a state!"
      solo
      class="bg-grey"
    ></v-select>
  </v-col>
</template>

<script>
export default {
  name: "EditSelectComponent",
  data: () => ({
    items: [
      { id: 0, text: "💻  仕事中" },
      { id: 1, text: "🌙  睡眠中" },
      { id: 2, text: "☕️  休憩中" },
      { id: 3, text: "🌴  外出中" },
      { id: 4, text: "😞  絶望中" },
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
