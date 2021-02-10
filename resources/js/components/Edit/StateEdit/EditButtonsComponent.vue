<template>
  <v-card-actions class="flex-row justify-end">
    <v-btn color="primary" @click="submitChild">Update</v-btn>
    <v-btn :to="{ name: 'home' }">Cancel</v-btn>
  </v-card-actions>
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
