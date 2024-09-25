import './App.css'
import { Saludo }  from './components/Saludo'
import {Saludo as Saludito} from './components/Saludo'

function App() {
//Comentario de una sola linea
/* Comentario multilinea
  Ingresar codigo JS en el return de HTML
  {  }
*/
  return (
    <>
    { /* SOY UN COMENTARIO EN JS DENTRO DEL HTML RETORNADO */}
      <h1>Holiwis desde el App</h1>
      <h2>FSJ25</h2>

      {/* Llamada a un componente */}
      <Saludo/>
      <Saludito />
    </>
  )
}

export default App
