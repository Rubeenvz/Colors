<div class="row justify-content-center pb-5">
  <div class="col-lg-8">
      <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center mb-0">
        <li class="page-item"><button @click="currentPage = currentPage - 1" class="page-link" :style="{color: currentColor}">Anterior</button></li>
        <li class="page-item" v-for="n in totalPages" :key="'pagination__'+n" :class="{active: n === currentPage}"><button @click="currentPage = n" class="page-link" :style="{color: currentColor}">{{n}}</button></li>
        <li class="page-item"><button @click="currentPage = currentPage + 1" class="page-link" :style="{color: currentColor}">Siguiente</button></li>
      </ul>
    </nav>
    <div class="text-center mt-3">
      <label class="mr-2" for="results">Resultados por pagina:</label>
      <select name="results" v-model="totalResults">
        <option v-for="n in 12" :key="'pagination-select__'+n" :value="n">{{n}}</option>
      </select>
    </div>
  </div>
</div>