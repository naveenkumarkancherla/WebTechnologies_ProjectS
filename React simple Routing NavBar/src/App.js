import React from 'react';
import { Link, Route, BrowserRouter, Routes } from 'react-router-dom';
import logo from './logo.png';
import { Home } from './Home';
import { About } from './About';
import { Contact } from './Contact';
import { LoginForm } from './LoginForm';

function App() {
  return (
    <BrowserRouter>
      <nav className="navbar navbar-dark bg-dark navbar-expand-lg">
        <Link className="navbar-brand" to="/">
          <img
            src={logo}
            width="100"
            height="50"
            style={{marginLeft:7}}
            className="d-inline-block align-top"
            alt="Logo"
          />
          <p style={{ fontWeight: '800',color:'red', }}>WatchHaven</p>
        </Link>
        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span className="navbar-toggler-icon"></span>
        </button>

        <div className="collapse navbar-collapse" id="navbarNav">
          <ul className="navbar-nav me-auto mb-2">
            <li className="nav-item">
              <Link style={{ fontWeight: '400',fontSize:25 }} className="nav-link" to="/">Home</Link>
            </li>
            <li className="nav-item">
              <Link style={{ fontWeight: '400',fontSize:25 }}  className="nav-link" to="/movies">Movies</Link>
            </li>
            <li className="nav-item">
              <Link style={{ fontWeight: '400',fontSize:25 }}  className="nav-link" to="/contact">Contact</Link>
            </li>
            <li className="nav-item">
              <Link style={{ fontWeight: '400',fontSize:25 }}  className="nav-link" to="/loginform">Login</Link>
            </li>
          </ul>
          <form className="d-flex" role="search">
        <input className="form-control me-2" type="search" placeholder="Search"/>
        <button className="btn btn-outline-light" type="submit">Search</button>
      </form>

        </div>
      </nav>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/movies" element={<About />} />
        <Route path="/contact" element={<Contact />} />
        <Route path="/loginform" element={<LoginForm />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
