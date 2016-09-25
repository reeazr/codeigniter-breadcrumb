# codeigniter-breadcrumb
A small library to generate breadcrumbs for codeigniter 3

Copy the file to system\libraries folder.

There are 2 methods:
add()
render()

add() will add each breadcrumbs to the stack
render() will generate the full breadcrumb.

You can get the library loaded automatically by adding it in
application\config\autoload.php
Look for the line
$autoload['libraries']
and add it to the array

From your controller, add the following line

    $this->mybreadcrumb->add('Home', base_url());
    $this->mybreadcrumb->add('Cities', base_url('cities/listing'));
