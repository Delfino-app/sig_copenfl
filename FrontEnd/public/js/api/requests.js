import config from "./config.js";

export default{

    async login(data){
        const myHeaders = new Headers();
        myHeaders.append("accept","application/json");
        myHeaders.append("Content-Type","application/json");

        try {

          const response = await fetch(config.loginRoute, {
            method: 'POST',
            headers: myHeaders,
            body: JSON.stringify(data),
          });
      
          const resData = await response.json();
          return resData;

        }catch (error) {

          const internalError = {internalError:"Internal Error"};

          return internalError;
        }
    },
    async session(data){

        const myHeaders = new Headers();
        myHeaders.append("accept","application/json");
        myHeaders.append("Content-Type","application/json");

        const response = await fetch(config.sessionRoute, {
          method: 'POST',
          headers: myHeaders,
          body: JSON.stringify(data),
        });
    
        const resData = await response.json();
        return resData;
    },
    async listaLicencas(token){

        const myHeaders = new Headers();
        myHeaders.append("accept","application/json");
        myHeaders.append("Content-Type","application/json");
        myHeaders.append("Authorization",`Bearer ${token}`);


        const response = await fetch(config.licencaListaRoute, {
          method: 'GET',
          headers: myHeaders
        });
    
        const resData = await response.json();
        return resData;
    },
    //Licencas Add Prepare
    async paises(){

      const myHeaders = new Headers();
      myHeaders.append("accept","application/json");
      myHeaders.append("Content-Type","application/json");

      const response = await fetch(config.paisesRoute, {
        method: 'GET',
        headers: myHeaders
      });
  
      const resData = await response.json();
      return resData;
    },
    async provincias(){

      const myHeaders = new Headers();
      myHeaders.append("accept","application/json");
      myHeaders.append("Content-Type","application/json");

      const response = await fetch(config.provinciasRoute, {
        method: 'GET',
        headers: myHeaders
      });
  
      const resData = await response.json();
      return resData;
    },
    async municipios(){

      const myHeaders = new Headers();
      myHeaders.append("accept","application/json");
      myHeaders.append("Content-Type","application/json");

      const response = await fetch(config.municipiosRoute, {
        method: 'GET',
        headers: myHeaders
      });
  
      const resData = await response.json();
      return resData;
    },
    async municipiosProvincia(idprovincia){

      const myHeaders = new Headers();
      myHeaders.append("accept","application/json");
      myHeaders.append("Content-Type","application/json");

      const response = await fetch(config.municipiosProvinciaRoute+idprovincia, {
        method: 'GET',
        headers: myHeaders
      });
  
      const resData = await response.json();
      return resData;
    },

    //Submit Dados Licença
    async submitDados(data,token){

      const myHeaders = new Headers();
      myHeaders.append("accept","application/json");
      myHeaders.append("Content-Type","application/json");
      myHeaders.append("Authorization",`Bearer ${token}`);

      const response = await fetch(config.sumbmitDadosRouteLicenca, {
        method: 'POST',
        headers: myHeaders,
        body: JSON.stringify(data),
      });
  
      const resData = await response.json();
      return resData;
    },

    //Post Dados Identificação
    async submitIdentificacao(data,token){

      const Url = await config.sumbmitDocumentos;

      const formData = new FormData();
      formData.append("orgao_emissor",data.orgao_emissor);
      formData.append("data_expiracao",data.data_expiracao);
      formData.append("data_emissao",data.data_emissao);
      formData.append("numero",data.numero);
      formData.append("descricao",data.descricao);
      formData.append("inscricao_tipo",data.inscricao_tipo);
      formData.append("inscricao_id",data.inscricao_id);
      formData.append("file",data.file);
      formData.append("tipo_documento_id",data.tipo_documento_id);

      var xhr = new XMLHttpRequest();

      xhr.open('POST',Url);
      xhr.setRequestHeader("accept","application/json");
      xhr.setRequestHeader("Authorization",`Bearer ${token}`);
      xhr.onload = function(response){console.log(response.target.response)};
      xhr.send(formData);

     /* $.ajax({
        url:Url,
        type:"POST",
        processData: false,
        data:formData,
        headers: {
          'accept':'application/json',
          'Authorization':`Bearer ${token}`
        },
        success:function(response){
          console.log(response);
        }
      });*/
    },

    //Submit Documentos
    async submitDocumentos(data,token){

      const Url = await config.sumbmitDocumentos;

      const formData = new FormData();

      formData.append("inscricao_tipo",data.inscricao_tipo);
      formData.append("inscricao_id",data.inscricao_id);
      formData.append("file",data.file);
      formData.append("tipo_documento_id",data.tipo_documento_id);

      var xhr = new XMLHttpRequest();

      xhr.open('POST',Url);
      xhr.setRequestHeader("accept","application/json");
      xhr.setRequestHeader("Authorization",`Bearer ${token}`);
      xhr.onload = function(response){console.log(response.target.response)};
      xhr.send(formData);
    },

    //Session Flash Add Licença
    async sessionFlashAddLicenca(){

      const response = await fetch(config.sessionAddLicenca, {
        method: 'GET',
      });
  
      const resData = await response.json();
      return resData;
    },

    //Submit Dados Carteira
    async submitDadosCarteira(data,token){

      const myHeaders = new Headers();
      myHeaders.append("accept","application/json");
      myHeaders.append("Content-Type","application/json");
      myHeaders.append("Authorization",`Bearer ${token}`);

      const response = await fetch(config.sumbmitDadosRouteCarteira, {
        method: 'POST',
        headers: myHeaders,
        body: JSON.stringify(data),
      });
  
      const resData = await response.json();
      return resData;
    }


}