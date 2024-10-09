import { Link, useNavigate } from "react-router-dom"
import { useContext } from "react"
import { UserContext } from "../../context/UserDataContext";
import { signOut } from "firebase/auth";
import { auth } from "../../firebase/config";
export const Home = () => {

  const {user,setUser} = useContext(UserContext);
  const navigate = useNavigate();

  const logout = () => {

    signOut(auth).then(() => {
      // Sign-out successful.
      setUser(null);
      navigate('/');

    }).catch((error) => {
      // An error happened
      console.error(error);
    });
  }

  return (
      <>
      { user ? <>
      <h1> {user.email} </h1> 
      <button onClick={logout}>Cerrar sesion</button>
      </>
      : <Link to="/session">INICIAR SESION</Link> }
        
    </>
  )
}
