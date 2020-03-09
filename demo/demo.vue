<template>
    <h3 class="demo">
        {{ msg }}
    </h3>
</template>

<script>
export default {
  props: {
    testing: {
      required: false,
      default: "Its only for testing purposes",
      type: String
    }
  },

  data() {
    return {
      msg: "This is an example message"
    };
  },

  computed: {
    example() {
      return this.msg;
    }
  },

  created() {
    this.$emit("created");
  }
};
</script>