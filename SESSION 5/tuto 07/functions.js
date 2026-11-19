function calculerSurface(longueur , largeur){
return longueur * largeur;
}
function estGrand(surface){
    return surface >= 100;
}
let surfacepiece = calculerSurface(18,12);
let grandpiece = estGrand(surfacepiece)

console.log("Surface calculée : "+surfacepiece+"m²");
console.log("Grande pièce : "+grandpiece);