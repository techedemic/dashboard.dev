<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DASHBOARD.DEV</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="resources/css/dashboard.css" rel="stylesheet">
    <link rel="icon" href="resources/images/favicon.png">
    <script type="text/javascript" src="resources/javascript/main.js"></script>
  </head>
  <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container-fluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a href="#" class="navbar-left"><img style="margin-top: 13px;" width="24px" height="24px" src="resources/images/favicon.png"></a>
           <a class="navbar-brand" href="#">DASHBOARD.DEV</a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
             <li><a href="#">Dashboard</a></li>
             <li><a href="#">Settings</a></li>
             <li><a href="#">Profile</a></li>
             <li><a href="#" onclick="showNotImplemented();">Help</a></li>
           </ul>
         </div>
       </div>
     </nav>

     <div class="container-fluid">
       <div class="row">
         <div class="col-sm-3 col-md-2 sidebar">
           <ul class="nav nav-sidebar">
             <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
             <li><a href="#">Reports</a></li>
             <li><a href="#">Analytics</a></li>
             <li><a href="#">Export</a></li>
           </ul>
         </div>
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           <h1 class="page-header">Dashboards</h1>

           <div class="row placeholders">
             <div class="col-xs-6 col-sm-3 placeholder">
               <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
               <h4>Dashboard 1</h4>
               <span class="text-muted">Something else</span>
             </div>
             <div class="col-xs-6 col-sm-3 placeholder">
               <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
               <h4>Dashboard 2</h4>
               <span class="text-muted">Something else</span>
             </div>
             <div class="col-xs-6 col-sm-3 placeholder">
               <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
               <h4>Dashboard 3</h4>
               <span class="text-muted">Something else</span>
             </div>
             <div class="col-xs-6 col-sm-3 placeholder">
               <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
               <h4>Dashboard 4</h4>
               <span class="text-muted">Something else</span>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Modal -->
        <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modelInfoLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modelInfoLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
