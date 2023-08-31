import React from 'react';
import advertize from './advertize.mp4';
import backgroundImg from './background.jpg';
import tab1Img from './tab1.gif';
import tab2Img from './tab2.gif';  
export function Home() {
  return (
    <>
      <center>
        <div className="container">
          <div className="row justify-content-center align-items-center text-center">
            <div className="col-md-10">
              <h1 className="fw-bold display-1 text-danger mb-4">
                Welcome to WatchHaven!
              </h1>
              <h5 className="fw-bold fs-5 text-white">
                This is my Streaming Website which streams TV Shows and Movies
              </h5>
              <br />
              <div className="container py-2">
                <div
                  id="carouselExample"
                  className="carousel slide"
                  data-bs-ride="carousel"
                  style={{ height: '400px', width: '100%' }}
                >
                  <div className="carousel-inner">
                    <div className="carousel-item active">
                      <video
                        src={advertize}
                        className="d-block w-100"
                        alt="Slide 1"
                        autoPlay
                        muted
                        loop
                      />
                    </div>
                    <div className="carousel-item">
                      <img
                        src={backgroundImg}
                        className="d-block w-100"
                        alt="Slide 2"
                      />
                    </div>
                    <div className="carousel-item">
                      <img
                        src={tab1Img}
                        className="d-block w-100"
                        alt="Slide 3"
                      />
                    </div>
                    <div className="carousel-item">
                      <img
                        src={tab2Img}
                        className="d-block w-100"
                        alt="Slide 4"
                      />
                    </div>
                  </div>
                  <button
                    className="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExample"
                    data-bs-slide="prev"
                  >
                    <span
                      className="carousel-control-prev-icon"
                      aria-hidden="true"
                    ></span>
                    <span className="visually-hidden">Previous</span>
                  </button>
                  <button
                    className="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExample"
                    data-bs-slide="next"
                  >
                    <span
                      className="carousel-control-next-icon"
                      aria-hidden="true"
                    ></span>
                    <span className="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </center>
    </>
  );
}
