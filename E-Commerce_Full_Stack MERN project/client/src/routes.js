// src/routes.js
import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

import Home from './pages/Home';
import PropertyDetail from './pages/PropertyDetail';
import UserProfile from './pages/UserProfile';


function AppRoutes() {
  return (
    <Router>
      <Routes>
        <Route exact path="/" component={Home} />
        <Route path="/property/:id" component={PropertyDetail} />
        <Route path="/user/profile" component={UserProfile} />
         
      </Routes>
    </Router>
  );
}

export default AppRoutes;
