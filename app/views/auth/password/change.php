{% extends 'templates/default.php' %}

{% block resources %}
<link href="{{ resourcesUrl }}/css/userform.css" rel="stylesheet">
{% endblock %}

{% block title %} Change Password {% endblock %}
{% block helptitle %} Change Password {% endblock %}
{% block helpcontent %} Here you can change your password {% endblock %}

{% block content %}
<form class="form-signin" action="{{ urlFor('auth.password.change.post') }}" method="post" autocomplete="false">
  <h3 class="form-signin-heading">Enter your new password</h3>

  <label for="password_old">Old Password</label>
  {% if errors.first('password_old') %}
      <div class="alert alert-danger message" role="alert">
        {{ errors.first('password_old')}}
      </div>
  {% endif %}
  <input type="password" id="password_old" name="password_old" class="form-control" autofocus>

  <label for="password">Password</label>
  {% if errors.first('password') %}
      <div class="alert alert-danger message" role="alert">
        {{ errors.first('password')}}
      </div>
  {% endif %}
  <input type="password" id="password" name="password" class="form-control" autofocus>

  <label for="password_confirm">Confirm Password</label>
  {% if errors.first('password_confirm') %}
      <div class="alert alert-danger message" role="alert">
        {{ errors.first('password_confirm')}}
      </div>
  {% endif %}
  <input type="password" id="password_confirm" name="password_confirm" class="form-control" autofocus>

  <div class="btn-group btn-group-justified">
      <div class="btn-group"> <button class="btn btn-sm btn-primary btn-block btn-submit" type="submit">Change Password</button></div>
  </div>
  <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
</form>


{% endblock %}
