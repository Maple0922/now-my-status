<template>
  <v-card class="mx-auto" max-width="400">
    <v-card-title class="font-weight-black"
      >Futo Nakajima<span class="font-weight-regular d-inline-block ml-2">
        のstate</span
      ></v-card-title
    >
    <v-card-subtitle class="pb-0"
      >Last updated: 2021-02-01 19:36</v-card-subtitle
    >
    <EditSliderComponent />
    <EditSelectComponent />
    <EditTextComponent />
    <EditButtonsComponent />
  </v-card>
</template>

<script>
import EditSliderComponent from "./StateEdit/EditSliderComponent";
import EditSelectComponent from "./StateEdit/EditSelectComponent";
import EditTextComponent from "./StateEdit/EditTextComponent";
import EditButtonsComponent from "./StateEdit/EditButtonsComponent";

export default {
  name: "StateEditComponent",
  components: {
    EditSliderComponent,
    EditSelectComponent,
    EditTextComponent,
    EditButtonsComponent,
  },
};
</script>
