<template>
  <v-container class="home grey lighten-4 pb-0">
    <StateCardComponent />
  </v-container>
</template>

<script>
import StateCardComponent from "./Home/StateCardComponent.vue";

export default {
  components: { StateCardComponent },
  name: "HomeComponent",
};
</script>

<style lang="scss" scoped>
.grey {
  min-height: calc(100vh - 58px);
}
</style>
