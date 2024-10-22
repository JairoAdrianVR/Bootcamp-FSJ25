import { getDocs,collection } from "firebase/firestore";
import { db } from "../firebase/config";

export const getProducts = async () => { //...doc.data() -> {name:"Doritos","price":2,"stock":5}
    const productsCollection =   await getDocs(collection(db,'products'))
    const data = productsCollection.docs.map(  (doc) => ( {...doc.data(), id: doc.id } )
      )
    console.log(data);
    return data;
}
