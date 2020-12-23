<div class="row justify-content-center">
  <div class="col-lg-8">
      <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center mb-0">
        <li class="page-item"><button class="page-link">Anterior</button></li>
        <li class="page-item" v-for="n in totalPages" :key="'pagination__'+n" :class="{active: n === currentPage}"><button @click="currentPage = n" class="page-link">{{n}}</button></li>
        <li class="page-item"><button class="page-link">Siguiente</button></li>
      </ul>
    </nav>
  </div>
</div>