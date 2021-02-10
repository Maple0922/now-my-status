<template>
  <v-card-actions class="flex-row justify-end">
    <v-btn color="primary" @click="update">Update</v-btn>
    <v-btn :to="{ name: 'home' }">Cancel</v-btn>
  </v-card-actions>
</template>

<script>
export default {
  name: "StateButtonsComponent",
  props: ["id"],
  methods: {
    update: () => {
      if (confirm("更新してよろしいですか？")) {
        alert("Updated!!");
      }
    },
  },
  mounted() {
    console.log(typeof this.id);
  },
};
</script>
