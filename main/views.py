from django.contrib import auth
from django.contrib.auth import get_backends
from django.contrib.auth.decorators import login_required
from django.contrib.auth.models import get_hexdigest
from django.core.urlresolvers import reverse
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from django.utils import simplejson as json
from main.models import *
from main.form import *
# Create your views here.

def login(request):
    if request.method == 'POST':
        form = LoginForm(request.POST)

        if form.is_valid():

            username = request.POST['username']
            password = request.POST['password']

            user = auth.authenticate(username=username, password=username)

            if user is not None:
                if user.is_active:
                    auth.login(request, user)
                    return HttpResponse(json.dumps({"login": True}))
                else:
                    return HttpResponse(json.dumps({"login": False}))
            else:
                return HttpResponse(json.dumps({"login": False}))
        else:
            return render_to_response('login.html')

    else:
        return render_to_response('login.html')

@login_required
def evento(request, id = 0):
    if id != 0:
        lista_alumnos = User.objects.filter(usuario_padre=request.user.id and id!=request.user.id)
        return render_to_response('eventos.html', {
            'tipo': request.user.tipo
        })
    else:
        if request.user.tipo == '3':
            return HttpResponseRedirect('/pupilos/')
    

@login_required
def material(request):
    return render_to_response('materiales.html')

@login_required
def temario(request):
    return render_to_response('temarios.html')

@login_required
def pupilo(request):
    lista_alumnos = User.objects.filter(usuario_padre=request.user.id)
    return render_to_response('pupilos.html', {
        'lista_alumnos': lista_alumnos
    })