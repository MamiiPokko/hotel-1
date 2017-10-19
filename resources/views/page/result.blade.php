@extends('layouts.app')

@section('content')


                      <tr>
                        <td>{{$customers->name}}</td>
                        <td>{{$customers->surname}}</td>
                        <td>{{$customers->address}}</td>
                        <td>{{$customers->email}}</td>
                        <td>{{$customers->tel}}</td>
                        <td>
                        <a href="{{URL('/pdf')}}"> <button type="button" class="btn btn-primary">Add</button>




@endsection