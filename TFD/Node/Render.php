<?php

/**
 * Class TFD_Node_Render
 *
 * Transports the variable to be passed to the render method into a variable
 * before calling the render method. Prevents strict warnings.
 */

class TFD_Node_Render extends Twig_Node_Print
{

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write("echo tfd_render(")->subcompile($this->getNode('expr'))->raw(");\n");


    }
}
 
