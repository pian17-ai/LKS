import { BrowserRouter, Navigate, Route, Routes } from "react-router-dom";
import ProtectedRoute from "./router/ProtectedRoute";
import InstallmentList from "./pages/InstallmentList";
import Login from "./pages/Login";

export default function App() {
  return (
    <BrowserRouter>
      <Routes>
        {/* {default} */}
        <Route path="/" element={<Navigate to="/login" />}/>

        {/* {login} */}
        <Route path="/login" element={<Login/>}/>

        {/* {protected} */}
        <Route path="/installments" element={
          <ProtectedRoute>
            <InstallmentList/>
          </ProtectedRoute>
        } />
      </Routes>
    </BrowserRouter>
  )
}