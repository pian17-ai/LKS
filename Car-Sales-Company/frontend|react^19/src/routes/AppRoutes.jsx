import { Route, Routes } from "react-router-dom";
import Login from "../pages/auth/Login";
import ValidationRequest from "../pages/validation/ValidationRequest";
import InstalmentList from "../pages/instalment/InstalmentList";
import MyApplication from "../pages/application/MyApplication";
import ValidationStatus from "../pages/validation/ValidationStatus";
import MainLayout from "../layouts/MainLayout";
import InstalmentDetail from "../pages/instalment/InstalmentDetail";

export default function AppRoutes() {
    return (
        <Routes>
            <Route path="/" element={<Login />} />

            <Route element={<MainLayout/>}>
                <Route path="/validation" element={<ValidationRequest />} />
                <Route path="/validation/status" element={<ValidationStatus />} />
                <Route path="/instalments" element={<InstalmentList />} />
                <Route path="/instalment/:id" element={<InstalmentDetail />} />
                <Route path="/applications" element={<MyApplication />} />
            </Route>
        </Routes>
    );
}
