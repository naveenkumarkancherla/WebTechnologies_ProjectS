import React from 'react';

export const Cart = ({ cart, removeFromCart }) => {
  const getTotalPrice = () => {
    const totalPrice = cart.reduce((total, item) => total + item.price, 0);
    return totalPrice;
  };

  return (
    <div style={{ color: 'white' }} className="cart">
      <h2>Cart</h2>
      <br/>
      <div class="row">
        <div className="col-md-5">
      <ol className="card p-3 rounded">
        {cart.map((item) => (
          <li key={item.id}>
             <div className="d-flex align-items-center">
              <img src={item.imageSrc} alt={item.name}  className="mr-3 rounded" style={{ maxWidth: '100px' }} />
              <div><br/>
                <h5>{item.name}</h5>
                <p>₹{item.price}</p>
                <button className="btn btn-danger" onClick={() => removeFromCart(item.id)}>Remove</button>
              </div>
              </div>
          </li>
        ))}
      </ol>
      </div>
      </div>
      <div className="card-footer bg-dark p-2 rounded">
        <h3>Total Price: ₹{getTotalPrice()}</h3>
        <button
          onClick={() => {
              alert('Payment successful!');
          }}
          className="btn btn-success"
          disabled={getTotalPrice() === 0}
        >
          Payment
        </button>
      </div>
    </div>
  );
};
