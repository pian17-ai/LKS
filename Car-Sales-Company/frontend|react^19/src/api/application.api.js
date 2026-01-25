import api from "./axios"

export const ApplyingInstallment = (data) => {
    return api.post("/applications", data);
}

export const GetMyApplications = () => {
    return api.get("/applications")
}