<template>
  <v-app>
    <section class="container edit">
      <StateEditComponent />
    </section>
  </v-app>
</template>

<script>
import StateEditComponent from "./Edit/StateEditComponent.vue";

export default {
  components: { StateEditComponent },
  name: "EditComponent",
};
</script>

<style lang="scss" scoped>
@import "../../sass/variables";

.edit {
  .container__title {
    color: $blue;
  }
}
</style>
