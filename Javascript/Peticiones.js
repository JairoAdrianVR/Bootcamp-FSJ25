async function get(){
    const response = await fetch('https://restcountries.com/v3.1/all');
    const data = await response.json();
    console.log(data);
    
    return data;
}

get()

async function getAuth(){
    const response = await fetch('https://restcountries.com/v3.1/all',
        {
            method: 'GET',
            headers: {
                'Authorization': "Bearer <token>"
            }
        }
    );
    const data = await response.json();
    return data;
}

const create = async () => {
    const response = await fetch('https://api.example.com/',{
        method: 'POST',
        headers: {
            'Content-type': 'application/json',
            'Authorization': "Bearer <token>"
          },
        body: JSON.stringify({
            name: "Jairo",
            age: 26
        })
    })

}

const update = async () => {
    const response = await fetch('https://api.example.com/',{
        method: 'PUT',
        headers: {
            'Content-type': 'application/json',
            'Authorization': "Bearer <token>"
          },
        body: JSON.stringify({
            name: "Jairo",
            age: 26
        })
    })
}

const destroy = async () => {
    const response = await fetch('https://api.example.com/1',{
        method: 'DELETE',
        headers: {
            'Content-type': 'application/json',
            'Authorization': "Bearer <token>"
          }
    })
}