import { useState } from "react";
import { requestValidation } from "../../api/validation.api";

export default function ValidationRequest() {
  const [form, setForm] = useState({});

    // const submit = async e => {
    //     e.preventDefault();
    //     await requestValidation(form);
    //     alert("Request data validation sent successfully");
    // };

    const submit = async(e) => {
        e.preventDefault();
        try {
            const res = await requestValidation(form);

            console.log("SUCCESS : ", res.data.message);
            alert("Validation success");
        } catch (err) {
            if (err.response) {
                // console.log("ERROR : ", err.response.status);
                // console.log("ERROR : ", err.response.data.message);

                alert(err.response.data.message);
            }
        }
    };

  return (
    <div className="container p-4">
      <h2 className="mb-3">Validation Request</h2>
      <form onSubmit={submit}>
        <div className="mb-3">
          <input
            className="form-control"
            type="text"
            placeholder="Job"
            onChange={(e) => setForm({ ...form, job: e.target.value })}
          />
        </div>
        <div className="mb-3">
          <input
            className="form-control"
            type="text"
            placeholder="Job Description"
            onChange={(e) =>
              setForm({ ...form, job_description: e.target.value })
            }
          />
        </div>
        <div className="mb-3">
          <input
            className="form-control"
            type="number"
            placeholder="Income"
            onChange={(e) => setForm({ ...form, income: e.target.value })}
          />
        </div>
        <div className="mb-3">
          <textarea
            className="form-control"
            type="text"
            placeholder="Reason Accepted"
            onChange={(e) =>
              setForm({ ...form, reason_accepted: e.target.value })
            }
          />
        </div>
        <div className="mb-3">
          <input
            className="form-control"
            type="text"
            placeholder="Validator"
            onChange={(e) => setForm({ ...form, validator_id: e.target.value })}
          />
        </div>
        <button className="btn btn-primary">Send Validation</button>
      </form>
    </div>
  );
}
