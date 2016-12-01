{% extends 'templates/default.php' %}

{% block resources %}
<link href="{{ resourcesUrl }}/css/userform.css" rel="stylesheet">
{% endblock %}

{% block title %} Login {% endblock %}

{% block content %}



      <form class="form-signin" action="{{ urlFor('login.post')}}" method="post" autocomplete="false">
        <h3 class="form-signin-heading">Please sign in</h3>
        <label for="identifier">Email address</label>
        <input type="text" id="identifier" name="identifier" class="form-control" placeholder="Username or Email Address" required autofocus {% if request.post('identifier')%} value="{{ request.post('identifier')}}" {% endif %}>
        {% if errors.first('identifier') %} {{ errors.first('identifier')}} {% endif %}
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        {% if errors.first('password') %} {{ errors.first('password')}} {% endif %}
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" id="remember"> Remember me
          </label>
          <a class="pull-right" href="{{ urlFor('auth.password.recover')}}">Forgot password</a>
        </div>
        <div class="btn-group btn-group-justified">
            <div class="btn-group"> <button class="btn btn-sm btn-primary btn-block btn-submit" type="submit">Sign in</button></div>
            <div class="btn-group"><a class="btn btn-sm btn-success btn-block btn-submit" role="button" aria-expanded="false" href="{{ urlFor('register')}}">Register</a></div>
        </div>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </form>



{% endblock %}
