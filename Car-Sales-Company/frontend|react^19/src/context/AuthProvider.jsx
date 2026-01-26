import { useState, useEffect } from "react";
import { AuthContext } from "./AuthContext";
import { loginApi, logoutApi } from "../api/auth.api";

export const AuthProvider = ({ children }) => {
  const [user, setUser] = useState(null);

  // 🔥 load user dari localStorage pas refresh
  useEffect(() => {
    const storedUser = localStorage.getItem("user");
    if (storedUser && storedUser !== "undefined") {
      setUser(JSON.parse(storedUser));
    }
  }, []);

  const login = async (id_card_number, password) => {
    const res = await loginApi({ id_card_number, password });

    const token = res.data.token;

    // 🔥 karena user ADA LANGSUNG di res.data
    const userData = {
      name: res.data.name,
      born_date: res.data.born_date,
      gender: res.data.gender,
      address: res.data.address,
      regional: res.data.regional,
    };

    if (!token) {
      throw new Error("Token tidak ditemukan");
    }

    localStorage.setItem("token", token);
    localStorage.setItem("user", JSON.stringify(userData));
    setUser(userData);

    return true;
  };

  const logout = async () => {
    await logoutApi();
    localStorage.removeItem("token");
    localStorage.removeItem("user");
    setUser(null);
  };

  return (
    <AuthContext.Provider value={{ user, login, logout }}>
      {children}
    </AuthContext.Provider>
  );
};
