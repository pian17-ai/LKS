import { useEffect, useState } from "react";
import { getInstalmentCars } from "../../api/installment.api";

export default function InstalmentList() {
  const [cars, setCars] = useState([]);

  useEffect(() => {
    getInstalmentCars().then((res) => setCars(res.data));
  }, []);

  return (
    <div className="container">
        <h2 className="my-4">Instalments Cars</h2>
      {cars.map((car) => (
        <div key={car.id}>
          <div className="card m-4">
            <div className="card-body">
              <h5 className="card-title">{car.car}</h5>
              <h6 className="card-subtitle mb-2 text-body-secondary">
                Rp {car.price}
              </h6>
              <p className="card-text">{car.description}</p>
              <a href="#" className="card-link btn btn-primary">
                Instalment
              </a>
            </div>
          </div>
        </div>
      ))}
    </div>
  );
}
