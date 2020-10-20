import ui from "./ui.js";
import requests from "../api/requests.js"
export default{

    start(){

        ui.getDefaultElements.call(this);
        ui.actionDefaultElements.call(this);
    },
    async logar(e){

        ui.getDefaultElements.call(this);

        e.preventDefault();

        this.displayLoginInfo.innerHTML = `
            <div class="alert alert-info">
                <strong>Aguarde</strong> Verificando os dados...
            </div>
        `;

        $("#btnLogin").attr("disabled",true);
        
        const dados = {
            email : this.login_email.value,
            password : this.login_senha.value
        }

        const formData = new FormData();

        formData.append("email",dados.email);
        formData.append("password",dados.password);

       const makeLogin = await requests.login(dados);

        if(makeLogin.error != undefined){
            this.displayLoginInfo.innerHTML = `
                <div class="alert alert-danger">
                    <strong>Erro</strong> Dados de acesso incorretos
                </div>
            `;

            $("#btnLogin").removeAttr("disabled");
        }
        else{

            this.displayLoginInfo.innerHTML = `
                <div class="alert alert-success">
                    <strong>Login feito com sucesso!</strong> Redirecionando...
                </div>
            `;

            $("#btnLogin").attr("disabled",true);

            dados._token = this.inputToken;
            dados._api_token = makeLogin.access_token;
            //Submit Session
            const makeSession = await requests.session(dados);

            if(makeSession != ""){

                window.location.href="/home";
            }
        }
    }
}