import React, { useState } from 'react';
import {Card} from './Card';
import {Cart} from './Cart';

const products = [
  { id: 1, name: 'Movie 1', imageSrc: '/images/image1.gif', price: 100 },
  { id: 2, name: 'Movie 2', imageSrc: '/images/image2.gif', price: 150 },
  { id: 3, name: 'Movie 3', imageSrc: '/images/image3.gif', price: 200 },
  { id: 4, name: 'Movie 4', imageSrc: '/images/image4.gif', price: 340 },
  { id: 5, name: 'Movie 5', imageSrc: '/images/image5.gif', price: 350 },
  { id: 6, name: 'Movie 6', imageSrc: '/images/image6.gif', price: 250 },
];

export const About = () => {
    const [cart, setCart] = useState([]);

  const addToCart = (product) => {
    setCart([...cart, product]);
  };

  const removeFromCart = (productId) => {
    const updatedCart = cart.filter((item) => item.id !== productId);
    setCart(updatedCart);
  };

  return (
    <div className="container">
      <h1 align="center" style={{color:'white',fontWeight:'600'}}>Book now</h1>
      <div className="row">
        {products.map((product) => (
          <div key={product.id} className="col-md-4 mb-4">
            <Card
              title={product.name}
              imageSrc={product.imageSrc}
               price={product.price}
              addToCart={() => {
                alert('Added to cart!');
                addToCart(product)
            }}
            />
          </div>
        ))}
      </div>
      <Cart cart={cart} removeFromCart={removeFromCart} />
    </div>
  );
};