<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amerta</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            
  <style>
            .blog-header {
    border-bottom: 2px solid #e5e5e5;
  }
  .bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  }
h1,h2,h3,h4,h5,h6 {
  font-family: 'EB Garamond', serif;
}
                .blog-header-logo {
                  font-family: 'EB Garamond', serif;
    font-size: 2.25rem;
}

          
                .nav-scroller {
                  position: relative;
                  z-index: 2;
                  height: 2.75rem;
                  overflow-y: hidden;
                }
          
                .nav-scroller .nav {
                  display: flex;
                  flex-wrap: nowrap;
                  padding-bottom: 1rem;
                  margin-top: -1px;
                  overflow-x: auto;
                  text-align: center;
                  white-space: nowrap;
                  -webkit-overflow-scrolling: touch;
                }
                
  </style>

    </head>
    
    <body style="font-family: 'EB Garamond', serif;">
        <div class="container">
            <header class="blog-header lh-1 py-3">
              <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-8">
                  <a class="blog-header-logo text-dark" href="../home">Amerta</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                  <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
              </div>
            </header>
          
            <div class="nav-scroller py-1 mb-2 sticky">
              <nav class="nav d-flex justify-content-center sticky-top">
                <a class="p-2 link-dark " href="../home"><h4>Home</h4></a>
                <a class="p-2 link-dark " href="../sejarah"><h4>Sejarah</h4></a>
                <a class="p-2 link-dark " href="../filsafat"><h4>Filsafat</h4></a>              
              </nav>
            </div>
          </div>
         
          @yield('content')
         @include('footer')
        
    </body>
    </html>