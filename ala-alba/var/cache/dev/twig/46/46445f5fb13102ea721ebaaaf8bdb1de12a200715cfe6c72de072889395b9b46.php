<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9745771f1c49be21927a88ba74bc157540699d92acf13d281f115b1541c99a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_47d1671fd1ea9fa6bf8da6fdbfc723661d68c1b5605bcf195ad4788fdbf5f795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d1671fd1ea9fa6bf8da6fdbfc723661d68c1b5605bcf195ad4788fdbf5f795->enter($__internal_47d1671fd1ea9fa6bf8da6fdbfc723661d68c1b5605bcf195ad4788fdbf5f795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1284b77de63229de878454c1dd6bfe7d8e99fd921955835cc554f8ac20bc1cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1284b77de63229de878454c1dd6bfe7d8e99fd921955835cc554f8ac20bc1cc7->enter($__internal_1284b77de63229de878454c1dd6bfe7d8e99fd921955835cc554f8ac20bc1cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d1671fd1ea9fa6bf8da6fdbfc723661d68c1b5605bcf195ad4788fdbf5f795->leave($__internal_47d1671fd1ea9fa6bf8da6fdbfc723661d68c1b5605bcf195ad4788fdbf5f795_prof);

        
        $__internal_1284b77de63229de878454c1dd6bfe7d8e99fd921955835cc554f8ac20bc1cc7->leave($__internal_1284b77de63229de878454c1dd6bfe7d8e99fd921955835cc554f8ac20bc1cc7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e62625d5e46e3335de53ce5de69fa8e7459148ad6bfff1b63d212ea5c582b005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62625d5e46e3335de53ce5de69fa8e7459148ad6bfff1b63d212ea5c582b005->enter($__internal_e62625d5e46e3335de53ce5de69fa8e7459148ad6bfff1b63d212ea5c582b005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6698ea980ffd3247c74ebc1d73ea69d2bf76451a52b433795b7d25320794380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6698ea980ffd3247c74ebc1d73ea69d2bf76451a52b433795b7d25320794380->enter($__internal_d6698ea980ffd3247c74ebc1d73ea69d2bf76451a52b433795b7d25320794380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d6698ea980ffd3247c74ebc1d73ea69d2bf76451a52b433795b7d25320794380->leave($__internal_d6698ea980ffd3247c74ebc1d73ea69d2bf76451a52b433795b7d25320794380_prof);

        
        $__internal_e62625d5e46e3335de53ce5de69fa8e7459148ad6bfff1b63d212ea5c582b005->leave($__internal_e62625d5e46e3335de53ce5de69fa8e7459148ad6bfff1b63d212ea5c582b005_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
