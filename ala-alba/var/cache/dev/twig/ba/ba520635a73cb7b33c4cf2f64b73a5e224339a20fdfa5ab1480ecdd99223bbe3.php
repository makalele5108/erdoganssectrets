<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_3608afeecfbf49a60f5a7e73f609adb33c2c637440720f91b8e132b5743a52fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fda2ed099206630b638cf53e70c940986163fa191306f5d5789184e3ec849c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda2ed099206630b638cf53e70c940986163fa191306f5d5789184e3ec849c59->enter($__internal_fda2ed099206630b638cf53e70c940986163fa191306f5d5789184e3ec849c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_32477fb9c0a6ad3f2f9f502f43473660146291cc0544568dfd79c9307644bc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32477fb9c0a6ad3f2f9f502f43473660146291cc0544568dfd79c9307644bc95->enter($__internal_32477fb9c0a6ad3f2f9f502f43473660146291cc0544568dfd79c9307644bc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fda2ed099206630b638cf53e70c940986163fa191306f5d5789184e3ec849c59->leave($__internal_fda2ed099206630b638cf53e70c940986163fa191306f5d5789184e3ec849c59_prof);

        
        $__internal_32477fb9c0a6ad3f2f9f502f43473660146291cc0544568dfd79c9307644bc95->leave($__internal_32477fb9c0a6ad3f2f9f502f43473660146291cc0544568dfd79c9307644bc95_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3c26db93d1e0be3217db2d543fe0d58a11cb619dfa79810f10b1580453a6a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c26db93d1e0be3217db2d543fe0d58a11cb619dfa79810f10b1580453a6a24->enter($__internal_e3c26db93d1e0be3217db2d543fe0d58a11cb619dfa79810f10b1580453a6a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4025e398ed91aeedb68918dc8842f6c0b52eeff9801b7b7f46111e2bda2a698d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4025e398ed91aeedb68918dc8842f6c0b52eeff9801b7b7f46111e2bda2a698d->enter($__internal_4025e398ed91aeedb68918dc8842f6c0b52eeff9801b7b7f46111e2bda2a698d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4025e398ed91aeedb68918dc8842f6c0b52eeff9801b7b7f46111e2bda2a698d->leave($__internal_4025e398ed91aeedb68918dc8842f6c0b52eeff9801b7b7f46111e2bda2a698d_prof);

        
        $__internal_e3c26db93d1e0be3217db2d543fe0d58a11cb619dfa79810f10b1580453a6a24->leave($__internal_e3c26db93d1e0be3217db2d543fe0d58a11cb619dfa79810f10b1580453a6a24_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
