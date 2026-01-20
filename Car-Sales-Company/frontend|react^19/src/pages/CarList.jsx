import { useEffect, useState } from "react";
import { getCars } from "../api/car";

export default function CarList() {
    const [cars, setCars] = useState([]);

    useEffect(() => {
        getCars().then(data => {
            setCars(data);
        });
    }, []);

    return (
        <div>
            <h2>Car Installment List</h2>

            <ul>
                {cars.map(car => (
                    <li key={car.id}>
                        {car.cars} - Rp {car.price}
                    </li>
                ))}
            </ul>
        </div>
    )
}