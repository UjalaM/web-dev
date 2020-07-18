# Generated by Django 3.0.4 on 2020-07-16 09:50

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='ContactForm',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(blank=True, max_length=300)),
                ('email_id', models.CharField(blank=True, max_length=300)),
                ('contact_num', models.CharField(blank=True, max_length=300)),
                ('message', models.TextField(blank=True, max_length=300)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
            ],
        ),
    ]
