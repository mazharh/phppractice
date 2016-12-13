@extends('layouts.main')

@section('title')
    Main
@endsection

@section('content')

<div id="body_wrap">
    <h1>Request for Information Form</h1>
    <strong>To receive information on our products and services by email, please complete the form below.</strong>
    <form method="post" action="{{url('/request')}}">
        {{csrf_field()}}
        <div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            @endif
        </div>
        <table>
            <tr>
                <td>First name</td>
                <td><input type="text" name="fname" value="{{Request::old('fname')}}"/></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td><input type="text" name="lname" value="{{Request::old('lname')}}"/></td>
            </tr>
            <tr>
                <td>Postal Code</td>
                <td><input type="text" name="postalCode" value="{{Request::old('postalCode')}}"/></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="phone" value="{{Request::old('phone')}}"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{Request::old('email')}}"/></td>
            </tr>
            <tr>
                <td>Please send me<br> information on the <br> following product </td>
                <td>
                    @foreach($products as $product)
                        <input type="radio" name="insurance" value="{{$product->id}}" checked/> {{$product->product}}<br/>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="btnsubmit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</div>
@endsection

