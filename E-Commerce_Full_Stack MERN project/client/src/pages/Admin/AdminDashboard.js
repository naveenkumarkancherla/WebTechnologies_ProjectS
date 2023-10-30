import React from "react";
import AdminMenu from "../../components/Layout/AdminMenu";
import Layout from "./../../components/Layout/Layout";
import { useAuth } from "../../context/auth";
const AdminDashboard = () => {
  const [auth] = useAuth();
  return (
    <Layout>
      <div className="container-fluid m-3 p-3 dashboard">
        <div className="row">
          <div className="col-md-3">
            <AdminMenu />
          </div>
          <div className="col-md-9 shadow">
          <div className="card shadow w-75 p-3">
              <h3 style={{color:'blue'}} className="dashboard-title">Welcome, {auth?.user?.name}!</h3>
              <div className="dashboard-info">
                <h4 style={{color:'green'}}><strong>Email:</strong> {auth?.user?.email}</h4>
                <h4 style={{color:'green'}}><strong>Address:</strong> {auth?.user?.address || "Not provided"}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </Layout>
  );
};

export default AdminDashboard;