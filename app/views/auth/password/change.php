{% extends 'templates/default.php' %}

{% block resources %}
<link href="{{ resourcesUrl }}/css/userform.css" rel="stylesheet">
{% endblock %}

{% block title %} Change password {% endblock %}

{% block content %}
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<form class="form-signin" action="{{ urlFor('auth.password.change.post') }}" method="post" autocomplete="false">
  <h3 class="form-signin-heading">Enter your new password</h3>

  <label for="password_old">Old Password</label>
  <input type="password" id="password_old" name="password_old" class="form-control" autofocus>
  {% if errors.first('password_old') %} {{ errors.first('password_old')}} {% endif %}

  <label for="password">Password</label>
  <input type="password" id="password" name="password" class="form-control" autofocus>
  {% if errors.first('password') %} {{ errors.first('password')}} {% endif %}

  <label for="password_confirm">Confirm Password</label>
  <input type="password" id="password_confirm" name="password_confirm" class="form-control" autofocus>
  {% if errors.first('password_confirm') %} {{ errors.first('password_confirm')}} {% endif %}

  <div class="btn-group btn-group-justified">
      <div class="btn-group"> <button class="btn btn-sm btn-primary btn-block btn-submit" type="submit">Change Password</button></div>
  </div>
  <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
</form>


{% endblock %}
