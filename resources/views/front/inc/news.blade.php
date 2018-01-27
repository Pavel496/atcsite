    <!-- BLOG ENTRIES -->
    
@foreach($content_pages as $page)    
    <div class="blog full-thumbnail margin-bottom-30px">
        <!-- blog post -->
        <article class="entry-post">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="blog-single.html">{{ $page->title }}</a>
                </h2>
<!--
                <div class="meta-line clearfix">
                    <div class="meta-author-category pull-left">
                        <span class="post-author">by <a href="#">John Doe</a></span>
                        <span class="post-category">In: <a href="#">Business</a>, <a href="#">Creative</a>, <a href="#">Media</a></span>
                    </div>
                    <div class="meta-tag-comment pull-right">
                        <span class="post-tags"><i class="fa fa-tag"></i> <a href="#">story</a>, <a href="#">inspiration</a>, <a href="#">creative</a></span>
                        <span class="post-comment"><i class="fa fa-comments"></i> <a href="#">3 Comments</a></span>
                    </div>
                </div>
-->
            </header>
            <div class="entry-content clearfix">
                <figure class="featured-image">
                    <a href="blog-single.html">
<!--                        <div class="post-date-info clearfix"><span class="post-month">DEC</span><span class="post-date">11</span><span class="post-year">2018</span></div>
-->
                        <img src="{{ $page->featured_image }}" class="img-responsive" alt="featured-image" />
                    </a>
                </figure>
                <div class="excerpt">
                    {!! $page->page_text !!}
<!--
                    <p class="read-more">
                        <a href="#" class="btn btn-primary">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </p>
-->
                </div>
            </div>
        </article>
        <!-- end blog post -->
        <hr />
    </div>
@endforeach    
   
    <!-- END BLOG ENTRIES -->