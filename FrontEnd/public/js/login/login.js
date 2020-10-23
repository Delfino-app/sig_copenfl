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
            <div class="alert alert-info" style="padding:5px 10px">
               Verificando os dados...
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
                <div class="alert alert-danger" style="padding:5px 10px">
                    Dados de acesso incorretos
                </div>
            `;

            $("#btnLogin").removeAttr("disabled");
        }
        else if(makeLogin.internalError != undefined){

            this.displayLoginInfo.innerHTML = `
                <div class="alert alert-danger" style="padding:5px 10px">
                    A autenticação falhou. Tente mais tarde.
                </div>
            `;

            $("#btnLogin").removeAttr("disabled");
        }
        else{

            this.displayLoginInfo.innerHTML = `
                <div class="alert alert-success" style="padding:5px 10px">
                   Login feito com sucesso!. Redirecionando...
                </div>
            `;

            $("#btnLogin").attr("disabled",true);

            dados._token = this.inputToken; //crsf_field

            dados._api_token = makeLogin.access_token;

            //Submit Session
            const makeSession = await requests.session(dados);

            if(makeSession.name != undefined && makeSession.email != undefined && makeSession.access_token != undefined){

                window.location.href="/home";
            }
            else{

                this.displayLoginInfo.innerHTML = `
                    <div class="alert alert-danger" style="padding:5px 10px">
                        Erro ao redirecionar. Sua sessão não foi criada.
                    </div>
                `;
                
                $("#btnLogin").removeAttr("disabled");
            }
        }
    }
}