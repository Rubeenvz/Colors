<script>
  const store = new Vuex.Store({
    state: {
      colors: []
    },
    mutations: {
      setColors (state, data) {
        state.colors = data
      }
    },
    actions: {
      async getColors({ commit, state }) {
        try {
          const res = await axios.get('https://reqres.in/api/colors')
          if(res.status === 200) {
            commit('setColors', res.data)
          }
        } catch (error) {
          console.log(error)
        }
      }
    }
  })

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