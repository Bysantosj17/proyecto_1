import 'bootstrap';
import Swal from 'sweetalert2';

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

document.addEventListener('DOMContentLoaded',function(){
    const horaReservadaInput = document.getElementById('hora_reservada');

    horaReservadaInput.addEventListener('change', function(){
        let selectTime = this.value;//obtener el valor de la hora seleccionada

        //Asegurar que solo se capture la parte de la hora
        if (selectTime){
            selectTime = selectTime.split(':');//Dividir la cadena en hora y minutos
            selectTime = selectTime[0] + ':00';//Conservar solol la hora, ignorar los minutos
            this.value = selectTime;// Establecer la hora finalizada en el campo entrada
        }

        if (selectTime < '08:00' || selectTime > '20:00'){
            //si es asi, establecer la hora seleccionada en null
            this.value = null;
            alert('Por favor, seleccione una hora entre las 08:00 am. y las 8:00 pm.');
        }
    });
});

Swal.fire({
    title: 'Bienvenido',
    text: 'Hola que hace',
    icon: 'success',
    confirmButtonText: 'Selecciona perro',
    footer: 'Es importante',
});


