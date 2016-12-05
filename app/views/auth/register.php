{% extends 'templates/default.php' %}

{% block resources %}
<link href="{{ resourcesUrl }}/css/userform.css" rel="stylesheet">
{% endblock %}

{% block title %} Register {% endblock %}

{% block content %}



  <form class="form-signin" action="{{ urlFor('register.post')}}" method="post" autocomplete="false">
    <h2 class="form-signin-heading">Register</h2>
    <label for="email">Email</label>
    {% if errors.first('email') %}
        <div class="alert alert-danger message" role="alert">
          {{ errors.first('email')}}
        </div>
    {% endif %}
    <input type="text" id="email" name="email" class="form-control" placeholder="Email Address"  autofocus {% if request.post('email')%} value="{{ request.post('email')}}" {% endif %}>

    <label for="username">Username</label>
    {% if errors.first('username') %}
        <div class="alert alert-danger message" role="alert">
          {{ errors.first('username')}}
        </div>
    {% endif %}
    <input type="text" id="username" name="username" class="form-control" placeholder="Username" {% if request.post('username')%} value="{{ request.post('username')}}" {% endif %}>



    <label for="password">Password</label>
    {% if errors.first('password') %}
        <div class="alert alert-danger message" role="alert">
          {{ errors.first('password')}}
        </div>
    {% endif %}
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" >

    <label for="password_confirm">Confirm Password</label>
    {% if errors.first('password_confirm') %}
        <div class="alert alert-danger message" role="alert">
          {{ errors.first('password_confirm')}}
        </div>
    {% endif %}
    <input type="password" id="password_confirm" name="password_confirm" class="form-control" placeholder="Confirm Password" >


    <div class="btn-group btn-group-justified">
        <div class="btn-group"><button class="btn btn-sm btn-primary btn-block btn-submit" type="submit">Register</button></div>

    </div>

    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
  </form>




{% endblock %}
