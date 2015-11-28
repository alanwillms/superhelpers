<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

register_primitive_type_handler('string', 'superhandlers\StringHandler');
register_primitive_type_handler('null', 'superhandlers\NullHandler');
register_primitive_type_handler('bool', 'superhandlers\BoolHandler');
register_primitive_type_handler('int', 'superhandlers\IntHandler');
register_primitive_type_handler('float', 'superhandlers\FloatHandler');
register_primitive_type_handler('array', 'superhandlers\ArrayHandler');
register_primitive_type_handler('resource', 'superhandlers\ResourceHandler');
