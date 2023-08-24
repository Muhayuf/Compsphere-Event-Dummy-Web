@extends('layouts.main')

@section('container')
<!-- Inspired by: https://github.com/vibracode/ecommerce-website-html-css/tree/master -->
  <section id="hero">
    <h4>Welcome To</h4>
    <h2>COMPUTING ATMOSPHERE 2023</h2>
    <h1>The Biggest IT Event in President University</h1>
    <p>Technology for Better Tomorrow</p>
  </section>
  
  <section class="compe-section" class="section-p1">
      <h1>Competition List</h1>
      <p>Here List on COMPSPHERE 2023</p>
      <div class="compe-list">
          <div class="compe-item">
              <img src="img/cp.png" alt="product image" />
              <span>Competitive Programming</span>
              <h4>Problem Solving Programming Competition</h4> 
              <a href="/cp" class="join">Join Now<i class="fa-solid fa-angles-right go-icon"></i></a>
          </div>
          <div class="compe-item">
              <img src="img/ctf.png" alt="product image" />
              <span>Capture The Flag</span>
              <h4>Network/Information Security Competition</h4>
              <a href="/ctf" class="join">Join Now<i class="fa-solid fa-angles-right go-icon"></i></a>
          </div>
          <div class="compe-item">
              <img src="img/uiux.png" alt="product image" />
              <span>UI/UX</span>
              <h4>Design Competition for an Application</h4>  
              
              <a href="/uiux" class="join">Join Now<i class="fa-solid fa-angles-right go-icon"></i></a>
          </div>
          <div class="compe-item">
              <img src="img/erp.png" alt="product image" />
              <span>Enterprising Resource Planning</span>
              <h4>ERP Simulation Competition</h4>   
              <div class="joinBtn">
                  <a href="/erp" class="join">Join Now<i class="fa-solid fa-angles-right go-icon"></i></a>
                </div>            
          </div>
  </section>
@endsection