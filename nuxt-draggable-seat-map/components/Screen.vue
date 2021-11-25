<template>  
    <svg
        :x="coordinates.x"
        :y="coordinates.y"
        :style="cursor"
        @mousedown="drag"
        @mouseup="drop"
    >
        <text x="20" y="35">{{screen.title}}</text>
        <Seat 
            v-for="(seat, index) in screen.seats"
            :key="index"
            :seat="seat"
        />
    </svg>
</template>

<script>
import Seat from '~/components/Seat.vue'

  export default {
    components: {
        Seat
    },
    props: ['screen'],
    data() {
      return {
        coordinates: {
            x: this.screen.rectangles[0].XCoordinate,
            y: this.screen.rectangles[0].YCoordinate,
        },
        dragOffsetX: null,
        dragOffsetY: null
      }
    },
    computed: {
        cursor() {
        return `cursor: ${this.dragOffsetX ? 'grabbing' : 'grab'}`
        },
    },
    methods: {
        drag({offsetX, offsetY}) {
            this.dragOffsetX = offsetX - this.coordinates.x;
            this.dragOffsetY = offsetY - this.coordinates.y;
            this.$parent.$refs.wrapper.addEventListener('mousemove', this.move)
        },
        drop() {
            this.dragOffsetX = this.dragOffsetY = null;
            this.$parent.$refs.wrapper.removeEventListener('mousemove', this.move)
            alert('save screen coordinates')
        },
        move({offsetX, offsetY}) {
            this.coordinates.x = offsetX - this.dragOffsetX;
            this.coordinates.y = offsetY - this.dragOffsetY;
        }
    }
  }

</script>