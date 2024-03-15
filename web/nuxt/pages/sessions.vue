<template>
    <div>
      <h1>Sesiones de Películas</h1>
      <div v-if="sessions.length">
        <div v-for="session in sessions" :key="session.id">
          <h2>{{ session.movie ? session.movie.titulo : 'Película no encontrada' }}</h2>
          <img v-if="session.movie && session.movie.enlace_imagen" :src="session.movie.enlace_imagen" alt="Imagen de la película">
          <p>Fecha: {{ session.fecha }} - Hora: {{ session.hora }}</p>
        </div>
      </div>
      <div v-else>
        <p>No hay sesiones disponibles.</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        sessions: []
      };
    },
    mounted() {
      this.fetchSessions();
    },
    methods: {
      async fetchSessions() {
        try {
          const response = await fetch('http://localhost:8000/api/mostrar-session');
          if (!response.ok) {
            throw new Error('Error al obtener la sesión');
          }
          this.sessions = await response.json();
        } catch (error) {
          console.error(error);
        }
      }
    }
  };
  </script>
  
  <style scoped>
  /* Estilos opcionales */
  </style>
  