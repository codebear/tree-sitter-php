==========
Bug #60321 (ob_get_status(true) no longer returns an array when buffer is empty)
==========

<?php
$return = ob_get_status(true);
var_dump($return);

---

(program (script_section (expression_statement (assignment_expression (simple_variable (variable_name (name))) (function_call_expression (qualified_name (name)) (arguments (qualified_name (name)))))) (expression_statement (function_call_expression (qualified_name (name)) (arguments (simple_variable (variable_name (name))))))))
