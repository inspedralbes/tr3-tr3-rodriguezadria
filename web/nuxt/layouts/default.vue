<template>
    <div>
      <header class="cine_header">
        <nav class="cine_menu">
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

  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .cine_header {
    background-color: #333;
    color: #fff;
    width: 100vw;
    padding: 40px;
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
  