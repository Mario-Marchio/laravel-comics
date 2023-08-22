   @extends('layout')

   @section('content')
       <div class="l-blue-bg">
       </div>
       <div class="container-small ">
           <b class="book-text pt-5">{{ $ComicBook['title'] }}</b>
           <div class="btn-group w-800 mt-4 " role="group">
               <button type="button" class="btn btn-success d-flex justify-content-start">U.S. price:
                   {{ $ComicBook['price'] }} </button>

               <div class="btn-group" role="group">
                   <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                       aria-expanded="false">
                       check avaibiality
                   </button>
                   <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="#">link</a></li>
                       <li><a class="dropdown-item" href="#">link</a></li>
                   </ul>
               </div>
           </div>
           <div class="my-4">{{ $ComicBook['description'] }}</div>
           <div class="d-flex">
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col">talents</th>
                           <th scope="col"></th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <th scope="row">Art by:</th>
                           <td>
                               @foreach ($ComicBook['artists'] as $artist)
                                   <a href="#">{{ $artist }}</a>
                               @endforeach
                           </td>

                       </tr>
                       <tr>
                           <th scope="row">Written by:</th>
                           <td>
                               @foreach ($ComicBook['writers'] as $writer)
                                   <a href="#">{{ $writer }}</a>
                               @endforeach
                           </td>


                       </tr>
                       <tr>

                       </tr>
                   </tbody>
               </table>

               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col">Specs</th>
                           <th scope="col"></th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <th scope="row">Series:</th>
                           <td><a href="#">{{ $ComicBook['series'] }}</a></td>
                       </tr>
                       <tr>
                           <th scope="row">U.S Price:</th>
                           <td>{{ $ComicBook['price'] }}</td>

                       </tr>
                       <tr>
                           <th scope="row">on sale date:</th>
                           <td colspan="2">{{ $ComicBook['sale_date'] }}</td>

                       </tr>
                   </tbody>
               </table>
           </div>
       </div>
   @endsection
