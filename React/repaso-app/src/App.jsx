import './App.css'

//VARIABLES DE ENTORNO -> DOTENV. 
const BASEurl = 'https://reqres.in/'
//const BASEuri = 'https://localhost:5000/api/auth'
function App() {

  const login = async (credentials) => {
    // REALIZAR LA CONSULTA -> ENVIAMOS UN MENSAJERO
    const response = await fetch(BASEurl+'api/login',{
        method: 'POST',
        headers: { //Headers: CONFIGURACIONES O CARACTERISTICAS DE NUESTRA PETICION
          
          //Si enviamos datos le aclaramos el tipo de DATO ENVIADO
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(credentials)
    })

    const data = await response.json();
    console.log(data);
  }

  login({
    "email": "eve.holt@reqres.in",
    "password": "cityslicka"
});

  const getUsers = async (token) => {
      const response = await fetch(BASEurl+'api/users?page=2',{
        method: 'GET',
        headers: {
          'Authorization': `Bearer ${token}`
        }
      })
      const data = await response.json();
      console.log(data);
    }
  getUsers('QpwL5tke4Pnpja7X4')


  return (
    <>
     <h1>Practica METODOS HTTP FETCH</h1>
    </>
  )
}

export default App
