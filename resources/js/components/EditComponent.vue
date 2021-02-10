<template>
  <v-container class="grey darken-4 pb-0">
    <StateEditComponent :id="id" />
  </v-container>
</template>

<script>
import StateEditComponent from "./Edit/StateEditComponent.vue";

export default {
  components: { StateEditComponent },
  name: "EditComponent",
  props: ["id"],
};
</script>

<style lang="scss" scoped>
.grey {
  min-height: calc(100vh - 58px);
}
</style>
