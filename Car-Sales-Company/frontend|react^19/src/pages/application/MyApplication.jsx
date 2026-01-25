import { useEffect, useState } from "react";
import { GetMyApplications } from "../../api/application.api";

export default function MyApplication() {
    const [data, setData] = useState([]);

    useEffect(() => {
        GetMyApplications().then(res => setData(res.data.installments));
    }, []);

    return data.map(i => {
        <div key={i.id}>
            <h3>{i.car}</h3>
            {i.application.map(a => {
                <p key={a.month}>{a.month} - {a.apply_status}</p>
            })}
        </div>
    });
}