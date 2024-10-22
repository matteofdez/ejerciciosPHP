//1.
var esaldia = "Santurtzi LHII ikastetxeko 3WAG2ko ikasleak oso langileak dira, nahiz eta batzutan oso berbati izan 😊";
var letraKopurua = esaldia.length;
document.getElementById("res_1").innerText = "Esaldiak " + letraKopurua + " letra ditu.";
//2.
var karakterea = esaldia.charAt(24);
document.getElementById("res_2").innerText = "25 karakterea " + karakterea + " da.";
//3.
var lehenengoD = esaldia.indexOf('d');
var azkenD = esaldia.lastIndexOf('d');
var bigarrenD = esaldia.indexOf('d', lehenengoD + 1);
document.getElementById("res_3").innerText = "Lehenengo D dago: " + lehenengoD + "-an, azkena: "+ azkenD+ "-an.";

if(esaldia.indexOf(-1)){
    document.getElementById("res_3_1").innerText = "Ez dago bigarren D-rik";
}else{
    document.getElementById("res_3_2").innerText = "Bigarren D: "+bigarrenD+"-an dago.";
}
//4
var nahizPosizioa = esaldia.indexOf('nahiz');
document.getElementById("res_4").innerText = "Nahiz hitza: " + nahizPosizioa + " posizioan dago.";
//5
var alperrakExists = esaldia.includes('Alperrak');
if(alperrakExists){
    document.getElementById("res_5_1").innerText = "Existitzen da.";
}else{
    document.getElementById("res_5_2").innerText = "Ez da existitzen.";
}
//6
var hastenDa = esaldia.startsWith('Santurtzi');
var amaitzenDa = esaldia.endsWith('izan 😊');
if(hastenDa){
    document.getElementById("res_6_1").innerText = "Hasten da.";
}else if(amaitzenDa){
    document.getElementById("res_6_2").innerText = "Amaitzen da.";
}else{
    document.getElementById("res_6_3").innerText = "Ez da amaitzen ezta hasten.";
}
//7
var esaldiaGehitua = esaldia + " 2050eko irailaren 18an";
document.getElementById("res_7").innerText = esaldiaGehitua;
//8
var erantzuna = esaldiaGehitua.slice(25, 35);
document.getElementById("res_8").innerText = erantzuna;
