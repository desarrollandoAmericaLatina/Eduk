from django.db import models
from django.contrib.auth.models import User
# Create your models here.
CHOICES_TYPE = (
    (u'1', u'Docente'),
    (u'2', u'Alumno'),
    (u'3', u'Apoderado'),
)

User.add_to_class('nombre', models.CharField(max_length=100, verbose_name='Nombre', null=False))
User.add_to_class('ubicacion', models.CharField(max_length=100, verbose_name='Direccion', null=True, help_text='(eg. direccion numero, comuna, ciudad)'))
User.add_to_class('fono', models.CharField(max_length=45, verbose_name='Telefono', null=False))
User.add_to_class('tipo', models.CharField(max_length=2, verbose_name='Tipo de usuario', choices=CHOICES_TYPE))
User.add_to_class('usuario_padre', models.ForeignKey('self', verbose_name='Responsable', null=True, blank=True))

class usuario(User):
    def __unicode__(self):
        return self.username

class establecimiento(models.Model):
    def filter_tipo(self):
        return usuario.objects.filter(usuario__tipo = '1')
    codigo = models.CharField(max_length=100, verbose_name='Codigo de identificacion', null=False, help_text='Codigo de identificacion nem')
    nombre = models.CharField(max_length=100, verbose_name='Nombre', null=False)
    ubicacion = models.CharField(max_length=100, verbose_name='Direccion', null=True, help_text='(eg. direccion numero, comuna, ciudad)')
    fono = models.CharField(max_length=45, verbose_name='Telefono', null=False)
    email = models.CharField(max_length=100, verbose_name='Correo', null=True)
    fecha_crea = models.DateField(auto_now=True)
    docentes = models.ManyToManyField(usuario)

    def __unicode__(self):
        return "($s) %s" % (self.codigo, self.nombre)


class curso(models.Model):
    nombre = models.CharField(max_length=50, verbose_name='Identificador', null=False, help_text='eg. 1A')
    fecha_inicio = models.DateTimeField(verbose_name='Fecha de inicio', null=False)
    fecha_fin = models.DateTimeField(verbose_name='Fecha de fin', null=False)

    def __unicode__(self):
        return self.nombre

    def __unicode__(self):
        return self.nombre

class asignatura(models.Model):
    nombre = models.CharField(max_length=50, verbose_name='Identificador', null=False, help_text='eg. Matematicas')
    docente = models.ForeignKey(usuario)
    curso = models.ForeignKey(curso)

    def __unicode__(self):
        return self.nombre

class temario(models.Model):
    id_padre = models.ForeignKey('self', null=True, blank=True, verbose_name='Pertenece a')
    titulo = models.CharField(max_length=100, verbose_name='Titulo', null=False)
    desc = models.TextField(verbose_name='Descripcion', null=True)
    curso = models.ForeignKey(curso)
    docente = models.ForeignKey(usuario)

    def __unicode__(self):
        return self.titulo

class material(models.Model):
    titulo = models.CharField(max_length=100, verbose_name='Titulo', null=False)
    detalle = models.TextField(verbose_name='Detalle de los matriales')
    asignatura = models.ForeignKey(asignatura)
    alumno = models.ForeignKey(usuario, null=True, blank=True)

    def __unicode__(self):
        return self.titulo

class evento(models.Model):
    titulo = models.CharField(max_length=100, verbose_name='Titulo', null=False)
    detalle = models.TextField(verbose_name='Detalle de los matriales')
    cursos = models.ManyToManyField(curso)
    alumnos = models.ManyToManyField(usuario, related_name='+')
    docente = models.ForeignKey(usuario, verbose_name='Roganizador')
    material = models.ForeignKey(material, null=True)

    def __unicode__(self):
        return self.titulo

class calendario(models.Model):
    fecha_inicio = models.DateTimeField(verbose_name='Fecha de inicio', null=False)
    fecha_fin = models.DateTimeField(verbose_name='Fecha de fin', null=False)
    evento = models.ForeignKey(evento, null=True)
    material = models.ForeignKey(material, null=True)

    def __unicode__(self):
        return self.fecha_inicio