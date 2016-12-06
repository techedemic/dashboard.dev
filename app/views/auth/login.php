{% extends 'templates/default.php' %}

{% block resources %}
<link href="{{ resourcesUrl }}/css/userform.css" rel="stylesheet">
{% endblock %}

{% block title %} Login {% endblock %}
{% block helptitle %} Login {% endblock %}
{% block helpcontent %} Login help window {% endblock %}
{% block content %}



      <form class="form-signin" action="{{ urlFor('login.post')}}" method="post" autocomplete="false">
        <h3 class="form-signin-heading">Please sign in</h3>
        <label for="identifier">Email address or Username</label>
        {% if errors.first('identifier') %}
            <div class="alert alert-danger message" role="alert">
              {{ errors.first('identifier')}}
            </div>
        {% endif %}
        <input type="text" id="identifier" name="identifier" class="form-control" placeholder="Username or Email Address" autofocus {% if request.post('identifier')%} value="{{ request.post('identifier')}}" {% endif %}>
        <label for="password">Password</label>
        {% if errors.first('password') %}
            <div class="alert alert-danger message" role="alert">
              {{ errors.first('password')}}
            </div>
        {% endif %}
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        {% if errors.first('password') %} {{ errors.first('password')}} {% endif %}
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" id="remember"> Remember me
          </label>
          <div class="pull-right">
              <a  href="{{ urlFor('register')}}">Register</a> | <a href="{{ urlFor('auth.password.recover')}}">Forgot password</a>
          </div>
        </div>
        <div class="btn-group btn-group-justified">
            <div class="btn-group"> <button class="btn btn-sm btn-primary btn-block btn-submit" type="submit">Sign in</button></div>
            <!--<div class="btn-group"><a class="btn btn-sm btn-success btn-block btn-submit" role="button" aria-expanded="false" href="{{ urlFor('register')}}">Register</a></div>-->
        </div>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </form>



{% endblock %}
