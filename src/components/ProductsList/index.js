import React, { useState, useEffect, useMemo } from "react";

import Products from "../../models/Products";
import ZoomImage from "../ZoomImage";

const ProductList = ({ data = [] }) => {
  const [indexToShow, setIndexToShow] = useState(0);
  const [products, setProducts] = useState(data);

  const product = useMemo(() => {
    const currentProduct = products[indexToShow];

    //to cater for loading initial state
    return currentProduct != null ? currentProduct : {};
  }, [products, indexToShow]);

  const goToIndex = index => {
    setIndexToShow(index);
  };

  useEffect(() => {
    Products.all().then(products => {
      setProducts(products);
    });
  }, []);

  return (
    <div>
      <div className="main-container">
        <header>
          <a href="#main" className="logo">
            <img src="https://i.imgur.com/TSBasZJ.jpg" alt="" />
          </a>
          <div className="thenav">
            <ul class="nav-ul section group">
              <li class="col span_1_of_4">
                <a href="#men">Men</a>
              </li>
              <li class="col span_1_of_4">
                <a href="#women">Women</a>
              </li>
              <li class="col span_1_of_4">
                <a href="#kids">Kids</a>
              </li>
              <li class="col span_1_of_4">
                <a href="#ftw">FTW</a>
              </li>
            </ul>
          </div>
          <div className="search-bar">
            <form action="">
              <input type="text" placeholder="Search..." />
              <button type="submit">
                <i className="fa fa-search" />
              </button>
            </form>
          </div>
        </header>
        <section className="main-body">
          <div className="main-product-info">
            <ZoomImage src={product.smallPicture} />
            <h4>
              {product.productTitle} <br />
              <small> by {product.brand}</small>
            </h4>
            <p>
              {product.price} {product.currency}
            </p>
          </div>
          <div className="sizes">
            <p>
              Available Sizes: <span>{product.availSize}</span> <br />
              Neck type: <span>{product.sleevType}</span>
            </p>
          </div>
          <div className={product.isActive}>
            {products.map((product, index) => {
              return (
                <button
                  className={product.color}
                  onClick={() => goToIndex(index)}
                />
              );
            })}
          </div>
          <button className="a2c">Add to cart</button>

          <div className="description">
            <h5>Product description</h5>
            <p>{product.descreption}</p>
          </div>

          <hr />
          <h5>Products Complement your selection</h5>

          <div className="related-products section group">
            <div className="col span_1_of_4">
              <img src={product.thumb1} alt="" />
            </div>
            <div className="col span_1_of_4">
              <img src={product.thumb2} alt="" />
            </div>
            <div className="col span_1_of_4">
              <img src={product.thumb3} alt="" />
            </div>
            <div className="col span_1_of_4">
              <img src={product.thumb4} alt="" />
            </div>
          </div>
        </section>
      </div>
    </div>
  );
};

export default ProductList;
