<template>
  <v-container class="orange lighten-3">
    <StateEditComponent />
  </v-container>
</template>

<script>
import StateEditComponent from "./Edit/StateEditComponent.vue";

export default {
  components: { StateEditComponent },
  name: "EditComponent",
};
</script>

<style lang="scss" scoped>
.orange {
  min-height: calc(100vh - 58px);
}
</style>
