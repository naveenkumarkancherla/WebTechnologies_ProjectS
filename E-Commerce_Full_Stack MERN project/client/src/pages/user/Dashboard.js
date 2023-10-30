import React from "react";
import Layout from "../../components/Layout/Layout";
import UserMenu from "../../components/Layout/UserMenu";
import { useAuth } from "../../context/auth";

const Dashboard = () => {
  const [auth] = useAuth();

  return (
    <Layout title={"Dashboard - Ecommerce App"}>
      <div className="container-fluid m-3 p-3 dashboard">
        <div className="row">
          <div className="col-md-3">
            <UserMenu />
          </div>
          <div className="col-md-9">
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

export default Dashboard;
