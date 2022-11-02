let nombre= document.getElementById("inputNombre");
let apellido= document.getElementById("inputApellido");
let cantidad= document.getElementById("inputCantidad");
let categoria= document.getElementById("inputCategoria");
let resumenAlert= document.getElementById("resumen-alert");
const VALOR_TICKET= 200;

console.log(resumenAlert);

const descEstudiante ={
    tipo: "Estudiante",
    descuento: 80
};
const descTrainee ={
    tipo: "Estudiante",
    descuento: 50
};
const descJunior ={
    tipo: "Estudiante",
    descuento: 15
};

document.getElementById("descEst").innerText=descEstudiante.descuento + "%";
document.getElementById("descTra").innerText=descTrainee.descuento + "%";
document.getElementById("descJr").innerText=descJunior.descuento + "%";
document.getElementById("valorTicket").innerText=`VALOR DEL TICKET $${VALOR_TICKET}`;


function clearAlert() {
    resumenAlert.innerText= "Total a pagar: $";
}

function resumen(event) {
    event.preventDefault();
    let ticketDesc;
    let totalAPagar;
    switch (inputCategoria.value){
        case "estudiante": 
        ticketDesc =((100 - descEstudiante.descuento)/100)* VALOR_TICKET;
        break;
        case "trainee": 
        ticketDesc =((100 - descTrainee.descuento)/100)* VALOR_TICKET;
        break;
        case "junior": 
        ticketDesc =((100 - descJunior.descuento)/100)* VALOR_TICKET;
        break;
    }
    totalAPagar=ticketDesc* Number(cantidad.value);

    resumenAlert.innerText =`Total a pagar: $${totalAPagar}` ;

};
