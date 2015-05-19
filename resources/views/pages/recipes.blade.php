@extends('layouts.default')

@section('content')
<title>RECIPES</title>
<div class="inner">
          <div class="main">
              <section id="content">
                  <div class="indent">
                    <div class="wrapper">
                        <article class="col-1">
                              <div class="indent-left">
                                <h3>Advice from Our Cook</h3>
                                  <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h6>
                                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                  <div class="wrapper p3">
                                    <figure class="img-indent"><img src="{{ asset('images/page4-img1.jpg') }}" alt="" /></figure>
                                      <div class="extra-wrap">
                                        <h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</h6>
                                          <p class="p1">Totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                                          <a class="button-2" href="#">Read More</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="bg">
                                  <div class="padding">
                                      <h3 class="p2">Last Added</h3>
                                      <div class="wrapper indent-bot">
                                        <div class="column-1">
                                            <div class="wrapper">
                                                <figure class="img-indent"><a href="#"><img src="{{ asset('images/page4-img2.jpg') }}" alt="" /></a></figure>
                                                  <div class="extra-wrap">
                                                    <div class="margin-top">
                                                          <h6>Sedut perspiciatis</h6>
                                                          <p class="p1">Totamrem aperiam eaque ipsa quae inventore veritatis.</p>
                                                          <a class="link" href="#">Read More</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="column-2">
                                            <div class="wrapper">
                                                <figure class="img-indent"><a href="#"><img src="{{ asset('images/page4-img3.jpg') }}" alt="" /></a></figure>
                                                  <div class="extra-wrap">
                                                    <div class="margin-top">
                                                          <h6>Voluptatem accusan</h6>
                                                          <p class="p1">Aperiam eaqueipsa quae ab illo inventore veritatis.</p>
                                                          <a class="link" href="#">Read More</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="wrapper">
                                        <div class="column-1">
                                            <div class="wrapper">
                                                <figure class="img-indent"><a href="#"><img src="{{ asset('images/page4-img4.jpg') }}" alt="" /></a></figure>
                                                  <div class="extra-wrap">
                                                    <div class="margin-top">
                                                          <h6>Sed ut perspiciatis unde</h6>
                                                          <p class="p1">Emoim ipsam voluptatem quia voluptas aspernatur.</p>
                                                          <a class="link" href="#">Read More</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="column-2">
                                            <div class="wrapper">
                                                <figure class="img-indent"><a href="#"><img src="{{ asset('images/page4-img5.jpg') }}" alt="" /></a></figure>
                                                  <div class="extra-wrap">
                                                    <div class="margin-top">
                                                          <h6>Enim ad minima veniam</h6>
                                                          <p class="p1">Quis autem vel eum iure reprehenderit qui.</p>
                                                          <a class="link" href="#">Read More</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>
                          <article class="col-2">
                            <h3 class="border-bot">New Recipes</h3>
                              <div class="img-indent-bot">
                                  <h6>Sed perspiciatis unde </h6>
                                  <p class="p1">Omnis natus error sit voluptatem accusantium doloremque laudantium</p>
                                  <a class="link" href="#">Read More</a>
                              </div>
                              <div class="img-indent-bot">
                                <h6>Abillo inventore veritatis </h6>
                                  <p class="p1">Et  corporis suscipit laboriotecto beatae vitae dicta sunt explicabo.</p>
                                  <a class="link" href="#">Read More</a>
                              </div>
                              <div class="p3">
                                <h6>Aut oditut fugit sed quia </h6>
                                  <p class="p1">Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                  <a class="link" href="#">Read More</a>
                              </div>
                              <a href="#"><img src="{{ asset('images/banner-1.jpg') }}" alt="" /></a>
                          </article>
                      </div>
                  </div>
              </section>
              <div class="block"></div>
          </div>
      </div>
  </div>
@stop
