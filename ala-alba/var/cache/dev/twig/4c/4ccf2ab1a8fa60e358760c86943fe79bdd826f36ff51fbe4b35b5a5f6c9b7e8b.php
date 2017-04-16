<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_28358bd7897afacdd553a1dbfafebeb6971711ca4388c68ece0316d74c68740b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_23d0149df761721130700976b13d3a2f7a2760a3b82323c6aeb5989116271362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d0149df761721130700976b13d3a2f7a2760a3b82323c6aeb5989116271362->enter($__internal_23d0149df761721130700976b13d3a2f7a2760a3b82323c6aeb5989116271362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_499b824c33ad2214b3c9ea76f16ca6f17e6a09d4082daf8db38d99bfe5333188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499b824c33ad2214b3c9ea76f16ca6f17e6a09d4082daf8db38d99bfe5333188->enter($__internal_499b824c33ad2214b3c9ea76f16ca6f17e6a09d4082daf8db38d99bfe5333188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d0149df761721130700976b13d3a2f7a2760a3b82323c6aeb5989116271362->leave($__internal_23d0149df761721130700976b13d3a2f7a2760a3b82323c6aeb5989116271362_prof);

        
        $__internal_499b824c33ad2214b3c9ea76f16ca6f17e6a09d4082daf8db38d99bfe5333188->leave($__internal_499b824c33ad2214b3c9ea76f16ca6f17e6a09d4082daf8db38d99bfe5333188_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a39dfed4cc8ca7ea9f530750205c06c4ae53b17148434e138c01cdd7bffa968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a39dfed4cc8ca7ea9f530750205c06c4ae53b17148434e138c01cdd7bffa968->enter($__internal_1a39dfed4cc8ca7ea9f530750205c06c4ae53b17148434e138c01cdd7bffa968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24c6c48c34df4cd1f0a247404d150d307090977d101bda9f0cdf9699e6eb722b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c6c48c34df4cd1f0a247404d150d307090977d101bda9f0cdf9699e6eb722b->enter($__internal_24c6c48c34df4cd1f0a247404d150d307090977d101bda9f0cdf9699e6eb722b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_24c6c48c34df4cd1f0a247404d150d307090977d101bda9f0cdf9699e6eb722b->leave($__internal_24c6c48c34df4cd1f0a247404d150d307090977d101bda9f0cdf9699e6eb722b_prof);

        
        $__internal_1a39dfed4cc8ca7ea9f530750205c06c4ae53b17148434e138c01cdd7bffa968->leave($__internal_1a39dfed4cc8ca7ea9f530750205c06c4ae53b17148434e138c01cdd7bffa968_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
