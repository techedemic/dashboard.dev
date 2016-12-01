{% extends 'templates/default.php' %}

{% block title %} Edit Profile {% endblock %}

{% block content %}
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <form action="{{ urlFor('user.profile.edit.post')}}" method="post" autocomplete="off">
        <div>
            <label for="email">Username/Email</label>
            <input type="text" name="email" id="email" value="{{ request.post('email') ? request.post('email') : auth.email }}">
            {% if errors.first('email') %} {{ errors.first('email')}} {% endif %}
        </div>
        <div>
            <label for="first_name">First Name</label>
            <input type="first_name" name="first_name" id="first_name" value="{{ request.post('first_name') ? request.post('first_name') : auth.first_name }}">
            {% if errors.first('first_name') %} {{ errors.first('first_name')}} {% endif %}
        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input type="last_name" name="last_name" id="last_name" value="{{ request.post('last_name') ? request.post('last_name') : auth.last_name }}">
            {% if errors.first('last_name') %} {{ errors.first('last_name')}} {% endif %}
        </div>
        <div>
            <input type="submit" value="Update Details">
        </div>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
    </form>
{% endblock %}
