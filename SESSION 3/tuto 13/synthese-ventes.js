let ventes = [110, 75, 150, 180, 90, 130, 100, 160];


let nombreVentes = ventes.length;
let somme = 0;
let max = ventes[0];
let min = ventes[0];

let nbExceptionnelles = 0;
let caExceptionnelles = 0;


for (let i = 0; i < ventes.length; i++) {

    let vente = ventes[i];

    somme = somme + vente;

    if (vente > max) {
        max = vente;
    }

    if (vente < min) {
        min = vente;
    }

    if (vente >= 130) {
        nbExceptionnelles++;
        caExceptionnelles += vente;
    }
}

console.log("Nombre de ventes :", nombreVentes);
console.log("CA Total :", somme);
console.log("Maximum :", max);
console.log("Minimum :", min);
console.log("Ventes exceptionnelles :", nbExceptionnelles);
console.log("CA exceptionnel :", caExceptionnelles);