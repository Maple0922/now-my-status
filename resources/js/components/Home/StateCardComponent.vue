<template>
  <div>
    <v-card
      class="mx-auto mb-4"
      max-width="400"
      v-for="(state, key) in states"
      :key="key"
    >
      <StateTitleComponent :updated="state.updated_at" :name="state.name" />
      <StateSelectComponent :stateNum="state.state" />
      <StateSliderComponent :feel="state.feel" />
      <StateTextComponent :message="state.message" />
      <StateButtonsComponent :id="state.id" />
    </v-card>
  </div>
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
  data: () => ({
    states: [],
  }),
  methods: {
    getStates() {
      axios.get("/api/states").then((res) => {
        this.states = res.data;
      });
    },
    // deleteState(id) {
    //   axios.delete("/api/state/" + id).then((res) => {
    //     this.getStates();
    //   });
    // },
  },
  mounted() {
    this.getStates();
  },
};
</script>
