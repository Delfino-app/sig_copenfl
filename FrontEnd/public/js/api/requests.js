import config from "./config.js";

export default{

    async login(data){
        const myHeaders = new Headers();
        myHeaders.append("accept","application/json");
        myHeaders.append("Content-Type","application/json");

        const response = await fetch(config.loginRoute, {
          method: 'POST',
          headers: myHeaders,
          body: JSON.stringify(data),
        });
    
        const resData = await response.json();
        return resData;
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
    }
}