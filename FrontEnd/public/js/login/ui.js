export default{

    getDefaultElements(){

        this.login_email = document.getElementById("email_login");
        this.login_senha = document.getElementById("senha_login");
        this.frmLogin = document.getElementById("frmLogin");
        this.displayLoginInfo = document.getElementById("displayLoginInfo");
        this.inputToken = $('input[name="_token"]').val();
    },
    actionDefaultElements(){

        this.frmLogin.onsubmit = (e) => this.logar(e);
    }
}