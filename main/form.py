from django import forms

class LoginForm(forms.Form):
	username = forms.CharField(max_length=45)
	password = forms.CharField(widget=forms.PasswordInput(render_value=False),max_length=100)
  