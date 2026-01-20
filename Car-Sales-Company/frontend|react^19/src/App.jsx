import { useState } from "react";
import CarList from "./pages/CarList";
import Login from "./pages/Login";

export default function App() {
  const [isLogin, setIsLogin] = useState(
    !!localStorage.getItem("token")
  );

  return (
    <>
      {isLogin ? (
        <CarList/>
          ) : (
            <Login onLogin={() => setIsLogin(true)}/>
      )}
    </>
  );
}