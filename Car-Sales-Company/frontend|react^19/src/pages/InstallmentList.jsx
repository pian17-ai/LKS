import { useEffect, useState } from "react";
import api from "../services/api";
import { Link } from "react-router-dom";

export default function Cars() {
  const [cars, setCars] = useState([]);

  useEffect(() => {
    api.get("/cars")
      .then(res => {
        setCars(res.data.data);
      });
  }, []);

  return (
    <div className="p-6">
      <h1 className="text-2xl font-bold mb-4">Daftar Mobil</h1>

      {cars.map(car => (
        <div key={car.id} className="border p-4 mb-4 rounded">
          <h2 className="text-xl font-semibold">{car.car}</h2>
          <p>{car.brand}</p>

          <Link
            to={`/cars/${car.id}`}
            className="text-blue-500"
          >
            Lihat Cicilan
          </Link>
        </div>
      ))}
    </div>
  );
}
