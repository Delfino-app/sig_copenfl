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