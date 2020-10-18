
<pre>
# Autenticação do usuário
POST URL
"http://localhost:8000/api/v1/auth/login"

REQUEST HEADER
"accept" : "application/json"
"Content-Type" : "application/json"
REQUEST BODY
{
    "email": "" // campo oobrigatorio
    "password": // campo obrigatorio
}
RESPONSE BODY
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDI4OTc2NjMsImV4cCI6MTYwMjkwMTI2MywibmJmIjoxNjAyODk3NjYzLCJqdGkiOiI0RXREd1ZwczZuUTg5enhyIiwic3ViIjoxLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.2c3UghoMLmAncoH0vxYYd0r0lx-HMQjWZPKUKKlKRVM",
    "token_type": "bearer",
    "expires_in": 3600
}
RESPONSE HEADER
"Content-Type" : "application/json"
status code 200
</pre>

<pre>
# Refresh Token
POST URL
"http://localhost:8000/api/v1/auth/refresh"

POST URL
"http://localhost:8000/api/v1/auth/logout"

REQUEST HEADER
"accept" : "application/json"
"Content-Type" : "application/json"
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6OTAwMFwvdWVuZ2lcL2F.waVwvdjFcL2F1dGhcL2xvZ2luIiw.iaWF0IjoxNTk2MDE4OTUzLCJleHAiOjE
</pre>

<pre>

## inscricão de candidato

POST URL
"http://localhost:8000/api/v1/candidato/store"

REQUEST HEADER
"accept" : "application/json"
"Content-Type" : "application/json"
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6OTAwMFwvdWVuZ2lcL2F.waVwvdjFcL2F1dGhcL2xvZ2luIiw.iaWF0IjoxNTk2MDE4OTUzLCJleHAiOjE

REQUEST BODY
{
    "apply_about" : "", // pode ser: Licenca ou Carteira
    "personal_datail" : {
        "nome" : "", // campo de preenchimento obrigatório
        "pai" : "", // campo de preenchimento obrigatório
        "mae" : "", // campo de preenchimento obrigatório
        "nacionalidade_id" : "", // campo de preenchimento obrigatório
        "data_nascimento" : "", // campo de preenchimento obrigatório
        "estado_civil" : "", // campo de preenchimento obrigatório
        "genero" : "", // campo de preenchimento obrigatório
        "naturalidade_id" : "", // campo de preenchimento obrigatório
        "contact" : {
            "telefone" : "", // campo de preenchimento obrigatório
            "email" : "", // campo de preenchimento obrigatório
            "caixa_postal" : "", // campo de preenchimento opcional
            "fax" : "" // campo de preenchimento opcional
        },
        "address" : {
            "municipio_id" : "", // campo de preenchimento obrigatório
            "bairro" : "", // campo de preenchimento obrigatório
            "rua" : "", // campo de preenchimento obrigatório
            "casa" : "" // campo de preenchimento opcional
        }
    },
    "work_info":{
       "contact" : {
            "telefone" : "", // campo de preenchimento opcional
            "email" : "", // campo de preenchimento opcional
            "caixa_postal" : "",// campo de preenchimento opcional
            "fax" : ""   // campo de preenchimento opcional
       },
       "address" : {
            "municipio_id" : "", // campo de preenchimento opcional
            "bairro" : "", // campo de preenchimento opcional
            "rua" : "", // campo de preenchimento opcional
            "casa" : "" // campo de preenchimento opcional
        }
    },
    "academic_detail" : {
        "tipo_escola" : "", // pode ser Privada ou Publica
        "escola" : "", // nome da escola
        "nivel" : "", // pode ser Fundamental, Medio ou Superior
        "ano_frequencia" : "", // ano/anos de frequencia escolar
        "ano_termino" : "", // ano que conclui, caso tenha
        "ano_inicio" : "", // ano que inicio a estudar
        "estado" : "" // pode ser Estudando ou Concluido
    }
}

RESPONSE BODY
{
  "status" : "", // poderá ser Ok ou Info, se o code for 200
  "message": "" // messagem 
}
RESPONSE HEADER
"Content-Type" : "application/json"
status code
200 // Ok ou Info
401 // Sem permissão ou token expirado

</pre>

<pre>
# Lista de Candidatos
GET URL
"http://localhost:8000/api/v1/candidato/index"

REQUEST HEADER
"accept" : "application/json"
"Content-Type" : "application/json"
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6OTAwMFwvdWVuZ2lcL2F.waVwvdjFcL2F1dGhcL2xvZ2luIiw.iaWF0IjoxNTk2MDE4OTUzLCJleHAiOjE

# Update de Candidatos
PUT URL
"http://localhost:8000/api/v1/candidato/update/{candidato_id}"

# Destroy de Candidatos
DELETE URL
"http://localhost:8000/api/v1/candidato/destroy/{candidato_id}"
</pre>