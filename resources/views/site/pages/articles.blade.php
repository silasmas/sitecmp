@extends('site.layout.template')

@section("content")

<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="{{ asset('assets/site/images/bg/02.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Nos articles</h1>
          <p>Dernières parutions</p>
        </div>
          
     </div>
   </div>
  </div>
</section>

<section class="blog white-bg page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-lg-9">
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
              <img class="img-fluid" src="{{ asset('assets/site/images/blog/01.jpg') }}" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="article-details.html">Titre de l'article 1</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! </p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
<!-- ================================================ -->
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
            <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
              <div class="item">
                <img class="img-fluid" src="{{ asset('assets/site/images/blog/022.jpg') }}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{ asset('assets/site/images/blog/03.jpg') }}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{ asset('assets/site/images/blog/04.jpg') }}" alt="">
              </div>
            </div>
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="article-details.html">Titre de l'article 2</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
       <!-- ================================================ -->
      <div class="blog-entry mb-50">
        <div class="entry-soundcloud">
                <iframe style="height: 300px; width: 100%;" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118951274&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
              </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost Audio Soundcloud</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>

<!-- ================================================ -->
       <div class="blog-entry mb-50">
          <div class="blog-entry-html-video clearfix">
            <video style="width:100%;height:100%;" id="player1" poster="video/video.jpg" controls preload="none">
              <source type="video/mp4" src="{{ asset('assets/site/video/video.mp4') }}" />
              <source type="video/webm" src="{{ asset('assets/site/video/video.webm') }}" />
              <source type="video/ogg" src="{{ asset('assets/site/video/video.ogv') }}" />
            </video>
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost with Self Hosted Video (HTML5 Video)</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
        <hr>


<!-- ================================================ -->
       <div class="blog-entry mb-50">
           <div class="clearfix">
            <ul class="grid-post">
                 <li>
                  <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('assets/site/images/blog/05.jpg') }}" alt="">
                     </div>
                  </li>
                 <li>
                  <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('assets/site/images/blog/06.jpg') }}" alt="">
                     </div>
                  </li>
                  <li>
                  <div class="portfolio-item">
                     <img class="img-fluid" src="{{ asset('assets/site/images/blog/07.jpg') }}" alt="">
                     </div>
                  </li>
                  <li>
                  <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('assets/site/images/blog/08.jpg') }}" alt="">
                     </div>
                  </li>
              </ul>
            </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost With Image Grid Gallery Format </a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>



<!-- ================================================ -->
     <div class="blog-entry mb-50">
            <div class="blog-entry-vimeo">
             <div class="js-video [vimeo, widescreen]">
              <iframe src="https://player.vimeo.com/video/176916362"></iframe>
             </div>
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost with vimeo Video </a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>

<!-- ================================================ -->


<div class="blog-entry blockquote mb-50">
          <div class="entry-blockquote clearfix">
              <blockquote class="mt-60 blockquote">
                  The trouble with programmers is that you can never tell what a programmer is doing until it's too late. The future belongs to a different kind of person with a different kind of mind: artists, inventors, storytellers-creative and holistic ‘right-brain’ thinkers whose abilities mark the fault line between who gets ahead and who doesn’t.
                  <cite class="text-white"> – Daniel Pink</cite>
              </blockquote>
          </div>
          <div class="blog-detail mt-30">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost With blockquote </a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                  </ul>
              </div>
              <div class="entry-share mt-20 clearfix">
                  <div class="entry-button">
                      <a class="button arrow white" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong class="text-white">Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
        </div>



<!-- ================================================ -->
    <div class="blog-entry mb-50">
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost Without Image</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
   <!-- ================================================ -->
          <div class="entry-pagination mb-40">
            <nav aria-label="Page navigation example text-center">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          </div>
       </div>
<!-- ================================================ -->
      <div class="col-lg-3 ">
          <div class="sidebar-widget">
            <h6 class="mb-20">Recherche</h6>
              <div class="widget-search">
                  <i class="fa fa-search"></i>
                  <input type="search" class="form-control" placeholder="Tapez un text...." />
                </div>
          </div>

        <div class="sidebar-widget">
            <h6 class="mt-40 mb-20">Recents articles </h6>
            <div class="recent-post clearfix">
              <div class="recent-post-image">
                <img class="img-fluid" src="{{ asset('assets/site/images/blog/01.jpg') }}" alt="">
              </div>
             <div class="recent-post-info">
              <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
              <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
             </div>
            </div>
            <div class="recent-post clearfix">
              <div class="recent-post-image">
                <img class="img-fluid" src="{{ asset('assets/site/images/blog/02.jpg') }}" alt="">
              </div>
             <div class="recent-post-info">
              <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
              <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
             </div>
            </div>
            <div class="recent-post clearfix">
              <div class="recent-post-image">
                <img class="img-fluid" src="{{ asset('assets/site/images/blog/03.jpg') }}" alt="">
              </div>
             <div class="recent-post-info">
              <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
              <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
             </div>
            </div>
        </div>
        <div class="sidebar-widget clearfix">
          <h6 class="mt-40 mb-20">Archives</h6>
          <ul class="widget-categories">
            <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2021</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2021</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2021</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2021</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> August 2021</a></li>
          </ul>
      </div>
      <div class="sidebar-widget">
       <h6 class="mt-40 mb-20">Tags</h6>
        <div class="widget-tags">
         <ul>
          <li><a href="#">Ken Luamba</a></li>
          <li><a href="#">Roland Dalo</a></li>
          <li><a href="#">CMP</a></li>
          <li><a href="#">Evangile</a></li>
          <li><a href="#">Dimanche</a></li>
          <li><a href="#">Foi</a></li>
          <li><a href="#">Sacerdoce</a></li>
        </ul>
      </div>
     </div>

      

       <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Photo gallery</h6>
          <div class="widget-gallery popup-gallery clearfix">
            <ul>
              <li>
                <a class="portfolio-img" href="images/portfolio/small/01.jpg">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/01.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/02.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/02.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/03.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/03.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/04.gif') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/04.gif') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/05.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/06.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/06.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/07.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/07.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/08.gif') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/08.gif') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/09.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/09.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/10.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/10.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/01.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/01.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/02.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/02.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/03.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/03.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/04.gif') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/04.gif') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/05.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="" >
                  </a>
             </li>
             <li>
                <a class="portfolio-img" href="{{ asset('assets/site/images/portfolio/small/06.jpg') }}">
                    <img class="img-fluid" src="{{ asset('assets/site/images/portfolio/small/06.jpg') }}" alt="" >
                  </a>
             </li>
            </ul>
          </div>
       </div>
        <div class="sidebar-widget">
         <h6 class="mt-40 mb-20">Newsletter</h6>
          <div class="widget-newsletter">
          <div class="newsletter-icon">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="newsletter-content">
            <i>Restez à jour sur toutes nos parutions</i>
          </div>
          <div class="newsletter-form mt-20">
              <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email">
              </div>
             <a class="button d-grid" href="#">Soumettre</a>
          </div>
        </div>
       </div>
       
    </div>
<!-- ================================= -->
     </div>
    </div>
  </section>

<section class="contact-box contact-box-top theme-bg" style="margin-top: 50px;">
  <div class="container">
    <div class="row pt-20 pb-40">
      <div class="col-md-4 sm-mb-30">
        <div class="contact-box">
          <div class="contact-icon">
            <i class="ti-map text-white"></i>
          </div>
          <div class="contact-info">
            <h5 class="text-white"> Adresse</h5>
            <span class="text-white">Details</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 sm-mb-30">
        <div class="contact-box">
          <div class="contact-icon">
            <i class="ti-headphone text-white"></i>
          </div>
          <div class="contact-info">
            <h5 class="text-white">Téléphone</h5>
            <span class="text-white">Heure de rdv</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-box">
          <div class="contact-icon">
            <i class="ti-email text-white"></i>
          </div>
          <div class="contact-info">
            <h5 class="text-white">Email</h5>
          <span class="text-white">Fax</span>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection