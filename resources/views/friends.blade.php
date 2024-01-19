@extends('layout.main')
@include('auth.layout')
@section('content')
<body>


    <h1>FRIENDS LIST</h1>

    <!-- Default Table -->
    <table class="friendtable" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Club</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Ben Tennyson</td>
            <td>ben10@gmail.com</td>
            <td>Fitness Club</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jimmy Neutron</td>
            <td>jimmygenius@gmail.com</td>
            <td>Coding Club</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Thomas Shelby</td>
            <td>thomasshelby@gmail.com</td>
            <td>English Debate Club</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Beth Harmon</td>
            <td>bethharmon@gmail.com</td>
            <td>Chess Club</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Peter Parker</td>
            <td>peterparker01@gmail.com</td>
            <td>Photography Club</td>
          </tr>
        </tbody>
      </table>

      
      
    </body>
    @endsection


		</div>
