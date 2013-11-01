#  Macro helper for TWIG form - Beta #

<nav>
[create input field](#inputField)
[create submit button](#submitField)
[create select dropdown](#select)
[create checkfield group](#checkfield)
[create checkfield single](#checkfieldsingle)
</nav>

## How to setup ##

Call your macro file into page where you want to use macro form.

```php  
	 {% import "macro.twig" as forms  %}
```

<br/>

## How to use ##

### <a name="inputField"></a>*how to create input field:* ###
- - - -

>text , url , email


```php  
{%
  set param = {  
    labelBefore: 'Type name: ',  
    labelBeforeClass: 'label_before_class',  
    labelAfter: 'Label after field',  
    labelAfterClass: 'label_affter_class',  
    size: 30,  
    class: 'block-inner',  
    placeholder: 'type name',  
    description: "<p>this is desription</p><p>loram ipsum</p>",
    fieldid: "id on field",
    value: "value field"
  }  
%}  
{{ forms.input('name' , 'type' , param ) }}  
```

####Create param array and put settings into variable example:####
  `labelBefore`      ->  attach label before field   
  `labelBeforeClass` ->  attach custom class into label before   
  `labelAfter`       ->  attach label after field   
  `labelAfterClass`  ->  attach custom class into label after   
  `size`             ->  length of field   
  `class`            ->  custom class on div wrapper   
  `placeholder`      ->  placeholder for field   
  `desciption`       ->  description div for attach html for description  
  `fieldid`          ->  attach custom id on field  
  `value`            ->  attach value on field

  After setup param you can init with:

  ` forms.input( 'name ' 'type ' , param_array ) `

  `name`         -> name of input field   
  `type`         -> type of field like `text` is (default) , `url` , `email` , ...   
  `param_array`  -> settings array defined in param variable   

<br/>

### <a name="submitField"></a>*how to create form button:* ###
- - -

```php  
    {{ forms.submit( 'name' , 'type' , 'value' , 'class' ) }}
```

  `name`    -> field name  
  `type`    -> type of field `submit` is (default) , `reset`  
  `value`   -> attach value on button  
  `class`   -> attach custom class on button wrapper  

<br/>

### <a name="select"></a> *how to create select dropdown* ###
- - -

```php  
{%
    set setParam = {  
        values : {  
            'first':'bannanas',  
            2:'orange',  
            3:'juice',  
            4: 'apple'  
        },  
        labelBefore: 'Label before: ',  
        labelBeforeClass: 'class_label_before',  
        labelAfter: 'Label after: ',  
        labelAfterClass: 'custom_label_after',  
        description: '<p>this is desciption</p>',  
        class: 'block-inner',  
        size: 3,  
        fieldid: 'customid',  
    }  
%}
{{ forms.select( 'name' , setParam ) }}
```

  in this function `value` is array of key and value who will be stored into select option,
  every item in array is option in select.
 
 `values`      -> is array for store `values` and `text` into select   
     `key'   -> is value into option field
     `value` -> is text into field
  
like:   
```php  
    values : {  
        'first':'bannanas',  
        1: 'orange'  
    }  
```   
in html we see this like  
```html  
    <select>  
        <option value='first'>bannanas</option>  
        <option value='1'>orange</option>  
    </select>  
```

`labelBefore`        ->  attach label before field  
`labelBeforeClass`   ->  attach class on label before  
`labelAfter`         ->  attach label after field  
`labelAfterClass`    ->  attach class on label after  
`description:`       ->  attach description  
`class`              ->  attach custom class on field wrapper  
`size`               ->  attach size attribute on select  
`fieldid`            ->  attach custom id into select  

<br/>

### <a name="checkfield"></a> *how to create radio & checkbox single* ###
- - -


```php
{%
    set setParam = {  
        groupLabel: 'Grup fild label: ',  
        labelPosition: "after",  
        values : {  
            'myname': {  
                text: 'albert',  
                class: 'albert-custom-class',  
                labelPosition: "before"  
            },  
            2: {  
                text: 'monkey',  
                checked: true  
            },  
            3: { text: 'dog' },  
            4: { text: 'cat' }  
        },  
        description: "<p>this is description</p>"  
    }  
%}  
{{ forms.checkfieldGroup('animals' , 'radio' , setParam) }} 
```

`groupLabel`           ->  attach label before or after all field  
`label position`       ->  group label position before or after  
`description`          ->  description  
`value`                ->  is array of param ( key = field value , value = field text )  
    `myname`              -> is array key is value of field  
        `text`            -> text for radio or checkbox  
        `class`           -> custom class of field  
        `labelPosition`   -> position of text  
        `checked`         -> true  
`id`                   -> id is prefix for field id + value.text becouse must be unique  
`class`                -> attach class on field wrapper  

<br/>

### <a name="checkfieldsingle"></a> *how to create radio & checkbox single* ###
- - -

```
{%php  
    set setParam = {  
        value: 'orange',  
        labelAfter: 'orange juice',  
        labelBefore: 'label before',  
        id: 'id',  
        class: 'class-custom',  
        checked: 'true',  
        fieldclass: 'field custom class'  
    }  
%}  
{{ forms.checkfield( 'name' , 'type' , setParam ) }}
```

`value`       -> value of checkbox/radio  
`labelAfter`  -> attach label after field  
`labelBefore` -> attach label before field  
`id`          -> attach id on field  
`class`       -> attach custom class  
`checked`     -> true/false set if field checked default is false  
`fieldclass`  -> attach field custom class  


## App version and update ##

Version: 1.0 - Beta