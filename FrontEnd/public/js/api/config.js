export default{

    dominio:"http://localhost:8000",
    loginRoute:`http://localhost:8000/api/v1/auth/login`,
    sessionRoute:`/session`,
    licencaListaRoute:"http://localhost:8000/api/v1/candidato/index",
    //Add Licencas Prepare
    paisesRoute:"http://localhost:8000/api/v1/asset/paises",
    provinciasRoute:"http://localhost:8000/api/v1/asset/provincias",
    municipiosRoute:"http://localhost:8000/api/v1/asset/municipios",
    municipiosProvinciaRoute:"http://localhost:8000/api/v1/asset/municipios/",
    //Store Dados
    sumbmitDadosRouteLicenca:"http://localhost:8000/api/v1/candidato/store/licenca",
    sumbmitDadosRouteCarteira:"http://localhost:8000/api/v1/candidato/store/carteira",
    //Session Add
    sessionAddLicenca:`/sessionAddLicenca`
}