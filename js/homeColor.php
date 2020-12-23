<script>
  Vue.component('home-color', {
    template: `
    <div class="card home-color__container" @mouseover="changeColor(data.color)" @mouseleave="changeColor()">
      <div class="home-color__view" :style="{background: data.color}"></div>
      <div class="card-header" :style="{background: data.color}">
      </div>
      <div class="card-body text-center">
        <h4 class="home-color__title">{{data.name}}</h4>
        <p class="home-color__color my-2" :style="{color: data.color}">Color: {{data.color}}</p>
        <div class="d-flex justify-content-between mt-2">
          <p class="mb-0">
            <span class="home-color__span" :style="{color: data.color}">
              <i class="fas fa-globe-americas"></i>
            </span>
            {{data.year}}
          </p>
          <p class="mb-0">
            <span class="home-color__span" :style="{color: data.color}">
              <i class="fas fa-heart"></i>
            </span>
            {{data.pantone_value}}
          </p>
        </div>
      </div>
    </div>
    `,
    props: ['data'],
    methods: {
      ...Vuex.mapMutations(['setCurrentColor']),
      changeColor(color) {
        if(color) {
          this.setCurrentColor(color)
          document.documentElement.style.setProperty('--color1', color)
          document.documentElement.style.setProperty('--color2', color+'33')
        }
        else {
          this.setCurrentColor(null)
          document.documentElement.style.setProperty('--color1', 'black')
          document.documentElement.style.setProperty('--color2', 'white')
        }
      }
    }
  })
</script>