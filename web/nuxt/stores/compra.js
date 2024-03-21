<<<<<<< HEAD
import { defineStore } from 'pinia';

export const compraStore = defineStore('compra', {
  state: () => ({
    sessions: {},
    butacas: []
  })
});
=======
export const compraStore = defineStore('compra', ()=> {
    state: () => ({session: {}, butacas: [], IdUsuari: 0}) 
})
>>>>>>> 958e62c40b6aaa8480dd6316c2d4fdcb77466e3f
