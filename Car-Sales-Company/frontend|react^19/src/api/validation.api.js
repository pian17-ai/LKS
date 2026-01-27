import api from "./axios";

export const getValidation = async () => {
  try {
    const res = await api.get("/validations");

    if (!res.data.validation || !res.data.validation.id) {
      return null;
    }

    return res.data.validation;
  } catch (err) {
    if (err.response?.status === 404) {
      return null;
    }
    throw err;
  }
};

export const submitValidation = async (payload) => {
  const res = await api.post("/validation", payload);
  return res.data;
};
