import  { Producto } from './clases/Producto';
import { Tienda } from './clases/Tienda';
import './style.css'

document.querySelector<HTMLDivElement>('#app')!.innerHTML = `
  <div>
      <h1>Gestion de tiendita</h1>

      <form id="formProducto">
        <section>
          <label>Nombre Producto</label>
          <input type="text" id="nombre" name="nombre" placeholder="Ingresa el nombre del producto">
        </section>

        <section>
        <label>Precio</label>
        <input type="text" id="precio" name="precio" placeholder="Ingresa su precio">
        </section>

        <section>
        <label>Cantidad</label>
        <input type="text" id="cantidad" name="cantidad" placeholder="Ingresa su cantidad">
        </section>

        <button type="submit">Agregar producto</button>
      </form>

      <ul id="productsList"></ul>
  </div>
`

//Inicializamos la tienda para poder manipular los productos
const tienda = new Tienda();

//document.querySelector<HTMLElement>('#parrafo')!.innerText = "Esto es texto desde el p";
const form = document.getElementById("formProducto") as HTMLFormElement;

const productList = document.getElementById("productsList") as HTMLUListElement;

form.addEventListener('submit', (e:SubmitEvent) => {
    e.preventDefault();
    console.log("Holiwis");
    
    const id = Date.now()
    //Seleccionamos los elementos a controlar y retiramos su valor
     const nombre = (document.getElementById('nombre') as HTMLInputElement).value;
     const precio = parseFloat((document.getElementById('precio') as HTMLInputElement).value)
     const cantidad = parseInt((document.getElementById('cantidad') as HTMLInputElement).value);

    console.log(id);
    console.log(nombre);
    console.log(precio);
    console.log(cantidad);
    
    let productito = new Producto(id,nombre,precio,cantidad)
    console.log(productito);
    tienda.agregarProducto(productito);
});

function renderProductos(){
  productList.innerHTML = "";

  console.log(tienda.listarProductos());
  
  tienda.listarProductos().map( (producto:Producto) => {
    const productoItem = document.createElement('li');
    console.log(producto);
      
      productoItem.textContent = `${producto.getNombre()} - ${producto.getCantidad()} - $ ${producto.getPrecio()}  `
      productList.appendChild(productoItem)
  })


}

renderProductos()