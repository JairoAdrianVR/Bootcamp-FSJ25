import { useState } from "react";
import { Chauchis } from "./Chauchis";

//Declaracion de un COMPONENTE
export const Saludo = ()=> {
  //let nombre = "Jairo";

  //Primer HOOK -> useState
  //Hook -> Es una funcion prehecha para realizar x accion
  //useState(VALOR INICIAL )
  const [nombre,cambiarNombre] = useState("Jairo");

    return (
      <div>
        <h3>Yo en realidad estoy en el componente Saludo jejox</h3>
        <h2>Hola {nombre}, como estas?</h2>
        <button onClick={() => { cambiarNombre("Hector") }} >MAGIA </button>

        <Chauchis nombreUsuario={nombre} edad="75" />
      </div>
    )
 }
