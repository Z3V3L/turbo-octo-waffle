/* --------------------
    Arrays asociativos
   --------------------  */

    document.write(`<h2>Arrays asociativos</h2>`);

let miPC = ["ZevelPC", "Ryzen 5", "16GB", "950GB"];
document.write(miPC + `<br><br>`);
document.write(miPC[0] + `<br>`);
document.write(miPC[1] + `<br>`);
document.write(miPC[2] + `<br><br>`);

let miPC2 = {
    nombre: 'ZevelPC',
    procesador: 'Ryzen 5',
    ram: '16GB',
    espacio: '950GB'
};
document.write(miPC2 + `<br><br>`);
document.write(miPC2['nombre'] + `<br>`);
document.write(miPC2['procesador'] + `<br>`);
document.write(miPC2['ram'] + `<br>`);


/* --------------------
    Bucles e iteración
   --------------------  */

    document.write(`<br><h2>Bucles e iteración</h2>`);



/* ----- While ----- */

document.write(`<h3>While</h3>`);

let numero = 0;

while( numero < 9 ) {
    numero++;
    document.write(numero + `<br>`);
}

document.write("<br>");

//Imprime el número actual porque hace(do) antes de verificar la condición, sin importar cual sea.
do {
    document.write(numero + `<br>`);
    numero++;    
} 

while( numero < 9); 



/* ----- Break ----- */

document.write(`<br><h3>Break</h3>`);

let numero1 = 0;

while( numero1 < 100 ) {
    numero1++;
    document.write(numero1);
    if (numero1 == 10) {
        break;
    }
}



//Bucles finitos o determinados


/* ----- For ----- */

document.write(`<br><h3>For</h3>`);

for( let i = 0 ; i < 10 ; i++ ) {
    document.write(i + "<br>");
}



/* ----- Continue ----- */

document.write(`<br><h3>Continue</h3>`);

//En 'Continue' a diferencia del 'Break', finaliza la operación pero no termina el ciclo, si no que continúa saltandose lo que elegiste.

for( let i = 10 ; i > 0 ; i-- ) {
    if( i == 6 ) {
        continue;
    }
    document.write(i + `<br>`);
}



/* ----- For in ----- */

document.write(`<br><h3>For in</h3>`);

let animales = ["gato", "perro", "tiranosaurio rex"];

for(animal in animales) {
    document.write(animal + "<br>");
}

for(x in animales) {
    document.write(animales[x] + "<br>");
}



/* ----- For of ----- */

document.write(`<br><h3>For of</h3>`);