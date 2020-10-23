//Eventos Next e Previus aplicados em ver Dados de Inscriçao

const btnPrevius = document.getElementById("previusVer").onclick = () => previus();
const btnNext = document.getElementById("nextVer").onclick = () => next();

let step = 1;

let stepTitle = document.getElementById("StepTitle");

function changeTitle(){

    if(step === 1){

        stepTitle.innerText = "Dados Pessoais";
    }
    else if(step === 2){

        stepTitle.innerText = "Endereço e Contacto Pessoal";
    }
    else if(step === 3){

        stepTitle.innerText = "Endereço e Contacto do Local de Trabalho";

    }
    else if(step === 4){

        stepTitle.innerText = "Dados Acadêmicos";

    }
}
async function previus(){

    if(step > 1){

        $("#Step"+step).hide();

        step -= 1;

        changeTitle();

        $("#Step"+step).show();
        $("#Step"+step).removeClass("fadeInRight animated");
        $("#Step"+step).addClass("fadeInLeft animated");
        $("#nextVer").removeClass("disabled");
    }

    if(step === 1){

        $("#previusVer").addClass("disabled");
    }
    else if(step > 1 && step < 4){

        $("#nextVer").removeClass("disabled");
    }
    else if(step === 4){

        $("#nextVer").addClass("disabled");
    }
}
async function next(){

    if(step < 4){

        $("#Step"+step).hide();

        step += 1;
        
        changeTitle();

        $("#Step"+step).removeAttr("hidden");
        $("#Step"+step).show();
        $("#Step"+step).removeClass("fadeInLeft animated");
        $("#Step"+step).addClass("fadeInRight animated");

        if(step === 1){

            $("#previusVer").addClass("disabled");
        }
        else if(step > 1 && step < 4){

            $("#previusVer").removeClass("disabled");
        }
        else if(step === 4){

            $("#nextVer").addClass("disabled");

        }
    }
}