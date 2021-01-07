/*
    Tenemos una lista de precios. tres personas van a ingresar la cantidad de dinero que tienen y el programa debe regresar el helado más caro; si es más de uno, mostrar ambos. De paso mostrar el cambio.
*/

let limon       =   14;
let chocolate   =   15;
let vainilla    =   15;
let fresa       =   15;
let napolitano  =   18;
let chocomenta  =   18;
let oreo        =   18;
let gansito     =   20;

let persona1 = prompt(`Nombre:`);
let valor1 = prompt(`Hola ` + persona1 + `, bienvenido a la heladería chalco. Por favor ingresa el monto que desees para mostrarte la opción más adecuada.`);

if(valor1 < limon) {

    document.write('Por el momento no tenemos algúna opción adecuada para ti, disculpa por las molestias.');
} else if(valor1 >= limon  &&  valor1 < chocolate) {

    document.write('Le recomendamos el helado de limon, natural y delicioso');

    if(valor1 != limon) {
        let cambio = valor1 - limon;
        document.write(`<br><br>Su cambio es: $` + cambio);
    }
    
} else if(valor1 >= vainilla  &&  valor1 < napolitano) {

    document.write('Le recomendamos los helados de chocolate, vainilla y fresa, clásicos e irresistibles.');
    
    if(valor1 != limon) {
        let cambio = valor1 - limon;
        document.write(`<br><br>Su cambio es: $` + cambio);
    }
} else if(valor1 >= chocomenta && valor1 < gansito) {

    document.write('Le recomendamos los helados de napolitano, chocomenta y oreo, elaborados con productos de la mejor calidad.');
    
    if(valor1 != limon) {
        let cambio = valor1 - limon;
        document.write(`<br><br>Su cambio es: $` + cambio);
    }
} else {

    document.write('Le recomendamos el helado de gansito, nuestro mejor y más divertido sabor');
    
    if(valor1 != limon) {
        let cambio = valor1 - limon;
        document.write(`<br><br>Su cambio es: $` + cambio);
    }
}
