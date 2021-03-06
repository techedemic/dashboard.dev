<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Dashboard | {% block title %} {%endblock%} </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <!-- Custom styles for this template -->
        <link href="{{ resourcesUrl }}/css/dashboard.css" rel="stylesheet" type="text/css">

        <link rel="icon" href="{{ resourcesUrl }}/images/favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ resourcesUrl }}/javascript/main.js"></script>

        {%block resources %}
        {%endblock %}
    </head>
    <body>
        <div class="container-fluid main">

        {% include 'templates/partials/messages.php' %}
        {% include 'templates/partials/navigation.php' %}
        {%block content %}
        {%endblock %}
        </div>



        <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modelInfoLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modelInfoLabel">Help | {% block helptitle %}{% endblock %}</h4>
              </div>
              <div class="modal-body">
                {% block helpcontent %}
                {% endblock %}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!--<script type="text/javascript" src="{{ resourcesUrl }}/javascript/chart.js"></script>-->
    </body>
</html>
