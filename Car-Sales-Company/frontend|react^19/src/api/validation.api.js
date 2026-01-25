import api from "./axios"

export const requestValidation = (data) => {
    return api.post("/validation", data);
}

export const getValidationStatus = () => {
    return api.get("/validations");
}