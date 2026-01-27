import { Route, Routes } from "react-router-dom";
import Login from "../pages/auth/Login";
import InstalmentList from "../pages/instalment/InstalmentList";
import MyApplication from "../pages/application/MyApplication";
import MainLayout from "../layouts/MainLayout";
import InstalmentDetail from "../pages/instalment/InstalmentDetail";
import ValidationPage from "../pages/validation/ValidationPage";

export default function AppRoutes() {
    return (
        <Routes>
            <Route path="/" element={<Login />} />

            <Route element={<MainLayout/>}>
                <Route path="/validation" element={<ValidationPage />} />
                <Route path="/instalments" element={<InstalmentList />} />
                <Route path="/instalment/:id" element={<InstalmentDetail />} />
                <Route path="/applications" element={<MyApplication />} />
            </Route>
        </Routes>
    );
}
