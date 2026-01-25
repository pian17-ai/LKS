import { useState } from "react";
import { AuthContext } from "./AuthContext";
import { loginApi, logoutApi } from "../api/auth.api";

export const AuthProvider = ({ children }) => {
  const [user, setUser] = useState(null);

  const login = async (id_card_number, password) => {
    const res = await loginApi({ id_card_number, password });
    
    const token = res.data.token;
    const userData = res.data.data;

    if (!token) {
      throw new Error("Token tidak ditemukan");
    }

    localStorage.setItem("token", token);
    setUser(userData);

    return true;
  };

  const logout = async () => {
    await logoutApi();
    localStorage.removeItem("token");
    setUser(null);
  };

  return (
    <AuthContext.Provider value={{ user, login, logout }}>
      {children}
    </AuthContext.Provider>
  );
};
 