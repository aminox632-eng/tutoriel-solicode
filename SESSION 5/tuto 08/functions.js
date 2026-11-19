function calculeMoyenne(notes){
let somme = 0
for(let i = 0;i<notes.length;i++){
    somme =+ notes[i];
}
return somme / notes.length;
}
let groupeA = [10,16,18]
let groupeB = [11,19,17,19]

console.log("Moyenne Groupe A : "+calculeMoyenne(groupeA));
console.log("Moyenne Groupe B : "+calculeMoyenne(groupeB));