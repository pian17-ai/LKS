import { useState } from "react";
import { useAuth } from "../../context/UseAuth";

export default function Login() {
  const { login } = useAuth();
  const [idCard, setIdCard] = useState("");
  const [password, setPassword] = useState("");

  const submit = async (e) => {
    e.preventDefault();

    console.log("FORM LOGIN:", {
      idCard,
      password,
      type: typeof idCard,
    });

    try {
      await login(idCard, password);
      alert("Login success");
    } catch (err) {
      console.error("LOGIN ERROR:", err);
      alert("ID Card Number atau Password salah");
    }
  };

  return (
    <div className="container p-4">
      <h2 className="mb-4">Login Society</h2>
      <form onSubmit={submit}>
        <div className="mb-3">
          <input
            className="form-control"
            type="text"
            placeholder="ID Card Number"
            onChange={(e) => setIdCard(e.target.value)}
          />
        </div>
        <div className="mb-3">
          <input
            className="form-control"
            type="password"
            placeholder="Password"
            onChange={(e) => setPassword(e.target.value)}
          />
        </div>
        <button className="btn btn-primary">Login</button>
      </form>
    </div>
  );
}
