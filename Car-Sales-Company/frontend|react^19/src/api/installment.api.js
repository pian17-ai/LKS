import api from "./axios"

export const getInstalmentCars = async () => {
    const res = await api.get("/instalment_cars");
    return res.data;
}

export const getInstalmentDetail = (id) => {
    api.get(`/instalment_cars/${id}`)
}

export const applyInstalment = async (payload) => {
    return await api.post("/applications", payload);
}