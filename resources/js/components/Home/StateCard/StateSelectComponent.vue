<template>
  <v-col class="d-flex align-center py-0" cols="8">
    <v-subheader class="pl-0" style="word-break: keep-all">状態</v-subheader>
    <p class="rounded-lg mb-0 state lighten-3 text-body-2" :class="item.color">
      {{ item.text }}
    </p>
  </v-col>
</template>

<script>
export default {
  name: "StateSelectComponent",
  data: () => ({
    item: {},
  }),
  props: ["stateNum"],
  methods: {
    getItem(id) {
      axios.get("/api/items/" + id).then((res) => {
        this.item = res.data;
      });
    },
  },
  mounted() {
    this.getItem(this.stateNum);
  },
};
</script>

<style lang="scss" scoped>
.state {
  padding: 6px 14px 6px 10px;
}
</style>
