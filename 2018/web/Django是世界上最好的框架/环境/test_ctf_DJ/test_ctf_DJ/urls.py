"""test_ctf_DJ URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.11/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""
from django.conf.urls import url
from django.contrib import admin
from . import views
# urlpatterns = [
#     url(r'^admin/', admin.site.urls),
# ]

urlpatterns = [
    url(r'^admin/', admin.site.urls),
    url(r'login', views.logmein),
    url(r'logout', views.logmeout),
    url(r'register', views.register),
    url(r'make', views.makememe),
    url(r'view/(?P<meme>\d+)', views.viewmeme),
    url(r'view', views.viewmeme),
    url(r'index', views.index),
    url(r'^/?$', views.index),
    ]
