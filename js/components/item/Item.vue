<template>
  <div class="ui two column grid enavant">
    <div class="column">
      <div class="ui image">
        <img v-bind:src="article.image" alt="image">
        <span>{{ article.date | moment('LL') }}</span>
        <h4>{{ article.title }}</h4>
      </div>
    </div>
    <div class="column">
      <p><b>{{ article.descriptionShort | truncate(200) }}</b></p>
      <p>{{ article.description | truncate(450) }}</p>
    </div>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        article: []
      }
    },
    mounted () {
      this.$http.get('articles/0').then((response) => {
        this.article = response.data
      }, (response) => {
        console.log('fail', response)
      })
    }
  }
</script>
