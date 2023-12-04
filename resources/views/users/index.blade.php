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
            <img alt="" style="width:300px; height:400px;" title="" class="img-circle img-thumbnail isTooltip" src="{{$user->image}}" data-original-title="Usuario">
            <ul title="Ratings" class="list-inline ratings text-center">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <!--<strong>Information</strong><br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Username
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>
                                Age
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->age}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>
                                NumberPhone
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->phone}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>
                                Address
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->address}}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                Role
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->utype}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span>
                                Email
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->email}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                created
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->created_at}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                Modified
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->updated_at}}
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>-->
            <strong>Preferences</strong><br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Hobbies
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $interests->hobbies }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Smoking
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $interests->smoking ? 'Yes' : 'No' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Introvert
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $interests->introvert ? 'Yes' : 'No' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Food Separated
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $interests->food_separated ? 'Yes' : 'No' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Cleaning
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $interests->cleaning }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Religion
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $interests->religion }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                WiFi
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $interests->wifi ? 'Yes' : 'No' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Visiting Family Times
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $interests->visiting_family_times }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ route('interests.edit') }}" class="btn btn-primary">Edit your interests</a>            </div>
            </div>
        </div>
</div>
</div>
@endsection
