widget-custom-id
================

This project shows how the id of a widget is not customized while the id of a label is.

See [my question on stackoverflow](https://stackoverflow.com/questions/45962997/how-can-i-define-the-id-attribute-of-a-widget-in-a-form-from-a-symfony-controlle).

```
$builder
    ->add('surname', TextType::class, [
        'label_attr' => ['id' => 'my_custom_id1'],
        'attr'       => ['id' => 'my_custom_id2'],
    ])
```


![Alt text](test_of_widget_id_customization.png?raw=true "Title")

To run the application:  
&nbsp;&nbsp;&nbsp;&nbsp; 1. Execute the php bin/console server:start command.  
&nbsp;&nbsp;&nbsp;&nbsp; 2. Browse to the http://localhost:8000 URL.  
