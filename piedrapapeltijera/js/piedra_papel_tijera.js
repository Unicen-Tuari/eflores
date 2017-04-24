"use strict";

const piedra = 1;
const papel = 2;
const tijera = 3;
const ganadasjugador = document.getElementById('ganadasjugador');
const ganadasmaquina = document.getElementById('ganadasmaquina');
const checkbox = document.getElementById('check');
let imagencomp = document.getElementById("maquina");
let resultado = document.getElementById("resultado");
let imagenjug = document.getElementById("jugador");
let seleccion = document.getElementById("seleccion");
let selec_maquina = 0;
let ptsjugador = 0;
let ptsmaquina = 0;

function selec_random(max) {
  return Math.floor(Math.random()*max + 1);
}

function seleccion_de_la_maquina() {
  if (valor_selec() != 0) { // is para seleccion con texto //
    if (!checkbox.checked) {
      selec_maquina = selec_random(3);
      imagencomp.src = "imagenes/d"+selec_maquina+".png"
    } /*else {  // Aleatorio en piedra y papel //
      selec_maquina = selec_random(2);
      imagencomp.src = "imagenes/d"+selec_maquina+".png"
    }*/
  }
}

function felicitar() {
  if ((ptsjugador >= 3) && ((ptsjugador % 3) == 0)) {
    alert("Felicitaciones has ganado "+ptsjugador+" veces");
  }
}

function ganador(selec_jugador) {
  if (((selec_jugador == piedra) && (selec_maquina == tijera)) || ((selec_jugador == tijera) && (selec_maquina == piedra))) {
    if (selec_jugador == piedra) {
      resultado.src = "imagenes/ganaste.png"
      document.body.style.backgroundColor = "#D0F5A9";
      ptsjugador += 1;
      felicitar();
    } else {
      resultado.src = "imagenes/perdiste.png"
      document.body.style.backgroundColor = "##F5A9A9";
      ptsmaquina += 1;
    }
  } else {
    if (selec_jugador > selec_maquina) {
      resultado.src = "imagenes/ganaste.png"
      document.body.style.backgroundColor = "#D0F5A9";
      ptsjugador += 1;
      felicitar();
    } else {
      if (selec_jugador < selec_maquina) {
        resultado.src = "imagenes/perdiste.png"
        document.body.style.backgroundColor = "#F5A9A9";
        ptsmaquina += 1;
      }else{
        resultado.src = "imagenes/nada.png"
        document.body.style.backgroundColor = "#A9F5F2";
      }
    }
  }
  ganadasjugador.innerHTML = ptsjugador;
  ganadasmaquina.innerHTML = ptsmaquina;
}

function va_ganando() {
  if (ptsjugador > ptsmaquina) {
    ganadasjugador.style.color = "#45c71a";
    ganadasmaquina.style.color = "#bc1430";
  } else {
    if (ptsjugador < ptsmaquina) {
      ganadasjugador.style.color = "#bc1430";
      ganadasmaquina.style.color = "#45c71a";
    } else {
      ganadasjugador.style.color = "blue";
      ganadasmaquina.style.color = "blue";
    }
  }
}

function selec_jugador(selec_jugador) {
  imagenjug.src = "imagenes/i"+selec_jugador+".png"
  ganador(selec_jugador);
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

//----------------------------------------------------------------------------//
// Seleccion con texto //
function valor_selec() {
  if (seleccion.value == "piedra") {
    return piedra;
  } else {
    if (seleccion.value == "papel") {
      return papel;
    } else {
      if (seleccion.value == "tijera") {
        return tijera;
      } else {
        return 0;
      }
    }
  }
}

function text_selec() {
  if (valor_selec() != 0) {
    selec_jugador(valor_selec());
  } else {
    alert("Valor no valido, elige (piedra, papel o tijera)");
  }
}

let elegirBtm = document.getElementById('elegir');
elegirBtm.addEventListener("click", seleccion_de_la_maquina);
elegirBtm.addEventListener("click", function(){ text_selec()});
