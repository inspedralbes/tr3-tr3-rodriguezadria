<template>
    <div class="movie-container">
      <h1>Películas</h1>
      <div class="card-container">
        <div v-for="movie in movies" class="card">
          <div class="card-image">
            <img :src="movie.enlace_imagen" alt="Imagen de la película">
          </div>
          <div class="card-content">
            <h2>{{ movie.titulo }}</h2>
            <p><strong>Director:</strong> {{ movie.director }}</p>
            <p><strong>Fecha de lanzamiento:</strong> {{ movie.release_date }}</p>
            <p><strong>Duración:</strong> {{ movie.duracion }} minutos</p>
            <p>{{ movie.descripcion }}</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        movies: []
      };
    },
    mounted() {
      this.fetchMovies();
    },
    methods: {
      async fetchMovies() {
        try {
          const response = await fetch('http://localhost:8000/api/pelis');
          if (!response.ok) {
            throw new Error('Error al obtener las películas');
          }
          const data = await response.json();
          this.movies = data;
        } catch (error) {
          console.error(error);
        }
      }
    }
  };
  </script>
  
  <style scoped>
  .movie-container {
    margin: 0 auto;
    padding: 40px;
  }
  
  .card-container {
    display: flex;
    gap: 40px;
  }
  
  .card {
    width: 300px;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
  }
  
  .card-image img {
    width: 100%;
    height: auto;
  }
  
  .card-content {
    padding: 20px;
  }
  
  .card-content h2 {
    margin-top: 0;
  }
  
  .card-content p {
    margin: 5px 0;
  }
  </style>
  