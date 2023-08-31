import React from 'react';

export const Card = ({ title, imageSrc, addToCart, price }) => (
  <div className="card">
    <img src={imageSrc} alt={title} className="card-img-top" />
    <div className="card-body">
      <h3 className="card-title">{title}</h3>
      <h2 className="card-text">₹{price}</h2>
      <button className="btn btn-primary" onClick={addToCart}>
        Add to Cart
      </button>
    </div>
  </div>
);