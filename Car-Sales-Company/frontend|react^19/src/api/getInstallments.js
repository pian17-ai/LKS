const API_URL = "http://localhost:8000/api/v1";

export async function getInstallments() {
    const token = localStorage.getItem('token');

    const response = await fetch(`${API_URL}/instalment_cars`, {
        headers : {
            Authorization : `Bearer ${token}`
        }
    });

    return response.json();
}