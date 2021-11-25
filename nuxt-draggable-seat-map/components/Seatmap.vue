<template>
    <div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/3.1.1/svg.min.js" integrity="sha512-Aj0P6wguH3GVlCfbvTyMM90Zq886ePyMEYlZooRfx+3wcSYyUa6Uv4iAjoJ7yiWdKamqQzKp7yr/TkMQ8EEWbQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <svg id="mainSVG" ref="wrapper" xmlns="http://www.w3.org/2000/svg" width="2000" height="2000" >
            <Screen v-for="(screen, index) in screens"
                :key="index"
                :screen="screen"
            />
        </svg>
    </div>
</template>

<script>
import { seatmapOldVic }from '../store/seatmap'
import Screen from '~/components/Screen.vue'

  export default {
    components: {
        Screen
    },
    data() {
      return {
        screens: seatmapOldVic,
      }
    }
  }
</script>


<style type="text/css" scoped>
    svg {
        max-width: 100%;
    }
</style>