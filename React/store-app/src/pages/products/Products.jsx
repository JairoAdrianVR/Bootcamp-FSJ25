import { addDoc, collection, getDocs } from 'firebase/firestore';
import {useForm} from 'react-hook-form';
import { db } from '../../firebase/config';
import { useEffect } from 'react';

export const Products = () => {
    const {register,handleSubmit,reset} = useForm()

    const getProducts = async () => {
        const productsCollection =   await getDocs(collection(db,'products'))
        console.log(productsCollection.docs);
    }

    const addProduct = async (data) => {
        console.log(data.name);
        console.log(parseInt(data.stock));
        console.log(parseFloat(data.price));
        
        
      let response =  await addDoc(collection(db,'products'),{
        name: data.name,
         price: parseFloat(data.price),
        stock: parseInt(data.stock)
      })
        console.log(response);
        
        reset();
    }

    useEffect(()=> {
            //Ejecutamos funciones al momento de montar un componente
            getProducts();
        },[]
    )

  return (
    <>
        <h2>Productos</h2>

        <form onSubmit={handleSubmit(addProduct)}>
            <section>
                <label>Nombre de producto</label>
                <input type="text" {...register('name')} required/>
            </section>
            <section>
                <label>Precio</label>
                <input type="text" {...register('price')} required/>
            </section>
            <section>
                <label>Cantidad</label>
                <input type="number" {...register('stock')} required/>
            </section>
            <button type='submit'>Enviar</button>
        </form>
    </>
  )
}
