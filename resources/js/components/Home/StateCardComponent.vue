<template>
  <v-card class="mx-auto mb-4" max-width="400">
    <StateTitleComponent />
    <StateSelectComponent :stateNum="4" />
    <StateSliderComponent :feel="5" />
    <StateTextComponent :message="'今日はこんなことがありました'" />
    <StateButtonsComponent />
  </v-card>
</template>

<script>
import StateTitleComponent from "./StateCard/StateTitleComponent";
import StateSliderComponent from "./StateCard/StateSliderComponent";
import StateSelectComponent from "./StateCard/StateSelectComponent";
import StateTextComponent from "./StateCard/StateTextComponent";
import StateButtonsComponent from "./StateCard/StateButtonsComponent";

export default {
  name: "StateCardComponent",
  components: {
    StateTitleComponent,
    StateSliderComponent,
    StateSelectComponent,
    StateTextComponent,
    StateButtonsComponent,
  },
};
</script>
