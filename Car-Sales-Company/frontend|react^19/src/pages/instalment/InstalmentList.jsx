import { useEffect, useState } from "react";
import { getInstalmentCars } from "../../api/installment.api";
import { Link } from "react-router-dom";

export default function InstalmentList() {
  const [cars, setCars] = useState([]);

  useEffect(() => {
    getInstalmentCars().then((res) => setCars(res.data));
  }, []);

  return (
    <div className="container">
      <h1 className="my-4">Cars</h1>
      {cars.map((car) => (
        <div key={car.id}>
          <div key={car.id} className="card m-4">
            <div className="card-body">
              <div className="row">
                {/* KIRI */}
                <div className="col-md-8">
                  <h5 className="card-title">{car.car}</h5>
                  <h6 className="card-subtitle mb-2 text-body-secondary">
                    Rp {car.price}
                  </h6>
                  <p className="card-text">{car.description}</p>
                  <Link to={`/instalment/${car.id}`} className="btn btn-warning">
                    Detail
                  </Link>
                </div>

                {/* KANAN */}
                <div className="col-md-4 border-start">
                  <h6 className="fw-bold">Available Month</h6>

                  <ul className="list-group list-group-flush">
                    {car.available_month.map((item, index) => (
                      <li key={index} className="list-group-item">
                        {item.month} bulan
                      </li>
                    ))}
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      ))}
    </div>
  );
}
