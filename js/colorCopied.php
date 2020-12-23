<script>
  Vue.component('color-copied', {
    template: `
    <div v-if="isVisible" class="color-copied__container" :style="{background: colorCopied ? colorCopied.color : ''}">
      <div class="d-flex flex-row justify-content-center align-items-center w-100 h-100">
        <div class="text-center text-white">
          <h1 class="text-capitalize">{{colorCopied.name}}</h1>
          <h1>{{colorCopied.color}}</h1>
          <h2 class="mt-5">¡Copiado!</h2>
        </div>
      </div>
    </div>
    `,
    props: ['data'],
    data: function() {
      return {
        isVisible: false
      }
    },
    watch: {
      isVisible(){
        if(this.isVisible) {
          setTimeout(() => { this.isVisible = false }, 1500);
        }
      }
    },
    computed: {
      ...Vuex.mapState(['colorCopied'])
    },
    methods: {
      show() {
        this.isVisible = true
      }
    }
  })
</script>