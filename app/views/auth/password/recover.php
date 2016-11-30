{% extends 'templates/default.php' %}

{% block title %} Recover Password {% endblock %}

{% block content %}
    <form action="{{ urlFor('auth.password.recover.post')}}" method="post" autocomplete="off">
        <p>Enter your email address to start your password recovery</p>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email"{% if request.post('email')%} value={{ request.post('email') }} {% endif %}>
            {% if errors.has('email') %} {{ errors.first('email')}} {% endif %}
        </div>
        <div>
            <input type="submit" value="Request password reset">
        </div>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
    </form>

{% endblock %}
