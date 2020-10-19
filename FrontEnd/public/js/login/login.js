import ui from "./ui.js";
export default{

    start(){

        ui.getDefaultElements.call(this);
        ui.actionDefaultElements.call(this);
    },
    async logar(e){

        ui.getDefaultElements.call(this);

        e.preventDefault();
        
        const dados = {
            email : this.login_email.value,
            senha : this.login_senha.value
        }

        const formData = new FormData();

        formData.append("email",dados.email);
        formData.append("password",dados.senha);

       const makeLogin = await this.post("http://localhost:8000/api/v1/auth/login",formData);

       if(makeLogin.error != undefined){

            console.log("Erro");

            this.displayLoginInfo.innerHTML = `
                <div class="alert alert-danger">
                    <strong>Erro</strong> Dados de acesso incorretos
                </div>
            `;
       }

       console.log(makeLogin);
    },
    async post(url, data) {
        const response = await fetch(url, {
          method: 'POST',
          headers: {
            "accept" : "application/json",
            "Content-Type" : "multipart/form-data"
          },
          body:data
        });
    
        const resData = await response.json();
        return resData;
      }
}