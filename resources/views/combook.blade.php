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
       </div>
   @endsection
