

import 'bootstrap';

document.addEventListener('DOMContentLoaded', function(){
    const fechaReservaInput = document.getElementById('fecha_reserva');

    fechaReservaInput.addEventListener('change', function(){
        let selectedDate = this.value;

        let today = new Date().toISOString().slice(0, 10);

        if (selectedDate < today){
            this.value = null;
            alert('No se puede reservar en una fecha pasada')
        }
    })
});
