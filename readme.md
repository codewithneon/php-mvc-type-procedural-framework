# <center> PHP MVC Type Procedural Framework <center>

App Structure 
~~~
|--app
|  |--about
|  |  |--index.php
|  |--category
|  |  |--index.php
|  |--includes
|  |  |--database.php
|  |  |--error.php
|  |  |--footer.php
|  |  |--functions.php
|  |  |--header.php
|  |  |--home.php
|  |--index.html
|--assets
|  |--bootstrap
|  |  |--css
|  |  |--js
|  |--datatables
|  |--select2
|  |--index.html
|  |--jquery.min.js
|--.gitignore
|--.httaccess
|--config.php
|--index.php
|--readme.md
~~~

very simple just duplicate the `about` folder and rename it. this will auto-detected `header.php` and `footer.php` on fly and auto register route. about page url is `http://localhost/index.php?url=about` or using htaccess `http://localhost/about`.
### <center> happy codding </center>