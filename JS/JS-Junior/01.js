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

    alert(numero); // Aquí da 3.

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

   frase1 = `<br><br> Hola, soy ${nombre} y estoy programando<br><br>`; //las (``) Backticks son las más versátiles para concatenar.
   document.write(frase1);


/* ------------
    Operadores
   ------------  */

   /*
   En Javascript tenemos operadores lógicos y de comparación, siendo los de comparación: 
        "==",       -Igual que  (No compara el tipo de dato)
        "===",      -Estrictamente igual que  (Sí compara el tipo de dato)
        "!=",       -Diferente que
        "!==",      -Estrictamente diferente que
        "<",        -Menor que
        ">",        -Mayor que
        "<="        -Menor o igual que
        ">=".       -Mayor o igual que

   Y los lógicos: 
        AND = "&&",  
        OR = "||", 
        NOT = "!".

   Los operadores de comparación al realizar operaciones regresan datos de tipo booleano, con el cual los operadores lógicos pueden trabajar.
   */

   let x = 5;
   let y = 6;
   let xt = "5";
   let yt = "6";


   document.write(x == xt);
   document.write("<br>");

   document.write(x === xt);
   document.write("<br>");

   document.write(x == xt && x === xt);


/* ---------------
    Condicionales
   ---------------  */

   /*
   "If", "else if" y "else" de toda la vida, solo recordar usar else if en conjunto con "if" para ahorrar recursos.    
   */ 