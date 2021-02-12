<template>
  <v-container class="d-flex flex-row justify-end">
    <v-btn class="mr-3" :color="'purple darken-4'" dark @click="submitChild"
      >Update</v-btn
    >
    <v-btn :to="{ name: 'home' }">Cancel</v-btn>
  </v-container>
</template>

<script>
export default {
  name: "StateButtonsComponent",
  props: ["id"],

  data: () => ({
    state: {},
  }),

  methods: {
    getState() {
      axios.get("/api/states/" + this.id).then((res) => {
        this.state = res.data;
      });
    },
    submitChild() {
      this.$emit("submitChild");
    },
  },
  mounted() {
    this.getState();
  },
};
</script>
