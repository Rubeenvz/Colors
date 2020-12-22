<script>
  var app = new Vue({
    el: '#app',
    store,
    data: {
      message: 'Hello world!!!'
    },
    computed: {
      ...Vuex.mapState(['colors']),
    },
    mounted: function () {
      store.dispatch('getColors')
    }
  })
</script>