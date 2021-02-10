<template>
  <section class="container home blue lighten-3">
    <StateCardComponent />
    <StateCardComponent />
    <StateCardComponent />
  </section>
</template>

<script>
import StateCardComponent from "./Home/StateCardComponent.vue";

export default {
  components: { StateCardComponent },
  name: "HomeComponent",
};
</script>

<style lang="scss" scoped>
@import "../../sass/variables";

.home {
  .container__title {
    color: $red;
  }
  .container__button {
    background: $blue;
  }
}
</style>
