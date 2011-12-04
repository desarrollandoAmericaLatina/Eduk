from django.conf.urls.defaults import patterns, include, url
from main.views import *
import os.path

PROJECT_DIR = os.path.dirname(__file__)
# Uncomment the next two lines to enable the admin:
from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'Eduk.views.home', name='home'),
    # url(r'^Eduk/', include('Eduk.foo.urls')),
    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),
    # Uncomment the next line to enable the admin:
    url(r'^admin/', include(admin.site.urls)),
    url(r'^css/(?P<path>.*)$', 'django.views.static.serve', {'document_root': os.path.join(PROJECT_DIR, 'main/src/stylesheets/')}),
    url(r'^js/(?P<path>.*)$', 'django.views.static.serve', {'document_root': os.path.join(PROJECT_DIR, 'main/src/javascripts/')}),
    url(r'^img/(?P<path>.*)$', 'django.views.static.serve', {'document_root': os.path.join(PROJECT_DIR, 'images/')}),

    url(r'login/$', login),
    url(r'^materiales/$', material),
    url(r'^temarios/$', temario),
    url(r'^pupilos/$', pupilo),
    url('^home/$', evento),
    url('^home/(\d+)/$', evento),
)