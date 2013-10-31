#  Macro helper for TWIG form - Beta #


## How to setup ##

Call your macro file into page where you want to use macro form.

<code>
	 {% import "macro.twig" as forms  %}
</code>


## How to use ##

*how to create input field:*
- - - -


```
{%
  set param = {  
    labelBefore: 'Type name: ',  
    labelBeforeClass: 'label_before_class',  
    labelAfter: 'Label after field',  
    labelAfterClass: 'label_affter_class',  
    size: 30,  
    class: 'block-inner',  
    placeholder: 'type name',  
    description: "<p>this is desription</p><p>loram ipsum</p>" 
  }  
%}  
{{ forms.input('name' , 'text' , param ) }}  
```
