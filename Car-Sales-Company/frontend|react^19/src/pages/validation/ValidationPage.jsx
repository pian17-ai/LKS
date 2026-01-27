import { useEffect, useState } from "react";
import { getValidation } from "../../api/validation.api";
import ValidationStatus from "./ValidationStatus";
import ValidationRequest from "./ValidationRequest";

export default function ValidationPage() {
  const [validation, setValidation] = useState(null);
  const [loading, setLoading] = useState(true);

  const fetchValidation = async () => {
    try {
      const data = await getValidation();
      // console.log("VALIDATION:", data);
      setValidation(data);
    } catch (err) {
      console.error(err);
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    fetchValidation();
  }, []);

  if (loading) return <p>Loading...</p>;

  return (
    <div className="container mt-4">
      {validation ? (
        <ValidationStatus validation={validation} />
      ) : (
        <ValidationRequest onSuccess={fetchValidation} />
      )}
    </div>
  );
}
