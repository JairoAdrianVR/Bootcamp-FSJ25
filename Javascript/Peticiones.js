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
    const response = await fetch('http://localhost:5000/api/auth/bootcamps/all',{
        method: 'get',
        headers: {
            'Content-type': 'application/json',
            'Authorization': "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwidXNlcm5hbWUiOiJudWV2b191c3VhcmlvIiwiaWF0IjoxNzI5NTY5NDMwLCJleHAiOjE3Mjk1NzMwMzB9.C4nd0mcPW85Ih70L0XlsmlvsR_FCYmNC1OVnMsRIBHU"
          }
    })
    const data = await response.json()
    console.log(data);
    return data
}

create()
const update = async () => {
    const response = await fetch('http://localhost:5000/api/auth/bootcamps/create',{
        method: 'POST',
        headers: {
            'Content-type': 'application/json',
            'Authorization': "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwidXNlcm5hbWUiOiJudWV2b191c3VhcmlvIiwiaWF0IjoxNzI5NTY5NDMwLCJleHAiOjE3Mjk1NzMwMzB9.C4nd0mcPW85Ih70L0XlsmlvsR_FCYmNC1OVnMsRIBHU"
          },
        body: JSON.stringify(
            {
                "name": "Otro bootcamp",
                "description": "Aprende Java desde cero hasta un nivel avanzado, incluyendo el desarrollo de aplicaciones backend robustas.",
                "technologies": [
                  "Java",
                  "Spring Boot",
                  "MySQL"
                ]
              }
        )
    })
    const data = await response.json()
    console.log(data);
}

update();

const destroy = async () => {
    const response = await fetch('https://api.example.com/1',{
        method: 'DELETE',
        headers: {
            'Content-type': 'application/json',
            'Authorization': "Bearer <token>"
          }
    })
}