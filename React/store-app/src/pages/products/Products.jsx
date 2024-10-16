import { addDoc, collection,deleteDoc,doc,getDocs, updateDoc } from 'firebase/firestore';
import {useForm} from 'react-hook-form';
import { db } from '../../firebase/config';
import { useEffect, useState } from 'react';

export const Products = () => {
    const {register,handleSubmit,reset,setValue} = useForm()
    const [products,setProducts] = useState([]);
    const [editId, setEditId] = useState(null);

    /* getProducts -> Obtener/traer TODOS los documentos de la coleccion  */

    const getProducts = async () => { //...doc.data() -> {name:"Doritos","price":2,"stock":5}
        const productsCollection =   await getDocs(collection(db,'products'))
        const data = productsCollection.docs.map(  (doc) => ( {...doc.data(), id: doc.id } )
          )
        console.log(data);
        setProducts(data);
    }
    
    /* AddProduct -> Guardamos un documento en la coleccion  */

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
        getProducts();
    }

    /* editProduct -> obtener los datos del producto y setearlos en los inputs del form  */
    
    const editProduct = (producto) => { 
        console.log("editando un producto");
        console.log(producto);
        
        setValue('name',producto.name)
        setValue('price',producto.price)
        setValue('stock',producto.stock)
        //Guardamos el ID PARA PODER ACTUALIZAR ESTE PRODUCTO
        setEditId(producto.id)

    }

    /* UpdateProduct -> Actualizamos un documento en la coleccion  */

    const updateProduct = async (data) => {
        const docRef = doc(db,'products',editId)

        await updateDoc(docRef,{
            name: data.name,
             price: parseFloat(data.price),
            stock: parseInt(data.stock)
          })

        setEditId(null);
        reset();
        getProducts();          
    }

    const deleteProduct = async (id) => {
        const docRef = doc(db,'products',id)
        await deleteDoc(docRef)

        reset();
        getProducts();
    }

    useEffect(()=> {
            //Ejecutamos funciones al momento de montar un componente
            getProducts();
        },[]
    )

  return (
    <>
        <h2>Productos</h2>

        <form onSubmit={editId ? handleSubmit(updateProduct) : handleSubmit(addProduct)}>
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
            <button type='submit'>{editId ? 'Editar' : 'Guardar' }</button>
        </form>

        <main>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
            {
                /* Listar los productos */
                products.map((product) => {
                return  <tr key={product.id} >
                        <td>{product.name}</td>
                        <td>{product.price}</td>
                        <td>{product.stock}</td>
                        <td>
                            <button onClick={() => {editProduct(product)}}>Edit</button>
                            <button onClick={()=>{deleteProduct(product.id)}}>Delete</button>
                        </td>
                    </tr>
                })
            }
            </tbody>
            </table>
        </main>
    </>
  )
}
