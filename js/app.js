import Vue from 'vue'
import VueResource from 'vue-resource'
import moment from 'moment'

import Item from './components/item/Item.vue'
import Items from './components/item/Items.vue'
import Hexagrid from './components/hexaGrid/Hexagrid.vue'

Vue.use(VueResource)
Vue.use(moment)

moment.locale('fr')

Vue.filter('moment', function (date, format) {
  return moment(date).format(format)
})

Vue.filter('truncate', function (text, stop, clamp) {
  if (!text || !text.length) { return }
  return text.slice(0, stop) + (stop < text.length ? clamp || '...' : '')
})

// A changer suivant le domaine
Vue.http.options.root = 'http://localhost:8888/api'

new Vue({
  el: '#app',
  components: {
    Item,
    Items,
    Hexagrid
  }
})
