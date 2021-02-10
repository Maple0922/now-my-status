<template>
  <v-card class="mx-auto mb-4" max-width="400">
    <EditTitleComponent />
    <EditSelectComponent />
    <EditSliderComponent />
    <EditTextComponent />
    <EditButtonsComponent />
  </v-card>
</template>

<script>
import EditTitleComponent from "./StateEdit/EditTitleComponent";
import EditSliderComponent from "./StateEdit/EditSliderComponent";
import EditSelectComponent from "./StateEdit/EditSelectComponent";
import EditTextComponent from "./StateEdit/EditTextComponent";
import EditButtonsComponent from "./StateEdit/EditButtonsComponent";

export default {
  name: "StateEditComponent",
  components: {
    EditTitleComponent,
    EditSliderComponent,
    EditSelectComponent,
    EditTextComponent,
    EditButtonsComponent,
  },
};
</script>
