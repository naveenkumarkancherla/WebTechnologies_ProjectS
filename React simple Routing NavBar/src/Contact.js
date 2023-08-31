import React from 'react'

export function Contact() {
  return (
    <div style={{color:'white'}} >
        <center>
        <div className="container mt-5">
      <div className="card" style={{ height: '225px', width: '90%', borderRadius: '10px' }}>
        <div className="card-body">
          <h1 className="display-1" style={{fontWeight:'900',padding:20,letterSpacing: '2px'}}>WatchHaven</h1>
          <p style={{fontWeight:'900',padding:20,letterSpacing: '3px'}}>Contact below if have any Queries</p>
        </div>
      </div>
    </div><br/>

<footer className="footer bg-dark text-white">
  <div className="container">
    <p>Questions? Call 000-800-919-1694</p>
    <div className="row">
      <div className="col-md-3">
        <h5>Company</h5>
        <ul className="list-unstyled">
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Ways To Watch</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">WatchHaven Originals</a></li>
        </ul>
      </div>
      <div className="col-md-3">
        <h5>Help</h5>
        <ul className="list-unstyled">
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms Of Use</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div className="col-md-3">
        <h5>Account</h5>
        <ul className="list-unstyled">
          <li><a href="#">Account</a></li>
          <li><a href="#">Redeem Gift Cards</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Speed Test</a></li>
        </ul>
      </div>
      <div className="col-md-3">
        <h5>Connect</h5>
        <ul className="list-unstyled">
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Buy Gift Cards</a></li>
          <li><a href="#">Cookie Preferences</a></li>
          <li><a href="#">Legal Notices</a></li>
        </ul>
      </div>
    </div>
    <div className="text-center">
      <h5>FAQs</h5>
      <a className="text-blue" href="#">Click here to read frequently asked questions</a>
    </div>
    <p className="text-center mt-3">&copy; WatchHaven All rights Reserved By Mr. Kancherla Naveenkumar</p>
  </div>
</footer>

        </center>
      
      
    </div>
  )
}
