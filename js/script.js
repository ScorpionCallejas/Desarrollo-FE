// Widget de fecha y hora
function refresh(){
    // Script para mostrar la fecha
    const date = new Date();
    // Array de los meses del año
    let month = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    // Array de los dias de la semana
    let day = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
    // Formullación de el formato en el que se mostrara la fecha actual
    const dateComplete = (day[date.getDay()] + ", " + date.getDate() + " de " + month[date.getMonth()] + " de " + date.getUTCFullYear());
    // Mostrar la fecha actual
    document.getElementById("date").innerHTML = dateComplete;
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();

    if(hours < 10){hours = "0" + hours;}
    if(minutes < 10){minutes = "0" + minutes;}
    if(seconds < 10){seconds = "0" + seconds;}
    let hoursComplete = hours + ":" + minutes + ":" + seconds;
    document.getElementById("hours").innerHTML = hoursComplete;

    let id = document.getElementById("widget-time");
    if(hours < 20){
        id.classList.add("day");
    }
    else if(hours >= 20){
        id.classList.add("night");
    }
}
setInterval(refresh, 1000);