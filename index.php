
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="template/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="template/bootstrap-3.3.7-dist/css/font-awesome.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="template/bootstrap-3.3.7-dist/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="template/bootstrap-3.3.7-dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="template/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="template/bootstrap-3.3.7-dist/css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <!--  <script>
    function disable(dectext,enctext)
    {

    if ( enctext.value.length >= 1 )
    document.getElementById(dectext).disabled = true;

    else

    document.getElementById(dectext).disabled = false;
    }
  </script>-->



    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Encrypt & Decrypt</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">


    <div class="starter-template">
        <h1>Welcome You All</h1>
      </div>

<form class="form-horizontal" action="encrypt.php" method="post">

   <div class="form-group">
     <label class="control-label col-sm-2" for="email">Eneter the text(plain text) :</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" class="enableToggle"  id="text" name="text" placeholder="Enter text the text which you want to encrypt" onselect="function disable(dectext,enctext));">
     </div>
   </div>
   <div class="form-group">
     <label class="control-label col-sm-2" for="pwd">Enter the Text(encrypted) :</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" class="enableToggle"  id="dectext" name="dectext" placeholder="Entetr the tex which want to decrypt" >
     </div>
   </div>
   <div class="form-group">
     <label class="control-label col-sm-2" for="pwd">Enter the key :</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" id="key" name="key">
     </div>
   </div>

   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-default " id="enc" name="enc" align="right">Encrypt</button>
       <button type="submit" class="btn btn-default" id="dec" name="dec">Decrypt</button>
     </div>

   </div>

 </form>
 <form class="form-horizontal" action="fileencrypt.php" method="post">
   <div class="form-group">
     <label class="control-label col-sm-2" for="pwd">Choose your file :</label>
     <div class="col-sm-offset-2 col-sm-10">
     <label class="custom-file">
   <input type="file" id="file" class="custom-file-input">
   <span class="custom-file-control"></span>
   </label>
   </div>
   </div>
   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-default " id="enc" name="enc" align="right">Encrypt</button>
       <button type="submit" class="btn btn-default" id="dec" name="dec">Decrypt</button>
     </div>

   </div>
</form>
 <script>
   var downpayment = document.getElementById('dectext'),
       full_payment = document.getElementById('text');

   function enableToggle(current, other) {
       other.disabled = current.value.replace(/\s+/,'').length > 0;
   }

   dectext.onkeyup = function () {
       enableToggle(this, text);
   }
   text.onkeyup = function () {
       enableToggle(this, dectext);
   }
</script>





  </div>

  </body>
</html>
