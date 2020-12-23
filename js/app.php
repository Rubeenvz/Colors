<script>
  var app = new Vue({
    el: '#app',
    store,
    data: function() {
      return {
        message: 'Hello world!!!'
      }
    },
    computed: {
      ...Vuex.mapState(['colors', 'totalPages']),
      currentPage: {
        get() {
          return this.$store.state.currentPage
        },
        set(value) {
          this.$store.commit('setCurrentPage', value)
          store.dispatch('getColors')
        }
      },
    },
    mounted: function() {
      store.dispatch('getColors')
    }
  })
</script>