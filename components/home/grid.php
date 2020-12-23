<div class="row justify-content-center">
  <div class="col-4 mb-4" v-for="(color,index) in colors" data-aos="fade-up" :data-aos-delay="index*100" :key="'color__'+index">
    <home-color :data="color"></home-color>
  </div>
</div>
