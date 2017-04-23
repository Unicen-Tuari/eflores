"use strict";

const piedra = 1;
const papel = 2;
const tijera = 3;
const ganadasjugador = document.getElementById('ganadasjugador');
const ganadasmaquina = document.getElementById('ganadasmaquina');
const checkbox = document.getElementById('corte');
let imagencomp = document.getElementById("maquina");
let resultado = document.getElementById("resultado");
let imagenjug = document.getElementById("jugador");
let selec_maquina = 0;
let ptsjugador = 0;
let ptsmaquina = 0;

function seleccion_de_la_maquina() {
  if (!checkbox.checked) {
    selec_maquina = Math.floor(Math.random()*3 + 1);
    imagencomp.src = "imagenes/d"+selec_maquina+".png"
  }
}

function ganador(selec_jugador) {
  if (((selec_jugador == piedra) && (selec_maquina == tijera)) || ((selec_jugador == tijera) && (selec_maquina == piedra))) {
    if (selec_jugador == piedra) {
      resultado.src = "imagenes/ganaste.jpg"
      ptsjugador += 1;
    } else {
      resultado.src = "imagenes/perdiste.jpg"
      ptsmaquina += 1;
    }
  } else {
    if (selec_jugador > selec_maquina) {
      resultado.src = "imagenes/ganaste.jpg"
      ptsjugador += 1;
    } else {
      if (selec_jugador < selec_maquina) {
        resultado.src = "imagenes/perdiste.jpg"
        ptsmaquina += 1;
      }else{
        resultado.src = "imagenes/nada.png"
      }
    }
  }
}

function va_ganando() {
  if (ptsjugador > ptsmaquina) {
    ganadasjugador.style.color = "green";
    ganadasmaquina.style.color = "red";
  } else {
    if (ptsjugador < ptsmaquina) {
      ganadasjugador.style.color = "red";
      ganadasmaquina.style.color = "green";
    } else {
      ganadasjugador.style.color = "blue";
      ganadasmaquina.style.color = "blue";
    }
  }
}

function selec_jugador(selec_jugador) {
  imagenjug.src = "imagenes/i"+selec_jugador+".png"
  ganador(selec_jugador);
  ganadasjugador.innerHTML = ptsjugador;
  ganadasmaquina.innerHTML = ptsmaquina;
  va_ganando();
}

let piedraBtm = document.getElementById('piedra');
piedraBtm.addEventListener("click", seleccion_de_la_maquina);
piedraBtm.addEventListener("click", function(){ selec_jugador(piedra);});

let papelBtm = document.getElementById('papel');
papelBtm.addEventListener("click", seleccion_de_la_maquina);
papelBtm.addEventListener("click", function(){ selec_jugador(papel);});

let tijeraBtm = document.getElementById('tijera');
tijeraBtm.addEventListener("click", seleccion_de_la_maquina);
tijeraBtm.addEventListener("click", function(){ selec_jugador(tijera);});
