<template>
  <v-card class="mx-auto" max-width="400">
    <v-card-title class="font-weight-bold"
      >Futo Nakajima<span class="font-weight-regular d-inline-block ml-2">
        のstate</span
      ></v-card-title
    >
    <v-card-subtitle class="pb-0"
      >Last updated: 2021-02-01 19:36</v-card-subtitle
    >
    <StateSliderComponent :feel="5" />
    <StateSelectComponent :stateNum="2" />
    <StateTextComponent :message="'wowowow'" />
    <StateButtonsComponent />
  </v-card>
</template>

<script>
import StateSliderComponent from "./StateCard/StateSliderComponent";
import StateSelectComponent from "./StateCard/StateSelectComponent";
import StateTextComponent from "./StateCard/StateTextComponent";
import StateButtonsComponent from "./StateCard/StateButtonsComponent";

export default {
  name: "StateCardComponent",
  components: {
    StateSliderComponent,
    StateSelectComponent,
    StateTextComponent,
    StateButtonsComponent,
  },
};
</script>
