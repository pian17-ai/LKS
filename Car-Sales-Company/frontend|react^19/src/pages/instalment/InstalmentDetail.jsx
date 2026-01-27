import { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import {
    applyInstalment,
    getInstalmentDetail,
} from "../../api/installment.api";
import { getValidation } from "../../api/validation.api";

export default function InstalmentDetail() {
    const { id } = useParams();
    const [car, setCar] = useState(null);
    const [notes, setNotes] = useState(null);
    const [selected, setSelected] = useState(null);
    const [validation, setValidation] = useState(null);

    useEffect(() => {
    const fetchValidation = async () => {
        const val = await getValidation();
        setValidation(val);
    };
    fetchValidation();
}, []);

useEffect(() => {
    const fetchDetail = async () => {
        const res = await getInstalmentDetail(id);
        setCar(res.data.data);
    };
    fetchDetail();
}, [id]);


    if (!car) return <p>Loading...</p>;

    const submit = async (e) => {
    e.preventDefault();

    try {
        if (!validation || validation.status !== "accepted") {
            alert("Your data validator must be accepted by validator before");
            return;
        }

        if (car.current_instalment_count >= 1) {
            alert("Application for a instalment can only be once");
            return;
        }

        await applyInstalment({
            installment_id: car.id,
            months: selected.month,
            notes: notes
        });

        alert("Applying for Instalment successful");
    } catch (err) {
        console.error(err);
        if (err.response?.data?.message) {
            alert(err.response.data.message);
        } else {
            alert("Server Error");
        }
    }
};

    if (!car) {
        return <p>Car Not Found</p>;
    }

    return (
        <div className="container mt-4">
            <h1>
                <b>{car.car}</b> ({car.brand})
            </h1>
            <p>{car.description}</p>
            <h5>Price : {car.price}</h5>

            <hr />

            <h5>Installment</h5>

            <form onSubmit={submit}>
                {/* SELECT MONTH */}
                <div className="mb-3">
                    <label className="form-label">Month</label>
                    <select
                        className="form-select"
                        required
                        onChange={(e) => {
                            const month = Number(e.target.value);
                            const found = car.available_month.find(
                                (item) => item.month === month,
                            );
                            setSelected(found);
                        }}
                    >
                        <option value="">-- Select Month --</option>
                        {car.available_month.map((item) => (
                            <option key={item.month} value={item.month}>
                                {item.month} month
                            </option>
                        ))}
                    </select>
                </div>

                {/* NOMINAL */}
                {selected && (
                    <div className="mb-3">
                        <label className="form-label">Price/Month</label>
                        <input
                            className="form-control"
                            value={`Rp ${selected.nominal}`}
                            disabled
                        />
                    </div>
                )}

                {/* NOTES */}
                <div className="mb-3">
                    <label className="form-label">Notes</label>
                    <textarea
                        className="form-control"
                        rows="3"
                        placeholder="Tambahkan catatan (opsional)"
                        onChange={(e) => setNotes(e.target.value)}
                    />
                </div>

                <button className="btn btn-primary" disabled={!selected}>
                    Apply Instalment
                </button>
            </form>
        </div>
    );
}
