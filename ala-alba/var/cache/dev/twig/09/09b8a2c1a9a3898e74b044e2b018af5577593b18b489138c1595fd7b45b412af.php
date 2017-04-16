<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ff309912f3d77ebbaaef1d126f6943cb7ba2210f405d27b30048d7365f31cba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2066c6dac71d144df4c9f97fafe3e5c05fc4de8a52443c5dcee36facd714c533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2066c6dac71d144df4c9f97fafe3e5c05fc4de8a52443c5dcee36facd714c533->enter($__internal_2066c6dac71d144df4c9f97fafe3e5c05fc4de8a52443c5dcee36facd714c533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_34b9800da360786351ca0b4d3c2d371780e61eefd7761a29137b9f3835b2d09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b9800da360786351ca0b4d3c2d371780e61eefd7761a29137b9f3835b2d09d->enter($__internal_34b9800da360786351ca0b4d3c2d371780e61eefd7761a29137b9f3835b2d09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2066c6dac71d144df4c9f97fafe3e5c05fc4de8a52443c5dcee36facd714c533->leave($__internal_2066c6dac71d144df4c9f97fafe3e5c05fc4de8a52443c5dcee36facd714c533_prof);

        
        $__internal_34b9800da360786351ca0b4d3c2d371780e61eefd7761a29137b9f3835b2d09d->leave($__internal_34b9800da360786351ca0b4d3c2d371780e61eefd7761a29137b9f3835b2d09d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be35b91a72beb1a611d67e01cead5541ebf5b5b9ee4133ad669f917c614e7657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be35b91a72beb1a611d67e01cead5541ebf5b5b9ee4133ad669f917c614e7657->enter($__internal_be35b91a72beb1a611d67e01cead5541ebf5b5b9ee4133ad669f917c614e7657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9ffe46305af40783e1cdd0076b74059ebb12bca07918f01e2a1c70919ffafc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffe46305af40783e1cdd0076b74059ebb12bca07918f01e2a1c70919ffafc44->enter($__internal_9ffe46305af40783e1cdd0076b74059ebb12bca07918f01e2a1c70919ffafc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9ffe46305af40783e1cdd0076b74059ebb12bca07918f01e2a1c70919ffafc44->leave($__internal_9ffe46305af40783e1cdd0076b74059ebb12bca07918f01e2a1c70919ffafc44_prof);

        
        $__internal_be35b91a72beb1a611d67e01cead5541ebf5b5b9ee4133ad669f917c614e7657->leave($__internal_be35b91a72beb1a611d67e01cead5541ebf5b5b9ee4133ad669f917c614e7657_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
