@extends('layouts.base')
@section('content')

<style>
     .inf-content{
        border:1px solid #DDDDDD;
        -webkit-border-radius:10px;
        -moz-border-radius:10px;
        border-radius:10px;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
    }


    .hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
.input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.input-group.md-form.form-sm.form-2 input.purple-border {
    border: 1px solid #9e9e9e;
}
.input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
    border: 1px solid #ba68c8;
    box-shadow: none;
}
.form-2 .input-group-addon {
    border: 1px solid #ba68c8;
}
.danger-text {
    color: #ff3547;
}
.success-text {
    color: #00C851;
}
.table-bordered.red-border, .table-bordered.red-border th, .table-bordered.red-border td {
    border: 1px solid #ff3547!important;
}
.table.table-bordered th {
    text-align: center;
}
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <img alt="" style="width:300px; height:300px;" title="" class="img-circle img-thumbnail isTooltip" src="{{$user->image}}" data-original-title="Usuario">
            <ul title="Ratings" class="list-inline ratings text-center">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
            </ul>
        </div>
        <div class="col-md-6">
        <div class="card-body">
        <!--Table-->
        <table class="table table-hover">
            <!--Table head-->
            <thead class="mdb-color darken-3">
                <tr class="text-white">

                    <th colspan="2" class="text-center">Your Informations</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">City</th>
                    <td> @if ($interests->user->post && $interests->user->post->isNotEmpty())
                                @foreach ($interests->user->post as $p)
                                    {{ $p->city->name }}
                                @endforeach
                            @else
                                No posts available
                            @endif</td>

                </tr>
                <tr>
                    <th scope="row"> Gender</th>
                    <td> {{ $interests->user->gender }}</td>

                </tr>
                <tr>
                    <th scope="row"> Job</th>
                    <td>{{ $interests->user->category }}</td>

                </tr>
                <tr>
                    <th scope="row"> Budget</th>
                    <td>@if ($interests->user->post)
                            @foreach ($interests->user->post as $p)
                                {{ $p->budget }}
                            @endforeach
                        @else
                            No posts available
                        @endif</td>

                </tr>
                <tr>
                    <th scope="row"> Age</th>
                    <td> {{ $interests->user->age }}</td>

                </tr>
                <tr>
                    <th scope="row"> Bio</th>
                    <td>  @if ($interests->user->post)
                            @foreach ($interests->user->post as $p)
                                {{ $p->description }}
                            @endforeach
                        @else
                            No posts available
                        @endif</td>

                </tr>

            </tbody>

        </table>
        <table class="table table-hover">
            <!--Table head-->
            <thead class="mdb-color darken-3">
                <tr class="text-white" >

                    <th colspan="2" class="text-center">Your Interests</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Hobbies</th>
                    <td>  {{ $interests->hobbies }}</td>

                </tr>
                <tr>
                    <th scope="row">Smoking</th>
                    <td>  {{ $interests->smoking ? 'Yes' : 'No' }}</td>

                </tr>
                <tr>
                    <th scope="row">Introvert</th>
                    <td>{{ $interests->introvert ? 'Yes' : 'No' }}</td>

                </tr>
                <tr>
                    <th scope="row">Food Separated</th>
                    <td>  {{ $interests->food_separated ? 'Yes' : 'No' }}</td>

                </tr>
                <tr>
                    <th scope="row"> Cleaning</th>
                    <td>  {{ $interests->cleaning }}</td>

                </tr>
                <tr>
                    <th scope="row">  Religion</th>
                    <td>   {{ $interests->religion }}</td>

                </tr>
                <tr>
                    <th scope="row">  Wi-Fi</th>
                    <td>  {{ $interests->wifi ? 'Yes' : 'No' }}</td>

                </tr>
                <tr>
                    <th scope="row"> Visiting Family Times</th>
                    <td>   {{ $interests->visiting_family_times }}</td>

                </tr>

            </tbody>

        </table> <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ route('interests.edit') }}" class="btn btn-primary" style="background-color:#37517e">Edit your interests</a>            </div>
            </div>
        </div>
</div>
            </div>



</div>
</div>
@endsection
