import './assets/css/App.css'
import { MyProvider } from './context/UserDataContext'
import  {Home}  from './pages/home/Home'
import { Session } from './pages/session/Session'
import {BrowserRouter,Route,Routes } from 'react-router-dom'

function App() {

  return (
    <>
    <MyProvider>
    {/* BrowserRouter activamos ReactRouterDOM en la app */}
      <BrowserRouter>
    {/* Activamos la funcionalidad de poder empezar a crear RUTAS en */}
            <Routes>
            <Route index path='/' element={ <Home />} />
            <Route path='/session' element={ <Session />} />
            </Routes>
      </BrowserRouter>
  </MyProvider>
    </>
  )
}

export default App
