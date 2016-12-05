{% extends 'templates/default.php' %}

{% block resources %}
<link href="{{ resourcesUrl }}/css/userform.css" rel="stylesheet">
{% endblock %}

{% block title %} Edit Profile {% endblock %}

{% block content %}


        <form class="form-signin" action="{{ urlFor('user.profile.edit.post')}}" method="post" autocomplete="false">
          <h3 class="form-signin-heading">Edit Profile</h3>
          <label for="email">Email</label>
          {% if errors.first('email') %}
              <div class="alert alert-danger message" role="alert">
                {{ errors.first('email')}}
              </div>
          {% endif %}
          <input type="text" id="email" name="email" placeholder="Email address" class="form-control" autofocus value="{{ request.post('email') ? request.post('email') : auth.email }}">


          <label for="first_name">First Name</label>
          {% if errors.first('first_name') %}
              <div class="alert alert-danger message" role="alert">
                {{ errors.first('first_name')}}
              </div>
          {% endif %}
          <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control" autofocus value="{{ request.post('first_name') ? request.post('first_name') : auth.first_name }}">


          <label for="last_name">Last Name</label>
          {% if errors.first('last_name') %}
              <div class="alert alert-danger message" role="alert">
                {{ errors.first('last_name')}}
              </div>
          {% endif %}
          <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control" autofocus value="{{ request.post('last_name') ? request.post('last_name') : auth.last_name }}">

          <div class="btn-group btn-group-justified">
              <div class="btn-group"> <button class="btn btn-sm btn-primary btn-block btn-submit" type="submit">Update Details</button></div>
          </div>
          <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
        </form>
{% endblock %}
