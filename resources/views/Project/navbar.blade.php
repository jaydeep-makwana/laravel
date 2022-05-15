 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg p-0 text-center" id="nav">
     <a class="navbar-brand ml-3" href="/"><img src="{{ asset('images/twitter.png')}}" width="50px" alt="">
     </a>
     <div class="navbar-dark">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
     </div>

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
             <li class="nav-item active ml-3">
                 <a class="nav-link" href="{{ url('login') }}">Sign in </a>
             </li>
         </ul>

         <ul class="navbar-nav ml-3 mr-3">
             <li class="nav-item active  ">
                 <a class="nav-link button border" href="{{ url('login') }}">Dashboard </a>
             </li>

         </ul>


     </div>
 </nav>


 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>