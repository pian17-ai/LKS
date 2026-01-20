const API_URL = 'http://localhost:8000/api/v1/auth';

export async function login(id_card_number, password) {
    const response = await fetch(`${API_URL}/login`, {
        method: "POST",
        headers: {
            "Content-Type" : "application/json"
        },
        body: JSON.stringify({
            id_card_number : id_card_number,
            password : password
        })
    });

    return response.json();
}