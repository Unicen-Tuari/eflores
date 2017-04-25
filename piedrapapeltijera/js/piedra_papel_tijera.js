"use strict";
//seleccionandolo de una lista
//Si la anterior fue tijera cambia siempre a piedra, sino elige al azar entre las tres con igual probabilidad.
//Cada partida se inserta en una tabla con las columnas “número de partida” y “ganador” (computadora/humano).

const piedra = 1;
const papel = 2;
const tijera = 3;
const ganadasjugador = document.getElementById('ganadasjugador');
const ganadascomputadora = document.getElementById('ganadasmaquina');
const cambiar_probabilidad = document.getElementById('check');
let imagencomp = document.getElementById("maquina");
let resultado = document.getElementById("resultado");
let imagenjug = document.getElementById("jugador");
let seleccion = document.getElementById("seleccion");
let selec_computadora = 0;
let ptsjugador = 0;
let ptscomputadora = 0;

function seleccion_de_la_comptadora(opciones) {
  selec_computadora = Math.floor(Math.random()*opciones + 1);
  imagencomp.src = "imagenes/d"+selec_computadora+".png"
}

function jugada_computadora() {
  if (!cambiar_probabilidad.checked) {
    seleccion_de_la_comptadora(3);
    } else {
      let opciones = ((selec_computadora != 0) && (selec_computadora == tijera)) ? 2 : 3;
      seleccion_de_la_comptadora(opciones);
  }    
}

function ganador(selec_jugador) {
  if (((selec_jugador == piedra) && (selec_computadora == tijera)) || ((selec_jugador == tijera) && (selec_maquina == piedra))) {
    if (selec_jugador == piedra) {
      resultado.src = "imagenes/ganaste.png"
      ptsjugador += 1;
    } else {
      resultado.src = "imagenes/perdiste.png"
      ptscomputadora += 1;
    }
  } else {
    if (selec_jugador > selec_computadora) {
      resultado.src = "imagenes/ganaste.png"
      ptsjugador += 1;
    } else {
      if (selec_jugador < selec_computadora) {
        resultado.src = "imagenes/perdiste.png"
        ptscomputadora += 1;
      }else{
        resultado.src = "imagenes/nada.png"
      }
    }
  }
  ganadasjugador.innerHTML = ptsjugador;
  ganadasmaquina.innerHTML = ptscomputadora;
}

function va_ganando() {
  if (ptsjugador > ptscomputadora) {
    ganadasjugador.style.color = "#45c71a";
    ganadascomputadora.style.color = "#bc1430";
  } else {
    if (ptsjugador < ptsmaquina) {
      ganadasjugador.style.color = "#bc1430";
      ganadascomputadora.style.color = "#45c71a";
    } else {
      ganadasjugador.style.color = "blue";
      ganadascomputadora.style.color = "blue";
    }
  }
}

function selec_jugador(selec_jugador) {
  imagenjug.src = "imagenes/i"+selec_jugador+".png"
  ganador(selec_jugador);
  va_ganando();
}

let piedraBtm = document.getElementById('piedra');
piedraBtm.addEventListener("click", jugada_computadora);
piedraBtm.addEventListener("click", function(){ selec_jugador(piedra);});

let papelBtm = document.getElementById('papel');
papelBtm.addEventListener("click", jugada_computadora);
papelBtm.addEventListener("click", function(){ selec_jugador(papel);});

let tijeraBtm = document.getElementById('tijera');
tijeraBtm.addEventListener("click", jugada_computadora);
tijeraBtm.addEventListener("click", function(){ selec_jugador(tijera);});