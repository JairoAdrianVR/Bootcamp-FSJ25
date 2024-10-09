import {useForm} from 'react-hook-form';


export const Products = () => {
    const {register,handleSubmit } = useForm()

    const addProduct = (data) => {
        console.log(data);
        
    }

  return (
    <>
        <h2>Productos</h2>

        <form onSubmit={handleSubmit(addProduct)}>
            <section>
                <label>Nombre de producto</label>
                <input type="text" {...register('name')} />
            </section>
            <section>
                <label>Precio</label>
                <input type="number" {...register('price')}/>
            </section>
            <section>
                <label>Cantidad</label>
                <input type="number" {...register('stock')} />
            </section>
            <button type='submit'>Enviar</button>
        </form>
    </>
  )
}
