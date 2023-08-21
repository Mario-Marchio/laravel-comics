   @extends('layout')

   @section('content')
       <div class="l-blue-bg"></div>
       <div class="container-small ">
           <b class="book-text pt-5">ACTION COMICS #1000: THE DELUXE EDITION</b>
           <div class="btn-group w-800 mt-4 " role="group">
               <button type="button" class="btn btn-success d-flex justify-content-start">U.S. price: $19.99 </button>

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
           <div class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem debitis, voluptatibus,
               ipsa laboriosam
               mollitia cum eligendi repellat ipsam modi ad laudantium corporis vero. Quidem libero debitis quam saepe
               tempore at.Error iure nam neque! Blanditiis error praesentium suscipit. Perspiciatis et sint accusamus
               itaque, unde natus minima beatae facere ab omnis officiis, tempora quasi deserunt dolores laborum autem ex
               incidunt qui.</div>
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
                           <td><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam dolorum,
                                   expedita debitis incidunt magni </a></td>

                       </tr>
                       <tr>
                           <th scope="row">Written by:</th>
                           <td><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam dolorum,
                                   expedita debitis incidunt magni </a></td>


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
                           <td><a href="#">ACTION COMICS</a></td>
                       </tr>
                       <tr>
                           <th scope="row">U.S Price:</th>
                           <td>$19.99</td>

                       </tr>
                       <tr>
                           <th scope="row">on sale date:</th>
                           <td colspan="2">oct 02 2018</td>

                       </tr>
                   </tbody>
               </table>
           </div>
       </div>
   @endsection
