<template>
  <v-container class="home grey lighten-3 pb-0">
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
  min-height: calc(100vh - 56px);
  position: relative;
  top: -80px;
}
</style>
