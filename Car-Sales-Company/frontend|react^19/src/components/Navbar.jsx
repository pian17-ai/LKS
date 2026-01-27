import { Link, useNavigate } from "react-router-dom";
import { useAuth } from "../context/UseAuth";

export default function Navbar() {
    const { user, logout } = useAuth();
    const navigate = useNavigate();

    const handleLogout = async () => {
        await logout();
        navigate("/");
    };
    // console.log("USER NAVBAR:", user);


    return (
        <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
            <div className="container">
                <Link className="navbar-brand" to="/">
                    Car Instalment
                </Link>

                <div className="collapse navbar-collapse justify-content-end">
                    <ul className="navbar-nav">

                        {user && (<>

                            <li className="nav-item">
                                <Link className="nav-link" to={"/instalments"}>Cars</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to={"/validation"}>Validation</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link" to={"/aplications"} >Instalment</Link>
                            </li>
                            <li className="nav-item dropdown">
                                <button
                                    className="nav-link dropdown-toggle btn btn-link text-white"
                                    data-bs-toggle="dropdown"
                                >
                                    {user.name}
                                </button>

                                <ul className="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <button
                                            className="dropdown-item text-danger"
                                            onClick={handleLogout}
                                        >
                                            Logout
                                        </button>
                                    </li>
                                </ul>
                            </li>
                        </>
                        )}
                    </ul>
                </div>
            </div>
        </nav>
    )
}