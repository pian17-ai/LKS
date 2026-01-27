import { useEffect, useState } from "react";
import { GetMyApplications } from "../../api/application.api";

export default function MyApplication() {
  const [applications, setApplications] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchApplications = async () => {
      try {
        const res = await GetMyApplications();

        setApplications(res.data.installments || []);
      } catch (err) {
        console.error(err);
        alert("Failed to fetch applications");
      } finally {
        setLoading(false);
      }
    };
    fetchApplications();
  }, []);

  if (loading) return <p>Loading...</p>;
  if (applications.length === 0) return <p>No applications found</p>;

  return (
    <div className="container mt-4">
      <h1>My Applications</h1>

      {applications.map((car) => (
        <div key={car.id} className="card m-3">
          <div className="card-body">
            <div className="row">
              {/* KIRI */}
              <div className="col-md-8">
                <h5 className="card-title">{car.car}</h5>
                <h6 className="card-subtitle mb-2 text-body-secondary">
                  {car.brand} - Rp {car.price.toLocaleString()}
                </h6>
                <p className="card-text">{car.description}</p>
              </div>

              {/* KANAN */}
              <div className="col-md-4 border-start">
                <h6 className="fw-bold">Application Info</h6>
                {car.applications ? (
                  <ul className="list-group list-group-flush">
                    <li className="list-group-item">
                      <b>Month:</b> {car.applications.month} bulan
                    </li>
                    <li className="list-group-item">
                      <b>Nominal:</b> Rp {car.applications.nominal.toLocaleString()}
                    </li>
                    <li className="list-group-item">
                      <b>Status:</b> {car.applications.apply_status}
                    </li>
                    {car.applications.notes && (
                      <li className="list-group-item">
                        <b>Notes:</b> {car.applications.notes}
                      </li>
                    )}
                  </ul>
                ) : (
                  <p>No application details</p>
                )}
              </div>
            </div>
          </div>
        </div>
      ))}
    </div>
  );
}
