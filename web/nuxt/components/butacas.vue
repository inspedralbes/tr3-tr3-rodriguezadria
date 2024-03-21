<template>
    <div>
      <h2>Selecciona tus butacas</h2>
      <div class="screen"></div>
      <div class="cinema-seats">
        <img 
          v-for="butaca in butacas" 
          :key="butaca.id" 
          :src="getButacaImage(butaca.status)"
          @click="toggleButacaStatus(butaca)"
          :id="'butaca_' + butaca.id"
        >
      </div>
      <h1 class="screen-title">PANTALLA</h1>
      <div class="screen"></div>
    </div>
  </template>
  
  <script>
  import { compraStore } from '../stores/compra.js'
  
  export default defineComponent({
    setup() {
      const butacasStore = useButacasStore();
  
      const { butacas } = butacasStore;
  
      const toggleButacaStatus = (butaca) => {
        if (butaca.status === 'available') {
          butacasStore.selectButaca(butaca);
        } else if (butaca.status === 'selected') {
          butacasStore.deselectButaca(butaca);
        }
      };
  
      const getButacaImage = (status) => {
        switch (status) {
          case 'selected':
            return '/.jpg';
          case 'ocupado':
            return '/.jpg';
          default:
            return '/.png';
        }
      };
  
      return { butacas, toggleButacaStatus, getButacaImage };
    }
  });
  </script>
  
  <style scoped>
  /* Estilos CSS específicos del componente */
  .cinema-seats {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 0 auto; /* Centrar el contenedor */
    max-width: 900px; /* Ancho máximo para dejar espacio en los lados */
  }
  
  .cinema-seats img {
    margin: 5px;
    width: 50px; /* Ajusta el tamaño de la imagen según sea necesario */
  }
  
  .screen {
    border-top: 2px solid black; /* Línea simulando la pantalla */
    width: 100%; /* Ancho total */
    margin-bottom: 10px; /* Espacio entre la pantalla y las butacas */
  }
  
  .screen-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 10px;
  }
  </style>
  