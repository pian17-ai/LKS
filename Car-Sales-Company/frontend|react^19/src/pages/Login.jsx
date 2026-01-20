import { useState } from "react";
import { login } from "../api/auth";

export default function Login({onLogin}) {
    const [id_card_number, setIdCardNumber] = useState("");
    const [password, setPassword] = useState("");

    async function handleSubmit (e) {
        e.preventDefault();

        const result = await login(id_card_number, password);

        if (result.token) {
            localStorage.setItem("token", result.token);
            onLogin();
        } else {
            alert("Login fail");
        }
    }

    return (
        <div>
            <h2>Login</h2>

            <form onSubmit={handleSubmit}>
                <input type="numeric" placeholder="Id Card Number" value={id_card_number} onChange={e => setIdCardNumber(e.target.value)}/>
                <input type="text" placeholder="Password" value={password} onChange={e => setPassword(e.target.value)} />

                <button type="submit">Login</button>
            </form>
        </div>
    )
}