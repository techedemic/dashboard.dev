{% extends 'templates/default.php' %}

{% block resources %}
<link href="{{ resourcesUrl }}/css/userform.css" rel="stylesheet">
{% endblock %}

{% block title %} Recover Password {% endblock %}

{% block content %}


    <form class="form-signin" action="{{ urlFor('auth.password.recover.post')}}" method="post" autocomplete="false">
      <h3 class="form-signin-heading">Enter your new password</h3>
      <label for="email">Password</label>
      <input type="text" id="email" name="email" placeholder="Email address" class="form-control"autofocus>
      {% if errors.first('email') %} {{ errors.first('email')}} {% endif %}

      <div class="btn-group btn-group-justified">
          <div class="btn-group"> <button class="btn btn-sm btn-primary btn-block btn-submit" type="submit">Request Password Reset</button></div>
      </div>
      <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
    </form>
{% endblock %}
