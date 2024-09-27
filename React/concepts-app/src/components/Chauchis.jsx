//PROPS -> Propiedades 
//Como recibir las props? A TRAVES DE SUS PARAMETROS
export const Chauchis = ({nombreUsuario,edad}) => {

    return (
        <div>
            <h2>Bye bye {nombreUsuario}, desde el chauchis</h2>
            {edad}
            
        </div>
    )
}