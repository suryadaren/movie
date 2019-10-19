<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
</head>
<body>
  
  <form method="post" action="/loginCheck">
    {{csrf_field()}}
    <div class="box">
      <h1>Dashboard</h1>

      <input type="text" name="username" class="email" placeholder="input username here" />
        
      <input type="password" name="password" class="email" placeholder="input password here" />
      
      <input style="width: 90%" type="submit" value="Submit" class="btn btn-primary">
        
    </div> <!-- End Box -->
      
  </form>
  
    <!-- jquery
    ============================================ -->
    <script src="/admin_template/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="/admin_template/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
      @if(Session::has('message'))
        var type="{{Session::get('alert-type','success')}}"
      
        switch(type){
          case 'success':
           toastr.info("{{ Session::get('message') }}");
           break;
        case 'error':
          toastr.error("{{ Session::get('message') }}");
          break;
        }
      @endif
    </script>
</body>
</html>
