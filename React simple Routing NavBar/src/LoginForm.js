import React, { useState } from 'react';
import { SignUpForm } from './SignUpForm';
import { Home } from './Home.js';
import { Routes, Route, Link } from 'react-router-dom';

export function LoginForm() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [authenticated, setAuthenticated] = useState(false); // Initialize as false
  const [errorMessage, setErrorMessage] = useState('');

  const handleSignIn = (e) => {
    e.preventDefault();
    const storedPassword = localStorage.getItem(email);
    if (storedPassword === password) {
      setAuthenticated(true);
      setErrorMessage('');
    } else {
      setErrorMessage('Sign in failed. Please check your email and password.');
    }
  };

  return (
    <div className="container mt-5">
      {!authenticated ? (
        <div className="row">
          <div className="col-md-6 offset-md-3">
            <div className="card sign-in">
              <div className="card-body">
                <h2 className="card-title">Sign In</h2>
                <form onSubmit={handleSignIn}>
                  <div className="form-group">
                    <label htmlFor="signin-email">Email</label>
                    <input
                      type="email"
                      id="signin-email"
                      className="form-control"
                      required
                      value={email}
                      onChange={(e) => setEmail(e.target.value)}
                    />
                  </div>
                  <div className="form-group">
                    <label htmlFor="signin-password">Password</label>
                    <input
                      type="password"
                      id="signin-password"
                      className="form-control"
                      required
                      value={password}
                      onChange={(e) => setPassword(e.target.value)}
                    />
                  </div>
                  <button type="submit" className="btn btn-primary">
                    Sign In
                  </button>
                  {errorMessage && (
                    <p className="mt-2" style={{ color: 'red' }}>
                      {errorMessage}
                    </p>
                  )}
                </form>
              </div>
            </div>
          </div>
        </div>
      ) : (
        <Routes>
          <Route path="/" element={<Home />} />
        </Routes>
      )}
      <div className="row mt-3">
        <div className="col-md-6 offset-md-3">
          <SignUpForm />
        </div>
      </div>
    </div>
  );
}
