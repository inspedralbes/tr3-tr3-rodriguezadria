<template>
  <div>
    <header class="cine-header">
      <nav class="cine-menu">
        <ul>
          <li><nuxt-link to="/">Home</nuxt-link></li>
          <li><nuxt-link to="/pelicules">Películas</nuxt-link></li>
          <li><nuxt-link to="/sessions">Sesión del Día</nuxt-link></li>
        </ul>
      </nav>
    </header>
    <slot />
  </div>
</template>

<script>
</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.cine-header {
  background-color: #333;
  color: #fff;
  width: 100vw;
  padding: 40px;
}

.cine-menu {
  text-align: center;
}

.cine-menu ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.cine-menu ul li {
  display: inline;
  margin-right: 20px;
}

.cine-menu ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 18px;
  font-weight: bold;
}

.cine-menu ul li a:hover {
  text-decoration: underline;
}
</style>
