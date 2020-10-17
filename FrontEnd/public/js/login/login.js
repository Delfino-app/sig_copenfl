import ui from "./ui.js";
export default{

    start(){

        ui.getDefaultElements();
        ui.actionDefaultElements();
    },
    logar(e){

        e.preventDefault();
        console.log("Tentando Logar");
    }
}