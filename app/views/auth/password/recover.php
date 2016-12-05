{% extends 'templates/default.php' %}

{% block resources %}
<link href="{{ resourcesUrl }}/css/userform.css" rel="stylesheet">
{% endblock %}

{% block title %} Recover Password {% endblock %}

{% block content %}


    <form class="form-signin" action="{{ urlFor('auth.password.recover.post')}}" method="post" autocomplete="false">
      <h3 class="form-signin-heading">Enter your new password</h3>
      <label for="email">Password</label>
      {% if errors.first('email') %}
          <div class="alert alert-danger message" role="alert">
            {{ errors.first('email')}}
          </div>
      {% endif %}
      <input type="text" id="email" name="email" placeholder="Email address" class="form-control"autofocus>      

      <div class="btn-group btn-group-justified">
          <div class="btn-group"> <button class="btn btn-sm btn-primary btn-block btn-submit" type="submit">Request Password Reset</button></div>
      </div>
      <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
    </form>
{% endblock %}
