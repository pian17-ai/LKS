import { useEffect, useState } from "react";
import { getValidationStatus } from "../../api/validation.api";

export default function ValidationStatus() {
    const [data, setData] = useState(null);

    useEffect(() => {
        getValidationStatus().then(res => setData(res.data.validation));
    }, []);

    if (!data) return <p>No Validation yet</p>;

    return (
        <div>
            <p>Status: {data.status}</p>
            <p>Job: {data.job}</p>
            <p>Income: {data.income}</p>
        </div>
    );
}