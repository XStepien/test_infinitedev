<template>
  <div class="ui two stackable cards">
    <div class="card" v-for="article in articles">
      <div class="ui image">
        <img v-bind:src="article.image" alt="image">
      </div>
      <div class="content">
        <div class="ui labels small meta">
          <div class="ui label">{{ article.date }}</div>
          <div class="ui label">{{ article.categorie }}</div>
        </div>
        <div class="header">{{ article.title }}</div>
        <div class="description">{{ article.description | truncate(100) }}
        </div>
      </div>
      <div class="content">
        <button class="btn btn-border-medium primary">LIRE PLUS</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      articles: []
    }
  },
  mounted () {
    this.$http.get('articles?start=1&max=2').then((response) => {
      this.articles = response.data
    }, (response) => {
      console.log('fail', response)
    })
  }
}
</script>