// Indica 'No' anteción preferencial inicialmente
preferencial.innerHTML = 'No';
let status = false;

// Cambia atención preferencial según clic
function switch_preferencial() {
    let preferencial = document.getElementById('preferencial');
    status = !status;
    if(status) {
        preferencial.innerHTML = 'Sí';
    } else {
        preferencial.innerHTML = 'No';
    }
}