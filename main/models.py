from django.db import models
from django.contrib.auth import User
# Create your models here.

class usuario(models.Model):
    def __unicode__(self):
        return self.username

class establecimiento(models.Model):
    codigo = models.CharField(max_length=100, verbose_name='Codigo de identificacion', null=False, help_text='Codigo de identificacion nem')
    nombre = models.CharField(max_length=50, verbose_name='Nombre', null=False)
    ubicacion = models.CharField(max_length=100, verbose_name='Direccion', null=True, help_text='(eg. direccion numero, comuna, ciudad)')

