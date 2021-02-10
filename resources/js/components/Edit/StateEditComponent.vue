<template>
  <v-card class="mx-auto mb-4" max-width="400">
    <EditTitleComponent :name="state.name" />
    <EditSelectComponent />
    <EditSliderComponent />
    <EditTextComponent />
    <EditButtonsComponent :id="parseInt(id)" />
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
  data: () => ({
    state: {},
  }),
  props: ["id"],
  methods: {
    getState(id) {
      axios.get("/api/states/" + id).then((res) => {
        this.state = res.data;
      });
    },
  },
  mounted() {
    this.getState(this.id);
  },
};
</script>
