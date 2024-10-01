import {useForm} from 'react-hook-form'

export const Session = () => {
    const {register} = useForm();

    const onSubmitForm = (e) => {
        e.preventDefault();
        console.log("Se envio el form");
    }

  return (
    <div>
        <form action={(e) => onSubmitForm(e)}>
            <label> Email</label>
            <input type="text" id="email" placeholder="Example: Email@mail.com"/>
            <label> Password</label>
            <input type="password" id="password" placeholder="Enter your password"/>
            <label>Confirm Password</label>
            <input type="password" id="confirmPassword" placeholder="Repeat your password"/>
            
            <button type="submit">Send</button>
        </form>
    </div>
  )
}
