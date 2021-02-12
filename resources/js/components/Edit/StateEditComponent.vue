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
    <EditButtonsComponent :id="parseInt(id)" @submitChild="submit" />
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
    updateSelect(select) {
      this.state.state = select;
    },
    updateSlider(slider) {
      this.state.feel = slider;
    },
    updateText(text) {
      this.state.message = text;
    },
    submit() {
      axios.put("/api/states/" + this.id, this.state).then(() => {
        this.$router.push({ name: "home" });
      });
    },
  },
  mounted() {
    this.getState(this.id);
    // this.$nextTick(function () {
    //   this.$emit("endLoading");
    // });
    setTimeout(() => {
      this.$emit("endLoading");
    }, 1000);
  },
};
</script>
