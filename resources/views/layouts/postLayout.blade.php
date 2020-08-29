<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') - BlogIt</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"
    />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>
      body{
        background-image: url( " /public/images/photo-1.jpeg') ");
        background-color: rgba(0, 0, 0, 0.514);
        color: azure;
      }
    </style>

    
  </head>

  <body>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        
        <a
          role="button"
          class="navbar-burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navMenu"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      
      <div id="navMenu" class="navbar-menu navbar navbar-expand-md navbar-light bg-white shadow-sm">

        <div class="navbar-start ">
          
          <a href="{{ route('posts.index') }}" class="navbar-item">
            View Posts
          </a>
          
            <a href="{{ route('posts.knowUs') }}" class="navbar-item">
              About Us
            </a>
          
        </div>

        @auth


        <div class="navbar-item has-dropdown is-hoverable">
          <a id="navbarDropdown" class="navbar-link dropdown-toggle" href="#" role="button" 
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              
              {{ Auth::user()->name }} 

              @if(Auth::user()->avatar)
              <img src="{{ asset('/storage/images/'.Auth::user()->avatar) }}" 
              alt="avatar" width="40" height="40"/>
              @endif
              
              <span class="caret"></span>
          </a>

          <div class="navbar-dropdown">
         <a href="{{ route('posts.create') }}" aria-labelledby="navbarDropdown" class="navbar-item" class="button is-info">
            <strong>New Post</strong>
          </a>

          <a href="{{ route('users.uploadForm') }}" aria-labelledby="navbarDropdown" class="navbar-item" class="button is-info">
            <strong>Upload Profile</strong>
          </a>

         

                <a class="navbar-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              {{-- </div> --}}
            </div>
        </div>
        </ul>
      </div>
        @endauth
      
      </div>
    </nav>
    </div>

    <section class="section">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-8">
            @if (session('notification'))
            <div class="notification is-primary">
              {{ session('notification') }}
            </div>
            @endif @yield('content')
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>BlogIt</strong> |
          <a href="https://github.com/DBryzz/BlogIt.git">DBryzz</a>
        </p>
        
      </div>
    </footer>

    <script src="{{ asset('js/nav.js') }}"></script>
  </body>
</html>