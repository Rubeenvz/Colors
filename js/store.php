<script>
  const store = new Vuex.Store({
    state: {
      colors: [],
      currentPage: 1,
      totalPages: null,
      currentColor: null,
    },
    mutations: {
      setColors(state, data) {
        state.colors = data
      },
      setCurrentPage(state, data) {
        state.currentPage = data
      },
      setTotalPages(state, data) {
        state.totalPages = data
      },
      setCurrentColor(state, data) {
        state.currentColor = data
      }
    },
    actions: {
      async getColors({ commit, state }) {
        try {
          const res = await axios.get(`https://reqres.in/api/colors/?page=${state.currentPage}`)
          if(res.status === 200) {
            commit('setColors', res.data)
            commit('setTotalPages', res.data.total_pages)
          }
        } catch (error) {
          console.log(error)
        }
      }
    }
  })
</script>