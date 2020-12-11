/* --------
    Prompt
   --------  */

    /*
    let nombre = prompt("name(?)");

    alert("Hola " + nombre);        //¡¡Concatenación!! :D
    */


/* ------------
    Operadores
   ------------  */

    /*
    let numero = 5;

    alert(numero--);//Da 5, porque hay que declarar la operación antes.

    alert(numero--);//Ahora da 4, y en el futuro alert sería 3, porque la operación la realiza luego de mostrar la alerta.

    numero1 = 10;

    numero2 = 3;

    potencia = numero1 ** numero2;

    alert(potencia);
    */


/* ---------------
    Concatenación
   ---------------  */

   let numero1 = 6;
   let numero2 = 8;

   //Para concatenar ambos en lugar de sumarlos se pone "" al principio para que sea detectado como un string.
   frase = `<br>` + numero1 + numero2;
   //frase = numero1.concat(numero2);       //También se puede usar .concat, pero se necesita que el "numero1" sea str.

   document.write(frase);

   let nombre = "Fernando";

   frase1 = `<br><br> Hola, soy ${nombre} y estoy programando`; //las (``) Backticks son las más versátiles para concatenar.
   document.write(frase1);