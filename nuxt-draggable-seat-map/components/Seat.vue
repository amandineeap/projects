<template>  

    <rect
        :x="`${seat.x * 12}`"
        :y="`${seat.y * 12}`"
        width="10"
        height="10"
        rx="2"
    />

</template>

<script>
  export default {
    props: ['seat']
  }

</script>

<style type="text/css" scoped>
    svg rect {
        background-color: black;
    }
</style>