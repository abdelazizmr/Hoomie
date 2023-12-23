@extends('layouts.base')
@section('content')

<style>

    body{
        margin-top:20px;
        background:#f5f5f5;
    }
    /* ===========
    Profile
    =============*/
    .card-box {
    padding: 20px;
    box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.06), 0 2px 0 0 rgba(0, 0, 0, 0.02);
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    background-clip: padding-box;
    margin-bottom: 20px;
    background-color: #ffffff;
    }
    .header-title {
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.04em;
    line-height: 16px;
    margin-bottom: 8px;
    }
    .social-links li a {
    -webkit-border-radius: 50%;
    background: #EFF0F4;
    border-radius: 50%;
    color: #7A7676;
    display: inline-block;
    height: 30px;
    line-height: 30px;
    text-align: center;
    width: 30px;
    }

    /* ===========
    Gallery
    =============*/
    .portfolioFilter a {
    -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
    -webkit-transition: all 0.3s ease-out;
    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
    color: #333333;
    padding: 5px 10px;
    display: inline-block;
    transition: all 0.3s ease-out;
    }
    .portfolioFilter a:hover {
    background-color: #228bdf;
    color: #ffffff;
    }
    .portfolioFilter a.current {
    background-color: #228bdf;
    color: #ffffff;
    }
    .thumb {
    background-color: #ffffff;
    border-radius: 3px;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
    margin-top: 30px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    width: 100%;
    }
    .thumb-img {
    border-radius: 2px;
    overflow: hidden;
    width: 100%;
    }
    .gal-detail h4 {
    margin: 16px auto 10px auto;
    width: 80%;
    white-space: nowrap;
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    }
    .gal-detail .ga-border {
    height: 3px;
    width: 40px;
    background-color: #228bdf;
    margin: 10px auto;
    }




    .tabs-vertical-env .tab-content {
    background: #ffffff;
    display: table-cell;
    margin-bottom: 30px;
    padding: 30px;
    vertical-align: top;
    }
    .tabs-vertical-env .nav.tabs-vertical {
    display: table-cell;
    min-width: 120px;
    vertical-align: top;
    width: 150px;
    }
    .tabs-vertical-env .nav.tabs-vertical li.active > a {
    background-color: #ffffff;
    border: 0;
    }
    .tabs-vertical-env .nav.tabs-vertical li > a {
    color: #333333;
    text-align: center;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    white-space: nowrap;
    }
    .nav.nav-tabs > li.active > a {
    background-color: #ffffff;
    border: 0;
    }
    .nav.nav-tabs > li > a {
    background-color: transparent;
    border-radius: 0;
    border: none;
    color: #333333 !important;
    cursor: pointer;
    line-height: 50px;
    font-weight: 500;
    padding-left: 20px;
    padding-right: 20px;
    font-family: 'Roboto', sans-serif;
    }
    .nav.nav-tabs > li > a:hover {
    color: #228bdf !important;
    }
    .nav.tabs-vertical > li > a {
    background-color: transparent;
    border-radius: 0;
    border: none;
    color: #333333 !important;
    cursor: pointer;
    line-height: 50px;
    padding-left: 20px;
    padding-right: 20px;
    }
    .nav.tabs-vertical > li > a:hover {
    color: #228bdf !important;
    }
    .tab-content {
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    color: #777777;
    }
    .nav.nav-tabs > li:last-of-type a {
    margin-right: 0px;
    }
    .nav.nav-tabs {
    border-bottom: 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    }
    .navtab-custom li {
    margin-bottom: -2px;
    }
    .navtab-custom li a {
    border-top: 2px solid transparent !important;
    }
    .navtab-custom li.active a {
    border-top: 2px solid #228bdf !important;
    }
    .nav-tab-left.navtab-custom li a {
    border: none !important;
    border-left: 2px solid transparent !important;
    }
    .nav-tab-left.navtab-custom li.active a {
    border-left: 2px solid #228bdf !important;
    }
    .nav-tab-right.navtab-custom li a {
    border: none !important;
    border-right: 2px solid transparent !important;
    }
    .nav-tab-right.navtab-custom li.active a {
    border-right: 2px solid #228bdf !important;
    }
    .nav-tabs.nav-justified > .active > a,
    .nav-tabs.nav-justified > .active > a:hover,
    .nav-tabs.nav-justified > .active > a:focus,
    .tabs-vertical-env .nav.tabs-vertical li.active > a {
    border: none;
    }
    .nav-tabs > li.active > a,
    .nav-tabs > li.active > a:focus,
    .nav-tabs > li.active > a:hover,
    .tabs-vertical > li.active > a,
    .tabs-vertical > li.active > a:focus,
    .tabs-vertical > li.active > a:hover {
    color: #228bdf !important;
    }

    .nav.nav-tabs + .tab-content {
        background: #ffffff;
        margin-bottom: 20px;
        padding: 20px;
    }
    .progress.progress-sm .progress-bar {
        font-size: 8px;
        line-height: 5px;
    }
    .profile-info .panel-footer ul li a {
        color: #7a7a7a;
    }
    .p-text-area, .p-text-area:focus {
        border: none;
        font-weight: 300;
        box-shadow: none;
        color: #0a0a0a;
        font-size: 16px;
    }
    .panel.profile-info {
    margin: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    }

    .panel.profile-info textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        resize: none; /* Prevent textarea resizing */
    }

    .panel.profile-info footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .panel.profile-info button {
        background-color: #5bc0de;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }

    .panel.profile-info .nav-pills {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .panel.profile-info .nav-pills li {
        margin-right: 10px;
    }

    .panel.profile-info .nav-pills a {
        color: #333;
        text-decoration: none;
    }

    /* Style for icons inside the nav-pills */
    .panel.profile-info .nav-pills i {
        font-size: 20px;
    }

</style>
<br>
<br>
<br>
<br>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="thumb-xl member-thumb m-b-10 center-block">
                        <img src="{{$user->image}}" class="img-circle img-thumbnail" alt="profile-image">
                    </div>

                    <div class="">
                        <h4 class="m-b-5">{{ strtoupper($user->name) }}</h4>
                        <p class="text-muted"><span>@</span>{{$user->name}}</p>
                    </div>

                    <div class="text-left m-t-40">
                        <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{$user->email}}</span></p>
                        <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{$user->phone}}</span></p>
                        <p class="text-muted font-13"><strong>Gender :</strong> <span class="m-l-15">{{$user->gender}}</span></p>

                    </div>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->


        <div class="col-md-8 col-lg-9">
            <div class="">
                <div class="">
                  <!-- /.place-cover -->
                  <div class="panel profile-info">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <textarea class="form-control input-lg p-text-area" name="description" rows="2" placeholder="Whats in your mind today?"></textarea>

                        <!-- Bouton de la caméra -->
                        <label for="image" style="cursor: pointer; margin-right: 10px;">
                            <i class="fa fa-camera"></i>
                            <input type="file" id="image" name="image" accept="image/*" style="display: none;">
                        </label>

                        <!-- Bouton du film -->
                        <label for="video" style="cursor: pointer;">
                            <i class="fa fa-film"></i>
                            <input type="file" id="video" name="video" accept="video/*" style="display: none;">
                        </label>

                        <button type="submit" class="btn btn-info pull-right">Post</button>
                    </form>

                  </div>


                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                            <div class="row">
                                @foreach($places as $place)
                                <div class="col-sm-4">
                                    <div class="gal-detail thumb">
                                        <!-- Edit button -->
                                        <div>
                                            <a href="{{ route('places.edit', ['id' => $place->id]) }}" style="color: #0a0a0a; font-size: 18px; float: right;"><i class="fa fa-edit"></i></a>
                                            <form id="{{$place->id}}" method="POST" action="{{ route('places.destroy',$place->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="supprimer btn" onclick="event.preventDefault();
                                                    if(confirm('Êtes-vous sûr ?'))
                                                    document.getElementById({{$place->id}}).submit();" type="submit" style="color: #0a0a0a; font-size: 18px; float: right;border:none;">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <h4>Description:</h4>
                                        <p class="text-muted">{{ $place->description }}</p>

                                        @if($place->image)
                                            <a href="#" class="image-popup" title="Image">
                                                <img src="{{ asset($place->image . '?v=' . uniqid()) }}" class="thumb-img" alt="work-thumbnail" style="height: 300px; object-fit: cover;">
                                            </a>
                                        @elseif($place->video)
                                            <video width="100%" height="300" controls style="object-fit: cover;">
                                                <source src="{{ asset($place->video . '?v=' . $place->updated_at->timestamp) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div>
@endsection
