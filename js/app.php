<script>
  var app = new Vue({
    el: '#app',
    store,
    computed: {
      ...Vuex.mapState(['colors', 'totalPages', 'currentColor']),
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