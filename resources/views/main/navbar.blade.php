 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark p-0" id="nav">
     <a class="navbar-brand ml-3" href="/"><img src="{{ asset('images/twitter.png')}}" width="50px" alt="">
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto ">
             <li class="nav-item active ml-3">
                 <a class="nav-link" href="{{ asset('/') }}">Home </a>
             </li>
             <li class="nav-item active ml-3">
                 <a class="nav-link" href="{{ url('signup') }}">Sign up </a>
             </li>
             <li class="nav-item active ml-3">
                 <a class="nav-link" href="{{ url('about') }}">About </a>
             </li>
         </ul>

         <ul class="navbar-nav ml-auto">
             <li class="nav-item active mr-3">
                 <a class="nav-link" href="{{ url('signin') }}">Sign in </a>
             </li>

         </ul>


     </div>
 </nav>