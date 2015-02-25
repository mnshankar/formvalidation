##Slight mods to Jeffrey Way's laracasts/validation to play nice with php 5.3+
##if you have php 5.4+, please get laracasts/validation!

Install the package using composer.
```js
"require": {
    "mnshankar/formvalidation": "~1.0"
}
```

If using Laravel (not required), add the service provider to `app/config/app.php` in the `providers` array.

```php
'mnshankar\Validation\ValidationServiceProvider'
```

## Usage

Please refer to https://github.com/laracasts/Validation for detailed instructions.