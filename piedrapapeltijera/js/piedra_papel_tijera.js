"use strict";
//seleccionandolo de una lista -- listo --
//Si la anterior fue tijera cambia siempre a piedra, sino elige al azar entre las tres con igual probabilidad -- listo --
//Cada partida se inserta en una tabla con las columnas “número de partida” y “ganador” (computadora/humano). -- listo --

const piedra = 1;
const papel = 2;
const tijera = 3;
const ganadasjugador = document.getElementById('ganadasjugador');
const ganadascomputadora = document.getElementById('ganadasmaquina');
const cambiar_probabilidad = document.getElementById('check');
let imagencomp = document.getElementById('computadora');
let resultado = document.getElementById('resultado');
let imagenjug = document.getElementById('jugador');
let seleccion = document.getElementById('seleccion');
let partidas = document.getElementById('partidas');
let selec_computadora = 0;
let ptsjugador = 0;
let ptscomputadora = 0;
let num_part = 0;
let jug_ganador;

function seleccion_de_la_comptadora(opciones) {
  selec_computadora = Math.floor(Math.random()*opciones + 1);
  imagencomp.src = "imagenes/d"+selec_computadora+".png"
}

function jugada_computadora() {
  if (!cambiar_probabilidad.checked) {
    seleccion_de_la_comptadora(3);
  } else {
    if (selec_computadora == tijera) {
      seleccion_de_la_comptadora(piedra);
    } else {
      seleccion_de_la_comptadora(3);
    }
  }
}

function result_partidas() {
  num_part++;
  let partida = partidas.insertRow(0);
  let num = partida.insertCell(0);
  let gan = partida.insertCell(1);
  num.innerHTML = num_part;
  gan.innerHTML = jug_ganador;
}

function ganador(selec_jugador) {
  if (((selec_jugador == piedra) && (selec_computadora == tijera)) || ((selec_jugador == tijera) && (selec_computadora == piedra))) {
    if (selec_jugador == piedra) {
      resultado.src = "imagenes/ganaste.png"
      ptsjugador += 1;
      jug_ganador = "humano";
    } else {
      resultado.src = "imagenes/perdiste.png"
      ptscomputadora += 1;
      jug_ganador = "computadora";
    }
  } else {
    if (selec_jugador > selec_computadora) {
      resultado.src = "imagenes/ganaste.png"
      ptsjugador += 1;
      jug_ganador = "humando";
    } else {
      if (selec_jugador < selec_computadora) {
        resultado.src = "imagenes/perdiste.png"
        ptscomputadora += 1;
        jug_ganador = "computadora";
      }else{
        resultado.src = "imagenes/nada.png"
        jug_ganador = " ";
      }
    }
  }
  ganadasjugador.innerHTML = ptsjugador;
  ganadasmaquina.innerHTML = ptscomputadora;
  result_partidas();
}

function va_ganando() {
  if (ptsjugador > ptscomputadora) {
    ganadasjugador.style.color = "#45c71a";
    ganadascomputadora.style.color = "#bc1430";
  } else {
    if (ptsjugador < ptscomputadora) {
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

function inicial() {
  imagenjug.src = "imagenes/i"+selec_inicial+".png"
  imagencomp.src = "imagenes/d"+selec_inicial+".png"
  selec_inicial = (selec_inicial == 3) ? 0 : +1;
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
