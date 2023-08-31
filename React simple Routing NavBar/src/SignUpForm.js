import React, { useState } from 'react';

export function SignUpForm() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [message, setMessage] = useState('');

  const handleSignUp = (e) => {
    e.preventDefault();
    if (localStorage.getItem(email)) {
      setMessage('User already exists. Please sign in.');
    } else {
      localStorage.setItem(email, password);
      setMessage('Sign up successful! Please sign in.');
      setEmail('');
      setPassword('');
    }
  };

  return (
    <div className="card sign-up">
      <div className="card-body">
        <h2 className="card-title">Sign Up</h2>
        <form onSubmit={handleSignUp}>
          <div className="form-group">
            <label htmlFor="signup-email">Email</label>
            <input
              type="email"
              id="signup-email"
              className="form-control"
              required
              value={email}
              onChange={(e) => setEmail(e.target.value)}
            />
          </div>
          <div className="form-group">
            <label htmlFor="signup-password">Password</label>
            <input
              type="password"
              id="signup-password"
              className="form-control"
              required
              value={password}
              onChange={(e) => setPassword(e.target.value)}
            />
          </div>
          <button type="submit" className="btn btn-primary">
            Sign Up
          </button>
          {message && <p className="mt-2" style={{ color: 'green' }}>{message}</p>}
        </form>
      </div>
    </div>
  );
}
