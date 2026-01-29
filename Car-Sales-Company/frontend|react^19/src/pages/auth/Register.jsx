import { useState } from "react";
import { registerApi } from "../../api/auth.api";
// import { useAuth } from "../../context/UseAuth";

export default function Register() {
    const [form, setForm] = useState({
        id_card_number: "",
        password: "",
        name: "",
        born_date: "",
        gender: "",
        address: "",
        regional_id: ""
    });

    const [submitting, setSubmitting] = useState(false);
    
    
    const submit = async (e) => {
        if (!form.id_card_number || !form.name || !form.password) {
            alert("Please fill all required fields");
            setSubmitting(false);
            return;
        }
        
        e.preventDefault();
        setSubmitting(true);
        try {
            await registerApi(form);
            alert("Register Success")
        } catch (err) {
            console.log(err);
            alert("Register Failed");
        } finally {
            setSubmitting(false);
        }
    }

    return (
        <div className="container p-4">
            <h1 className="mb-4">Register Society</h1>
            <form onSubmit={submit} className="mt-3">
                <div className="mb-3">
                    <input type="text" className="form-control" value={form.id_card_number} placeholder="Id Card Number" 
                    onChange={(e) => setForm({ ...form, id_card_number: e.target.value })} />
                </div>
                <div className="mb-3">
                    <input type="password" className="form-control" value={form.password} placeholder="Password" 
                    onChange={(e) => setForm({ ...form, password: e.target.value })} />
                </div>
                <div className="mb-3">
                    <input type="text" className="form-control" value={form.name} placeholder="Name"
                    onChange={(e) => setForm({ ...form, name: e.target.value })} />
                </div>
                <div className="mb-3">
                    <input type="date" className="form-control" value={form.born_date} placeholder="Born Date"
                    onChange={(e) => setForm({ ...form, born_date: e.target.value })} />
                </div>
                <div className="mb-3">
                    <select className="form-select" value={form.gender} onChange={(e) => setForm({ ...form, gender: e.target.value })} aria-label="Gender">
                        <option value="">Gender</option>
                        <option value="male">Male</option>
                        <option value="female" >Female</option>
                    </select>
                </div>
                <div className="mb-3">
                    <input type="text" className="form-control" value={form.address} placeholder="Address"
                    onChange={(e) => setForm({ ...form, address: e.target.value })} />
                </div>
                <div className="mb-3">
                    <input type="text" className="form-control" value={form.regional_id} placeholder="Regional Id"
                    onChange={(e) => setForm({ ...form, regional_id: e.target.value })} />
                </div>
                <button className="btn btn-primary" disabled={submitting}>{submitting ? "Submitting ..." : "Submit"}</button>
            </form>
        </div>
    )
}