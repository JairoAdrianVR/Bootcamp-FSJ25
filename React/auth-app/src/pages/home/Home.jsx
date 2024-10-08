import { Link } from "react-router-dom"
import { useContext } from "react"
import { UserContext } from "../../context/UserDataContext";

export const Home = () => {

 // const mensaje = useContext(UserContext);

  return (
    <div>
        <Link to="/session">INICIAR SESION</Link>
    </div>
  )
}
