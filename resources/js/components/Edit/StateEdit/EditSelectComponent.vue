<template>
  <v-col class="d-flex py-0" cols="8">
    <v-subheader class="pl-0" style="word-break: keep-all">状態</v-subheader>
    <v-select
      :items="items"
      item-text="text"
      item-value="id"
      :value="nowState"
      label="Select a state!"
      solo
      class="bg-grey"
      @change="updateChildSelect"
    ></v-select>
  </v-col>
</template>

<script>
export default {
  name: "EditSelectComponent",
  data: () => ({
    items: [],
    state: 0,
  }),
  props: ["nowState"],
  methods: {
    getItems() {
      axios.get("/api/items").then((res) => {
        this.items = res.data;
      });
    },
    updateChildSelect(select) {
      this.$emit("updateChildSelect", select);
    },
  },
  mounted() {
    this.getItems();
  },
};
</script>
