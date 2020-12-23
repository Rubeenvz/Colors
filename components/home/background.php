<table class="home-background">
  <tbody>
  <tr v-for="n in 20" :style="{background: (n%2 == 0) ? 'var(--color2)' : 'var(--transparent)'}">
    <td></td>
  </tr>
  </tbody>
</table>