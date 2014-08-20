The following files are simply duplicates from the Bootstrap SASS library. With
modifications in were to reference the imports. In theory, you could replace
them if you update the Bootstrap framework by copying them from that framework
again. Just make sure to modify the import paths to reference the
`./bootstrap-sass/vendor/assets/stylesheets/bootstrap/` folder:
```
./sass/bootstrap.scss
./sass/variables.scss
```

The `./sass/variables.scss` file is generally where you will spend most of
your time customizing the various Bootstrap settings. Feel free to manually
edit it or even replace it with a service like
[BootTheme](http://www.boottheme.com).

And finally, the `./sass/global.scss` file is the glue that holds it all
together and compiles everything into one file. Generally, you will not need
to modify this file unless you need to add or remove imported files. For
example, if you do not want your site to have responsive capabilities, free to
comment or remove that line. If you are a file hierarchy wizard and need to
separate your theme into multiple files, insert additional `@import '...';`
lines.
