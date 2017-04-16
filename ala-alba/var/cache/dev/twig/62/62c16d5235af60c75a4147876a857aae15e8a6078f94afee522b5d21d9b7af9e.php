<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a55d3fc3c0ae6f5f7a25736d0fc21191641f019ec9bb6dd8fabd9db814033e81 extends Twig_Template
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
        $__internal_87bffd12e498243837434db18e369050df91a0a2ff35636b81380817afc15182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bffd12e498243837434db18e369050df91a0a2ff35636b81380817afc15182->enter($__internal_87bffd12e498243837434db18e369050df91a0a2ff35636b81380817afc15182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_530701ae0ec7cc0d74429098f906927f8e15c8a99098b1c72cd9f65e1c281e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530701ae0ec7cc0d74429098f906927f8e15c8a99098b1c72cd9f65e1c281e8c->enter($__internal_530701ae0ec7cc0d74429098f906927f8e15c8a99098b1c72cd9f65e1c281e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87bffd12e498243837434db18e369050df91a0a2ff35636b81380817afc15182->leave($__internal_87bffd12e498243837434db18e369050df91a0a2ff35636b81380817afc15182_prof);

        
        $__internal_530701ae0ec7cc0d74429098f906927f8e15c8a99098b1c72cd9f65e1c281e8c->leave($__internal_530701ae0ec7cc0d74429098f906927f8e15c8a99098b1c72cd9f65e1c281e8c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_11f90310f114f88cff7d4691b2bd3be1aa0ce7c3293b72927b73bb4f2934cd40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f90310f114f88cff7d4691b2bd3be1aa0ce7c3293b72927b73bb4f2934cd40->enter($__internal_11f90310f114f88cff7d4691b2bd3be1aa0ce7c3293b72927b73bb4f2934cd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e561f5c9969ee227fca8bd5faf1f8132cfce646e787c318881762500002c7030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e561f5c9969ee227fca8bd5faf1f8132cfce646e787c318881762500002c7030->enter($__internal_e561f5c9969ee227fca8bd5faf1f8132cfce646e787c318881762500002c7030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e561f5c9969ee227fca8bd5faf1f8132cfce646e787c318881762500002c7030->leave($__internal_e561f5c9969ee227fca8bd5faf1f8132cfce646e787c318881762500002c7030_prof);

        
        $__internal_11f90310f114f88cff7d4691b2bd3be1aa0ce7c3293b72927b73bb4f2934cd40->leave($__internal_11f90310f114f88cff7d4691b2bd3be1aa0ce7c3293b72927b73bb4f2934cd40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
