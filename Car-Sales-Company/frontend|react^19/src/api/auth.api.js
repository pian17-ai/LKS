import api from "./axios";

export const registerApi = async (payload) => {
  return await api.post("/auth/register", payload);
}

export const loginApi = async (payload) => {
  const response = await api.post("/auth/login", payload);
  return response.data;
};


export const logoutApi = ()=> {
    return api.post("auth/logout");
};
