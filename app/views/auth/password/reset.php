{% extends 'templates/default.php' %}

{% block resources %}
<link href="{{ resourcesUrl }}/css/userform.css" rel="stylesheet">
{% endblock %}

{% block title %} Reset Password {% endblock %}

{% block content %}


    <form class="form-signin" action="{{ urlFor('auth.password.reset.post')}}?email={{ email}}&identifier={{ identifier|url_encode }}" method="post" autocomplete="false">
      <h3 class="form-signin-heading">Enter your new password</h3>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" class="form-control"autofocus>
      {% if errors.first('password') %} {{ errors.first('password')}} {% endif %}
      <label for="password_confirm">Confirm Password</label>
      <input type="password" id="password_confirm" name="password_confirm" class="form-control">
      {% if errors.first('password_confirm') %} {{ errors.first('password_confirm')}} {% endif %}

      <div class="btn-group btn-group-justified">
          <div class="btn-group"> <button class="btn btn-sm btn-primary btn-block btn-submit" type="submit">Change Password</button></div>
      </div>
      <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
    </form>




{% endblock %}
