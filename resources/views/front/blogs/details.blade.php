@extends('front.fixe')
@section('titre','Detail')
@section('body')

<main>
   @php
    $config = DB::table('configs')->first();
    $service =DB::table('services')->get();
    $comments = DB::table('comments')->get();

@endphp


   <main>

      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
         data-background="assets/img/breadcrumb/breadcrumb.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content z-index text-center">
                     <div class="breadcrumb__section-title-box">
                        <h3 class="breadcrumb__title">Blog Details</h3>
                     </div>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr"><i>/</i></span>
                        <span class="dvdr">Pages</span>
                        <span class="dvdr"><i>/</i></span>
                        <span><b>Blog Details</b></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- postbox area start -->
      <section class="postbox__area pt-150 pb-150 fix">
         <div class="container">
            <div class="row">
               <div class="col-xxl-7 col-xl-8 col-lg-8">
                  <div class="postbox__wrapper">
                     <article class="postbox__item format-image transition-3">
                        <h4 class="postbox__title">{{$post->title}}</h4>
                        <div class="postbox__content mb-50">
                           <div class="tp-blog-bottom-box d-flex align-items-center mb-30">
                              <div class="tp-blog-avatar-info d-flex align-items-center mr-20">
                                 <div class="tp-blog-avatar mr-10">
                                    <img src="/assets/img/blog/avatar-1-6.png" alt="">
                                 </div>
                                 <span>{{$post->user->name}}</span>
                              </div>
                              <div class="postbox__meta-2">
                                 <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M20 4.16667V2.08333C20 0.933329 19.0666 0 17.9167 0H2.08333C0.933329 0 0 0.933329 0 2.08333V4.16667H20ZM14.1667 1.66667C14.625 1.66667 15 2.03751 15 2.5C15 2.95835 14.625 3.33333 14.1667 3.33333C13.7083 3.33333 13.3333 2.95835 13.3333 2.5C13.3333 2.03751 13.7083 1.66667 14.1667 1.66667ZM5.83333 1.66667C6.29166 1.66667 6.66667 2.03751 6.66667 2.5C6.66667 2.95835 6.29166 3.33333 5.83333 3.33333C5.37498 3.33333 5 2.95835 5 2.5C5 2.03751 5.37498 1.66667 5.83333 1.66667Z"
                                          fill="currentcolor" />
                                       <path
                                          d="M0 5V17.9167C0 19.0625 0.933329 20 2.08333 20H17.9167C19.0666 20 20 19.0625 20 17.9167V5H0ZM4.58333 17.5H2.5C2.27081 17.5 2.08333 17.3125 2.08333 17.0833C2.08333 16.85 2.27081 16.6667 2.5 16.6667H4.58333C4.81249 16.6667 5 16.85 5 17.0833C5 17.3125 4.81249 17.5 4.58333 17.5ZM4.58333 14.1667H2.5C2.27081 14.1667 2.08333 13.9792 2.08333 13.75C2.08333 13.5167 2.27081 13.3333 2.5 13.3333H4.58333C4.81249 13.3333 5 13.5167 5 13.75C5 13.9792 4.81249 14.1667 4.58333 14.1667ZM4.58333 10.8333H2.5C2.27081 10.8333 2.08333 10.6458 2.08333 10.4167C2.08333 10.1833 2.27081 10 2.5 10H4.58333C4.81249 10 5 10.1833 5 10.4167C5 10.6458 4.81249 10.8333 4.58333 10.8333ZM8.88748 17.5H6.80415C6.57499 17.5 6.38748 17.3125 6.38748 17.0833C6.38748 16.85 6.57499 16.6667 6.80415 16.6667H8.88748C9.12081 16.6667 9.30415 16.85 9.30415 17.0833C9.30415 17.3125 9.12081 17.5 8.88748 17.5ZM8.88748 14.1667H6.80415C6.57499 14.1667 6.38748 13.9792 6.38748 13.75C6.38748 13.5167 6.57499 13.3333 6.80415 13.3333H8.88748C9.12081 13.3333 9.30415 13.5167 9.30415 13.75C9.30415 13.9792 9.12081 14.1667 8.88748 14.1667ZM8.88748 10.8333H6.80415C6.57499 10.8333 6.38748 10.6458 6.38748 10.4167C6.38748 10.1833 6.57499 10 6.80415 10H8.88748C9.12081 10 9.30415 10.1833 9.30415 10.4167C9.30415 10.6458 9.12081 10.8333 8.88748 10.8333ZM13.1958 17.5H11.1125C10.8792 17.5 10.6958 17.3125 10.6958 17.0833C10.6958 16.85 10.8792 16.6667 11.1125 16.6667H13.1958C13.425 16.6667 13.6125 16.85 13.6125 17.0833C13.6125 17.3125 13.425 17.5 13.1958 17.5ZM13.6125 14.1667H10.6958V13.3333H13.6125V14.1667ZM13.1958 10.8333H11.1125C10.8792 10.8333 10.6958 10.6458 10.6958 10.4167C10.6958 10.1833 10.8792 10 11.1125 10H13.1958C13.425 10 13.6125 10.1833 13.6125 10.4167C13.6125 10.6458 13.425 10.8333 13.1958 10.8333ZM13.1958 7.5H11.1125C10.8792 7.5 10.6958 7.31249 10.6958 7.08333C10.6958 6.85 10.8792 6.66667 11.1125 6.66667H13.1958C13.425 6.66667 13.6125 6.85 13.6125 7.08333C13.6125 7.31249 13.425 7.5 13.1958 7.5ZM17.5 17.5H15.4167C15.1875 17.5 15 17.3125 15 17.0833C15 16.85 15.1875 16.6667 15.4167 16.6667H17.5C17.7292 16.6667 17.9167 16.85 17.9167 17.0833C17.9167 17.3125 17.7292 17.5 17.5 17.5ZM17.5 14.1667H15.4167C15.1875 14.1667 15 13.9792 15 13.75C15 13.5167 15.1875 13.3333 15.4167 13.3333H17.5C17.7292 13.3333 17.9167 13.5167 17.9167 13.75C17.9167 13.9792 17.7292 14.1667 17.5 14.1667ZM17.5 10.8333H15.4167C15.1875 10.8333 15 10.6458 15 10.4167C15 10.1833 15.1875 10 15.4167 10H17.5C17.7292 10 17.9167 10.1833 17.9167 10.4167C17.9167 10.6458 17.7292 10.8333 17.5 10.8333ZM17.5 7.5H15.4167C15.1875 7.5 15 7.31249 15 7.08333C15 6.85 15.1875 6.66667 15.4167 6.66667H17.5C17.7292 6.66667 17.9167 6.85 17.9167 7.08333C17.9167 7.31249 17.7292 7.5 17.5 7.5Z"
                                          fill="currentcolor" />
                                    </svg>
                                    {{ formatDate($post->created_at) }}
                                 </span>
                                 <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M18 0H2C0.9 0 0 0.9 0 2V14C0 15.1 0.9 16 2 16H16L20 20V2C20 0.9 19.1 0 18 0ZM16 12H4V10H16V12ZM16 9H4V7H16V9ZM16 6H4V4H16V6Z" fill="currentcolor" />
                                     </svg>
                                     {{ $post->comments->count() }}
                                 </span>
                              </div>
                           </div>
                           <div class="postbox__thumb mb-25">
                              <img class="w-100" width="760" height="350" src="{{ url('public/Image/posts/' . $post->image) }}">
                           </div>
                           <div class="postbox__text mb-45">
                              <p class="mb-10">{{$post->description}}</p>
                           </div>
                           <div
                              class="postbox__blockquote pb-40 p-relative d-flex justify-content-between align-items-start">
                              <blockquote>
                                 <img class="mb-30" src="/assets/img/blog/quote.png" alt="">
                                 <p class="text-black pb-10">There are many variations of passages of Lorem Ipsum available, but Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem</p>
                                 <h6>Jonson Hard</h6>
                                 <span>CEO & Gardeng Manager</span>
                              </blockquote>
                           </div>
                           <div class="postbox__details-tag mb-45">
                              <span>Tags</span>
                              <a href="#">Lawn</a>
                              <a href="#">Landscape</a>
                              <a href="#">Plant Protect</a>
                              <a href="#">Gardening</a>
                           </div>
                        {{--    <h4 class="postbox__title-sm pb-15">Conclusion</h4>
                           <div class="postbox__text">
                              <p class="mb-10">It was popularised in the 1960s with the release of Letraset sheets time containing Lorem Ipsum passages, and more recently with desktop the publishing software like Aldus solar PageMaker including versions of Lorem Ipsum</p>
                           </div> --}}
                        </div>
                        <div class="postbox__author d-sm-flex align-items-center white-bg mb-50">
                           <div class="postbox__author-thumb">
                              <a href="#">
                                 <img src="/assets/img/blog/avatar-1-2.png" alt="">
                              </a>
                           </div>
                           <div class="postbox__author-content">
                              <h3 class="postbox__author-title">
                                 <a href="#">{{$post->user->name}}</a>
                              </h3>
                              <p class="pb-15">On the other hand, we denounce with right  out care the men who are so beguiled and demoralized by the charms of care pleasure of the garden services</p>
                              <div class="postbox__author-social-box d-flex justify-content-between align-items-center">
                                 <div class="postbox__author-social d-flex align-items-center">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 </div>
                                 <div class="postbox__author-share">
                                    <a href="#">Share</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="comments-wrap">

                            <div id="comments" class="row">
                                <div id="commentsList" class="column large-12">
                        
                                    @if($post->valid_comments_count > 0)
                                        <div id="forShow">
                                            <p id="showbutton" class="text-center">
                                                <a id="showcomments" href="{{ route('posts.comments', $post->id) }}" class="btn h-full-width">@lang('Show comments')</a>
                                            </p>
                                            <p id="showicon" class="h-text-center" hidden>
                                                <span class="fa fa-spinner fa-pulse fa-3x fa-fw"></span>
                                            </p>
                                        </div>
                                    @endif
                        
                                </div>
                            </div>
                          </div>
                        
                        <div class="postbox__comment mb-45">
                           <h3 class="postbox__title-sm pb-25">Commentaires</h3>
                           <ul>
                            
                              @foreach((array)$post ->$comments as $comment)

                              <li>
                                 <div class="postbox__comment-box p-relative">
                                    <div class="postbox__comment-info d-flex align-items-start">
                                       <div class="postbox__comment-avater mr-20">
                                          <img src="/assets/img/blog/avatar-1-3.png" alt="">
                                       </div>
                                       <div class="postbox__comment-name p-relative">
                                          <h5>{{$comment->user->name}}</h5>
                                          <div class="postbox__comment-text">
                                             <div class="postbox__comment-ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star color"></i>
                                             </div>
                                             <p>{{$comment->body}} </p>
                                             <div class="postbox__comment-date">
                                                <a href="#">a week ago</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              @endforeach
                           
                             
                           </ul>
                        </div>
                        <div class="postbox__comment-form-box">
                           <h3 class="postbox__title-sm pb-30">Leave A Comment</h3>
                           <div class="postbox__comment-form">
                              <form action="#">
                                 <div class="row gx-30">
                                    <div class="col-xl-6 col-lg-6 col-12 mb-20">
                                       <div class="tp-contact-form-input-box">
                                          <input type="text" placeholder="Name">
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 mb-20">
                                       <div class="tp-contact-form-input-box">
                                          <input type="email" placeholder="Email Id">
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 mb-20">
                                       <div class="tp-contact-form-input-box">
                                          <input type="text" placeholder="Phone">
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 mb-20">
                                       <div class="tp-contact-form-input-box">
                                          <input type="text" placeholder="Subject">
                                       </div>
                                    </div>
                                    <div class="col-12 mb-45">
                                       <div class="tp-contact-form-textarea-box">
                                          <textarea placeholder="Your Message"></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="submit" class="tp-btn-theme"><span>Send Message</span></button>
                              </form>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>   
               <div class="col-xxl-5 col-xl-4 col-lg-4">
                  <div class="sidebar__wrapper sidebar__wrapper-style-2">
                     <div class="sidebar__widget mb-50">
                        <h3 class="sidebar__widget-title mb-20">Search</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__search">
                              <form action="#">
                                 <div class="sidebar__search-input-2">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-30">
                        <h3 class="sidebar__widget-title mb-10">Category</h3>
                        <div class="sidebar__widget-content">
                           <ul>
                            @foreach($categories as $category)

                              <li><a href="/blog?category_id={{ $category->id }}" class="small"
                                class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}">{{$category->title}} <span>{{$category->posts->count()}}</span></a></li>
                            @endforeach 
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-50">
                        <h3 class="sidebar__widget-title mb-35">Recent Post</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__post">
                              <div class="rc__post mb-30 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="blog-details.html"><img src="/assets/img/blog/blog-details-sm-1-1.jpg"
                                          alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <h3 class="rc__post-title">
                                       <a href="blog-details.html">Garden Design</a>
                                    </h3>
                                    <div class="rc__text">
                                       <span>The full spiffing good the no the biggie is.</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="rc__post mb-30 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="blog-details.html"><img src="/assets/img/blog/blog-details-sm-1-2.jpg"
                                          alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <h3 class="rc__post-title">
                                       <a href="blog-details.html">Landscape Garden</a>
                                    </h3>
                                    <div class="rc__text">
                                       <span>The full spiffing good the no the biggie is.</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="rc__post mb-30 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="blog-details.html"><img src="/assets/img/blog/blog-details-sm-1-3.jpg"
                                          alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <h3 class="rc__post-title">
                                       <a href="blog-details.html">Yard Garden</a>
                                    </h3>
                                    <div class="rc__text">
                                       <span>The full spiffing good the the biggie is.</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="rc__post d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="blog-details.html"><img src="/assets/img/blog/blog-details-sm-1-4.jpg"
                                          alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <h3 class="rc__post-title">
                                       <a href="blog-details.html">Home Decorate</a>
                                    </h3>
                                    <div class="rc__text">
                                       <span>The full spiffing good the no the biggie is.</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>             
                     <div class="sidebar__widget mb-30">
                        <h3 class="sidebar__widget-title mb-30">Tags</h3>
                        <div class="sidebar__widget-content">
                           <div class="tagcloud">
                              <a href="#">Garden Watering</a>
                              <a href="#">Lawn Movers</a>
                              <a href="#">Landscaping</a>
                              <a href="#">Tree Plantation</a>
                              <a href="#">Services Tools</a>
                              <a href="#">Plants Protect</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>   
            </div>
         </div>
      </section>
      <!-- postbox area end -->

      <!-- brand area start -->
      <div class="tp-brand-area tp-brand-bg" data-background="/assets/img/shape/funfact/bg-3-1.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-brand-wrap">
                     <div class="swiper-container tp-brand-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="tp-brand-thumb text-center">
                                 <img src="/assets/img/brand/thumb-2-1.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-brand-thumb text-center">
                                 <img src="/assets/img/brand/thumb-2-2.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-brand-thumb text-center">
                                 <img src="/assets/img/brand/thumb-2-3.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-brand-thumb text-center">
                                 <img src="/assets/img/brand/thumb-2-4.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-brand-thumb text-center">
                                 <img src="/assets/img/brand/thumb-2-5.png" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- brand area end -->


   </main>
@endsection