<template>
  <v-card class="mx-auto mb-4" max-width="400">
    <EditTitleComponent :name="state.name" />
    <EditSelectComponent
      :nowState="state.state"
      @updateChildSelect="updateSelect"
    />
    <EditSliderComponent
      :nowFeel="state.feel"
      @updateChildSlider="updateSlider"
    />
    <EditTextComponent
      :nowMessage="state.message"
      @updateChildText="updateText"
    />
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
        console.log(this.state);
      });
    },
    updateSelect(select) {
      this.state.state = select;
      this.debug();
    },
    updateSlider(slider) {
      this.state.feel = slider;
      this.debug();
    },
    updateText(text) {
      this.state.message = text;
      this.debug();
    },
    debug() {
      console.log(`id:${this.state.id}`);
      console.log(`name:${this.state.name}`);
      console.log(`select:${this.state.state}`);
      console.log(`slider:${this.state.feel}`);
      console.log(`text:${this.state.message}`);
    },
  },
  mounted() {
    this.getState(this.id);
  },
};
</script>
