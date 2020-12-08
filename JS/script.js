// Función
function calcularPropina() {

    // Obtener datos del input

    var billAmount = document.getElementById("billAmount").value;
    var serviceQuality = document.getElementById("serviceQuality").value;
    var personas = document.getElementById("personas").value;


    // Validar 

    if(billAmount === "" || serviceQuality === 0) {  // "==" no toma en cuenta el tipo de dato, mientras que "===" sí lo hace
        window.alert("Por favor introduzca los valores para calcular la propina.")

        return; //Evita que la función continue ejecutandose.
    }

    //Revisar que "personas" sea igual o menor que 1
    if(personas === "" || personas <= 1) {
        personas = 1;

        document.getElementById("cadaQuien").style.display = "none";

    } else {

        document.getElementById("cadaQuien").style.display = "block";

    }

    var propina = (billAmount * serviceQuality) / personas;
    propina = Math.round(propina * 100) / 100;
    propina = propina.toFixed(2);
    
    // Mostrar la propina
    document.getElementById("total").style.display = "block";
    document.getElementById("tip").innerHTML = propina;

}

// Esconder "Total tip"
document.getElementById("total").style.display = "none";

// Al hacer click en el boton, llama a la función
document.getElementById("calcular").onclick = function() { calcularPropina(); };