<template>
  <ul id="hexGrid">
    <li class="hex" v-for="photo in photos">
      <a class="hexIn" href="#">
        <img v-bind:src="photo.url" v-bind:alt="photo.title">
        <h1>{{ photo.title }}</h1>
        <p>{{ photo.description }}</p>
      </a>
    </li>
  </ul>
</template>

<script>
  export default {
    data () {
      return {
        photos: []
      }
    },
    mounted () {
      this.$http.get('photos?max=9').then((response) => {
        this.photos = response.data
      }, (response) => {
        console.log('fail', response)
      })
    }
  }
</script>