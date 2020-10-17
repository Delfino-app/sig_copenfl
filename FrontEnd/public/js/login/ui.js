export default{

    getDefaultElements(){

        this.login_email = document.querySelector("#email_login").value;
        this.login_senha = document.querySelector("#senha_login").value;
        this.frmLogin = document.getElementById("frmLogin");
    },
    actionDefaultElements(){

        this.frmLogin.onsubmit = (e) => this.logar(e);
    }
}