import { initializeApp } from "firebase/app";
import { getFirestore } from "firebase/firestore";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
 //Datos de tu CONFIG de FIREBASE
 apiKey: "AIzaSyCX6pKiRLQimiopnl1_omCR9RlK11B5Wzs",
 authDomain: "authentic-app-a5edd.firebaseapp.com",
 projectId: "authentic-app-a5edd",
 storageBucket: "authentic-app-a5edd.appspot.com",
 messagingSenderId: "620291887047",
 appId: "1:620291887047:web:885b5cb66820f142f0d3e2"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Initialize Cloud Firestore and get a reference to the service
const db = getFirestore(app);
