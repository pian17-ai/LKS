export default function ValidationStatus({ validation }) {
  return (
    <div className="card p-4">
      <h4>Status Validation</h4>

      <p><b>Status:</b> {validation.status}</p>
      <p><b>Job:</b> {validation.job}</p>
      <p><b>Description:</b> {validation.job_description}</p>
      <p><b>Income:</b> Rp {validation.income}</p>
      <p><b>Reason:</b> {validation.reason_accepted}</p>

      {validation.validator && (
        <>
          <hr />
          <p><b>Validator:</b> {validation.validator.name}</p>
          <p><b>Role:</b> {validation.validator.role}</p>
        </>
      )}

      {validation.validator_notes && (
        <div className="alert alert-info mt-2">
          {validation.validator_notes}
        </div>
      )}
    </div>
  );
}
