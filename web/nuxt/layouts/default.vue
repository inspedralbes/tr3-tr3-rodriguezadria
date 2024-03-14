<template>
    <div>
      <header class="cine-header">
        <nav class="cine-menu">
          <ul>
            <li><nuxt-link to="/">Home</nuxt-link></li>
            <li><nuxt-link to="/pelicules">Pe·licules</nuxt-link></li>
            <li><nuxt-link to="/sessions">Sessió del Dia</nuxt-link></li>
          </ul>
        </nav>
      </header>
      <slot />
    </div>
  </template>
  
  <script>
  </script>
  
  <style>
  /* Estilos para el menú de navegación */
  nav {
    background-color: #333;
    color: #fff;
    padding: 10px;
  }
  
  nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  
  nav ul li {
    display: inline;
    margin-right: 10px;
  }
  
  nav ul li a {
    color: #fff;
    text-decoration: none;
  }
  
  nav ul li a:hover {
    text-decoration: underline;
  }
  </style>
  