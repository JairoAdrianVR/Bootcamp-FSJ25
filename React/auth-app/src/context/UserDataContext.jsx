import { createContext, useState } from "react";

//Crear mi contexto
export const UserContext = createContext(null);

//Crear mi proveedor? Distribuye info (el valor que le demos)

// eslint-disable-next-line react/prop-types
export const MyProvider = ({children}) => {

    const [user, setUser] = useState(null);

    /*
    const objUser = {
        user,
        setUser
    }*/
 
    return(
        <UserContext.Provider value={ {user,setUser} }>
            {children}
        </UserContext.Provider>
    )
}