import { useState } from "react";
import { submitValidation } from "../../api/validation.api";

export default function ValidationRequest({ onSuccess }) {
  const [form, setForm] = useState({
    job: "",
    job_description: "",
    income: "",
    reason_accepted: "",
    validator_id: ""
  });
  const [submitting, setSubmitting] = useState(false); // state untuk mencegah alert 2x

  const submit = async (e) => {
    e.preventDefault();
    setSubmitting(true);

    try {
      await submitValidation(form);
      alert("Request data validation sent successful");
      onSuccess();
    } catch (err) {
      console.error(err);
      alert("Failed sent validation data");
    } finally {
      setSubmitting(false);
    }
  };

  return (
    <form onSubmit={submit} className="mt-3">
      <div className="mb-3">
        <input
          className="form-control"
          placeholder="Job"
          onChange={(e) => setForm({ ...form, job: e.target.value })}
          required
        />
      </div>

      <div className="mb-3">
        <input
          className="form-control"
          placeholder="Job Description"
          onChange={(e) =>
            setForm({ ...form, job_description: e.target.value })
          }
          required
        />
      </div>

      <div className="mb-3">
        <input
          type="number"
          className="form-control"
          placeholder="Income"
          onChange={(e) => setForm({ ...form, income: e.target.value })}
          required
        />
      </div>

      <div className="mb-3">
        <textarea
          className="form-control"
          placeholder="Reason Accepted"
          onChange={(e) =>
            setForm({ ...form, reason_accepted: e.target.value })
          }
          required
        />
      </div>

      <div className="mb-3">
        <input
          className="form-control"
          placeholder="Validator ID"
          onChange={(e) =>
            setForm({ ...form, validator_id: e.target.value })
          }
          required
        />
      </div>

      <button className="btn btn-primary" disabled={submitting}>
        {submitting ? "Submitting..." : "Submit Validation"}
      </button>
    </form>
  );
}
