@extends('layout.main')
@include('layout.sidebar')
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

            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Sidebar #09</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
		</div>
