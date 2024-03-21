import { defineStore } from 'pinia';

export const compraStore = defineStore('compra', {
  state: () => ({
    sessions: {},
    butacas: [],
    IdUsuari: 0
  })
});
