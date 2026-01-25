import { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import { getInstalmentDetail } from "../../api/installment.api";
import { ApplyingInstallment } from "../../api/application.api";

export default function InstalmentDetail() {
    const { id } = useParams();
    const [car, setCar] = useState(null);
    const [months, setMonths] = useState(12);
    const [notes, setNotes] = useState("");

    useEffect(() => {
        getInstalmentDetail(id).then(res => setCar(res.data.instalment));
    }, [id]);

    const apply = async() => {
        await ApplyingInstallment({ instalment_id: id, months, notes });
        alert("Applying for Instalment successfully");
    };

    if(!car) return null;

    return (
        <div>
            <h2>{car.car}</h2>
            <select onChange={e => setMonths(e.target.value)}>
                {car.available_month.map(m => (
                    <option key={m.month} value={m.month}>{m.month} mname="" id=""onth</option>
                ))}
            </select>
            <textarea onChange={e => setNotes(e.target.value)}/>
            <button onClick={apply}>Apply</button>
        </div>
    );
}