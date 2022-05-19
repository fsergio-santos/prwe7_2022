<html>
    <head>
       <meta charset="utf-8">  
       <meta name="viewport" content="width=device-width, initial-scale=1">
      
       <meta name="csrf-token" content="{{ csrf_token()}}">
       
       <link href="{{ asset( 'css/main.css' ) }}" rel="stylesheet"/>
       <link href="{{ asset( 'css/tabela_responsiva.css' ) }}" rel="stylesheet"/>
       <link href="{{ asset( 'font-awesome/css/font-awesome.min.css' ) }}" rel="stylesheet"/> 
     </head>
    
    <body class="app sidebar-mini rtl" >
       
        <header>
           @include('layouts.header')
        </header>

        <aside>
           @include('layouts.sidebar')
        </aside>

        <main class="app-content">
           @yield('content')  
        </main>

        
        <script src="{{ asset('js/jquery-3.3.1.min.js')  }}"></script>
        <script src="{{ asset('js/popper.min.js')  }}"></script>
        <script src="{{ asset('js/bootstrap.min.js')  }}"></script>
        <script src="{{ asset('js/main.js')  }}"></script>
        <script src="{{ asset('js/plugins/moment.min.js')  }}"></script>
        <script src="{{ asset('js/plugins/pace.min.js')  }}"></script>
       
       
        @yield('javascript') 

        

    </body>    

</html>