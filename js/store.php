<script>
  const store = new Vuex.Store({
    state: {
      colors: [],
      currentPage: 1,
      totalResults: 6,
      totalPages: null,
      currentColor: null,
      colorCopied: null
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
      },
      setTotalResults(state, data) {
        state.totalResults = data
      },
      setColorCopied(state, data) {
        state.colorCopied = data
      }
    },
    actions: {
      async getColors({ commit, state }) {
        commit('setColors', [])
        try {
          const res = await axios.get(`https://reqres.in/api/colors/?page=${state.currentPage}&per_page=${state.totalResults}`)
          if(res.status === 200) {
            commit('setColors', res.data.data)
            commit('setTotalPages', res.data.total_pages)
          }
        } catch (error) {
          console.log(error)
        }
      }
    }
  })
</script>