import { useState } from "react";
import Login from "./Login";
import Register from "./Register";

export default function AuthPage() {
  const [showLogin, setShowLogin] = useState(true); // true = login, false = register

  return (
    <div>
      {showLogin ? <Login /> : <Register />}

      {/* Tombol manual */}
      <div 
    //   style={{ marginTop: "20px" }}
    className="container px-4"
      >
        {showLogin ? (
          <button className="btn btn-dark" onClick={() => setShowLogin(false)}>Go to Register</button>
        ) : (
          <button className="btn btn-dark" onClick={() => setShowLogin(true)}>Go to Login</button>
        )}
      </div>
    </div>
  );
}