
<nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a href="#" class="navbar-left"><img class="navbar-logo" src="{{ resourcesUrl }}/images/favicon.png"></a>
     <a class="navbar-brand" href="#">DASHBOARD.DEV</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav navbar-nav navbar-right">
       <li><a href="{{ urlFor('home') }}">Home</a></li>
       {% if auth %}

       <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="{{ urlFor('dashboard.view') }}">Dashboard 1</a></li>
             <li><a href="{{ urlFor('dashboard.view2') }}">Dashboard 2</a></li>
           </ul>
      </li>

       <!--<li><a href="{{ urlFor('dashboard.view') }}">Dashboard</a></li>-->
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ urlFor('user.profile', {username:auth.username}) }}">View Profile</a></li>
            <li><a href="{{ urlFor('user.profile.edit') }}">Update Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ urlFor('auth.password.change') }}">Change Password</a></li>
          </ul>
        </li>
            {% if auth.isAdmin() %}
            <li><a href="{{ urlFor('admin.example') }}">Admin</a></li>
            <li><a href="{{ urlFor('user.all') }}">All Users</a></li>
            {% endif %}
        <li><a href="{{ urlFor('logout') }}">Logout</a></li>
       {% else %}
       <li><a href="{{ urlFor('register') }}">Register</a></li>
       <li><a href="{{ urlFor('login') }}">Login</a></li>
       {% endif %}
       <li><a href="#" onclick="showNotImplemented();">Help</a></li>
     </ul>
   </div>
 </div>
</nav>
