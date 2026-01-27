// import api from "./axios"


// export const requestValidation = (data) => {
  //     return api.post("/validation", data);
  // }
  
  // export const getValidationStatus = () => {
    //     return api.get("/validations");
    // }
    // import api from "./axios";
    
    // export const getValidation = async () => {
      //   return await api.get("/validations");
      // };
      
      // export const createValidation = async (payload) => {
        //   return await api.post("/validation", payload);
        // };
        
import api from "./axios";

export const getValidation = async () => {
  try {
    const res = await api.get("/validations");

    // cek apakah data.validation ada dan punya id
    if (!res.data.validation || !res.data.validation.id) {
      return null; // dianggap belum ada validation
    }

    return res.data.validation; // validation ada, return object
  } catch (err) {
    if (err.response?.status === 404) {
      return null; // belum validation
    }
    throw err; // error lain lempar
  }
};

export const submitValidation = async (payload) => {
  const res = await api.post("/validation", payload);
  return res.data;
};
