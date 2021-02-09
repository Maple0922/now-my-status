<template>
  <header>
    <h1>Stateboard</h1>
  </header>
</template>

<script>
export default {
  name: "HeaderComponent",
};
</script>

<style lang="scss" scoped>
@import "../../sass/variables";

header {
  width: 100%;
  height: 60px;
  // background: $indigo;
  border-bottom: 1px solid $lightgray;
  // box-shadow: 1px 0 3px 0 $gray;
  display: flex;
  padding: 2px 24px 0;
  align-items: center;
  font-family: "Titillium Web", sans-serif;

  h1 {
    font-size: 24px;
    color: $black;
    margin: 0;
  }
}
</style>
