<template>
  <v-container class="grey darken-3 pb-0">
    <StateEditComponent :id="id" v-show="!loading" @endLoading="stopLoading" />
    <VueLoading
      v-show="loading"
      type="beat"
      color="skyblue"
      :size="{ width: '50px', height: '50px' }"
    />
  </v-container>
</template>

<script>
import { VueLoading } from "vue-loading-template";

import StateEditComponent from "./Edit/StateEditComponent.vue";

export default {
  components: { StateEditComponent, VueLoading },
  name: "EditComponent",
  data: () => ({
    loading: true,
  }),
  props: ["id"],
  methods: {
    stopLoading() {
      this.loading = false;
    },
  },
};
</script>

<style lang="scss" scoped>
.grey {
  min-height: calc(100vh + 24px);
  margin-top: -60px;
}
</style>
