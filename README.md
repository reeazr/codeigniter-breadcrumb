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

You can alternatively load the library in the controller itself before calling its methods.

    $this->load->library('mybreadcrumb');
    
From your controller, add the following line

    $this->mybreadcrumb->add('Home', base_url());
    $this->mybreadcrumb->add('Cities', base_url('cities/listing'));

And finally

    $this->data['breadcrumbs'] = $this->mybreadcrumb->render();
    
and pass $this->data to your view to be displayed, like

    $this->load->view('cities/listing',$this->data);
    
Kindly note that the last item loaded will be active, rendered as non-clickable since it is expected to the current page.


