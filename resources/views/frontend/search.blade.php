@extends('frontend.layouts.master')
@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<h2 style="background:blue; padding-top:10px; padding-bottom:10px; padding-left:20px; color:white">Search Results</h2>
<div class="col-md-8">
@foreach($posts as $post)
<div class="entity_wrapper">
    <div class="entity_title">
        <h1><a href="{{ url('/details') }}/{{ $post->slug }}">{{ $post->title }} </a></h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta"><a href="#" target="_self">{{ date('F j-Y',strtotime($post->created_at)) }}</a>, by: <a href="{{ url('/author') }}/{{ $post->creator->id }}">{{ $post->creator['name'] }}</a>
    </div>
    <!-- entity_meta -->

 
    <!-- entity_rating -->

    
    <!-- entity_social -->

    <div class="entity_thumb">
        <img class="img-responsive" src="{{ asset('post') }}/{{ $post->thumb_image }} " alt="feature-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>
            {{ $post->short_description }}
        </p>

         
    </div>
    <!-- entity_content -->

    <div class="entity_footer">
         
        <!-- entity_tag -->

        <div class="entity_social">
            
            <span><i class="fa fa-comments-o"></i>{{ count($post->comments) }} <a href="#">Comments</a> </span>
        </div>
        <!-- entity_social -->

    </div>
    <!-- entity_footer -->

</div>
@endforeach
<!-- entity_wrapper -->



<div class="widget_advertisement">
    <img class="img-responsive" src="{{ asset('frontend/img/category_advertisement.jpg')}} " alt="feature-top">
</div>
<!--Advertisement-->


<!--Entity Comments -->

</div>
<!--Left Section-->

 <div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Most Viewed</a></h2>
    </div>

   @foreach($shareData['most_viewed'] as $item)

    <div class="media">
        <div class="media-left">
            <a href="{{ url('/details') }}/{{ $item->slug }}">
                <img class="media-object" src="{{ asset('post') }}/{{ $item->thumb_image  }}" alt="{{ $item->title }}"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{ url('/details') }}/{{ $item->slug }}">{{ $item->title }}</a>
            </h3> <span class="media-date">
                <a href="#">{{ date('j F -y',strtotime($item->created_at)) }}</a>,  by:
                 <a href="{{ url('/author') }}/{{ $item->creator->id }}">{{ $item->creator['name'] }}</a></span>

            <div class="widget_article_social">
                
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>{{ count($item->comments) }}</a> Comments
                </span>
            </div>
        </div>
    </div>
    @endforeach
     
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
</div>
<!-- Popular News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive adv_img" src="{{ asset('frontend/img/right_add1.jpg')}}" alt="add_one">
    <img class="img-responsive adv_img" src="{{ asset('frontend/img/right_add2.jpg')}}" alt="add_one">
    <img class="img-responsive adv_img" src="{{ asset('frontend/img/right_add3.jpg')}}" alt="add_one">
    <img class="img-responsive adv_img" src="{{ asset('frontend/img/right_add4.jpg')}}" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="{{ asset('frontend/img/right_add5.jpg')}}" alt="add_one">
</div>
<!-- Advertisement -->

 
<!-- Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Most Commented</a></h2>
    </div>

    @foreach($shareData['most_comment'] as $item)
    <div class="media">
        <div class="media-left">
            <a href="{{ url('/details') }}/{{ $item->slug }}"><img class="media-object" src="{{ asset('post') }}/{{ $item->thumb_image  }}" alt="{{ $item->title }}"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{ url('/details') }}/{{ $item->slug }}" >{{ $item->title }}</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">{{ $item->comments_count }}</a> Comments</span>
            </div>
        </div>
    </div>
    @endforeach
  
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
</div>
<!-- Most Commented News -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Editor Corner</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="{{ asset('frontend/img/editor.jpg')}}"
                                  alt="Generic placeholder image">

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without</p>

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.</p>
        <button class="btn pink">Read more</button>
    </div>
</div>
<!-- Editor News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive add_img" src="{{ asset('frontend/img/right_add7.jpg')}} " alt="add_one">
    <img class="img-responsive add_img" src="{{ asset('frontend/img/right_add7.jpg')}} " alt="add_one">
    <img class="img-responsive add_img" src="{{ asset('frontend/img/right_add7.jpg')}} " alt="add_one">
    <img class="img-responsive add_img" src="{{ asset('frontend/img/right_add7.jpg')}} " alt="add_one">
</div>
<!--Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Readers Corner</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="{{ asset('frontend/img/reader.jpg')}}"
                                  alt="Generic placeholder image">

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without</p>

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.</p>
        <button class="btn pink">Read more</button>
    </div>
</div>
<!--  Readers Corner News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="{{ asset('frontend/img/podcast.jpg')}}" alt="add_one">
</div>
<!--Advertisement-->
</div>
<!-- Right Section -->

</div>
<!-- Row -->

</div>
<!-- Container -->

</section>
<!-- Category News Section -->

<section id="video_section" class="video_section">
    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MJ-jbFdUPns"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- embed-responsive -->

                </div>
                <!-- col-md-6 -->

                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h5Jni-vy_5M"></iframe>
                    </div>
                    <!-- embed-responsive -->

                    <div class="embed-responsive embed-responsive-4by3 m16">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wQ5Gj0UB_R8"></iframe>
                    </div>
                    <!-- embed-responsive -->

                </div>
                <!-- col-md-3 -->

                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UPvJXBI_3V4"></iframe>
                    </div>
                    <!-- embed-responsive -->

                    <div class="embed-responsive embed-responsive-4by3 m16">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DTCtj5Wz6BM"></iframe>
                    </div>
                    <!-- embed-responsive -->

                </div>
                <!-- col-md-3 -->

            </div>
            <!-- row -->

        </div>
        <!-- well -->

    </div>

</section>
<!-- Entity Section Wrapper -->
@endsection