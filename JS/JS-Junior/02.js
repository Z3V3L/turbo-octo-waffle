/* --------------------
    Arrays asociativos
   --------------------  */

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