<?php
return [
    'inputContainer' => '<div class="form-group mb-3">{{content}}</div>',
    'inputContainerError' => '<div class="form-group mb-3 has-error">{{content}}{{error}}</div>',
    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
    'label' => '<label class="control-label"{{attrs}}>{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}"{{attrs}} class="form-control"/>',
    'textarea' => '<textarea name="{{name}}"{{attrs}} class="form-control">{{value}}</textarea>',
    'select' => '<select name="{{name}}"{{attrs}} class="form-control">{{content}}</select>',

    // Updated checkbox template
      // Used for checkboxes in checkbox() and multiCheckbox().
      'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
      // Input group wrapper for checkboxes created via control().
      'checkboxFormGroup' => '{{label}}',
      'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',



    // Updated radio template for horizontal alignment
    'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
    'radioWrapper' => '<div class="col-sm-8"><div class="radio">{{label}}</div></div>',

    'error' => '<div class="text-danger">{{content}}</div>',

    'error' => '<div class="text-danger" style="color: red;">{{content}}</div>',
    'submitContainer' => '<div class="form-group mb-3">{{content}}</div>',
    'button' => '<button class="btn btn-primary w-100"{{attrs}}>{{text}}</button>',
    'file' => '<input type="file" name="{{name}}"{{attrs}} class="form-control-file"/>',
];
