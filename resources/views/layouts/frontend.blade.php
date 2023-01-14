<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <title>PLATILLA</title>
     <!-- Bootstrap core CSS -->
     @vite(['resources/css/formulario.css']);    
@vite(['resources/css/bootstrap.min.css']);
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
 <!-- Custom styles for this template -->
 <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
 <!-- Custom styles for this template -->


 @vite(['resources/css/blog.css']);

</head>

    <body class="bg-light">
    
        <div class="container">
          <main>
            <div class="py-5 text-center">
              <img class="d-block mx-auto mb-4" src="resources/images/bootstrap-logo.svg" alt="" width="100" height="57">
              <h2>Checkout form</h2>
              <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div>
    <!--contenido -->
    @yield('content')
    <!--contenido -->
</body>
</html>