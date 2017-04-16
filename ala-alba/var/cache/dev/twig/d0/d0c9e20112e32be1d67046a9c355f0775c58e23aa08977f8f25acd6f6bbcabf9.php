<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6cba369643e324ffc996ab8530106c54327f34bba81c00fd5561512aed901c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_a825c498b2050161c5fa379ef3dc921e28d36f970e000afd3cd5895e11e7a56f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a825c498b2050161c5fa379ef3dc921e28d36f970e000afd3cd5895e11e7a56f->enter($__internal_a825c498b2050161c5fa379ef3dc921e28d36f970e000afd3cd5895e11e7a56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_8adaaf69e6130198bf2ce919a8f0e2bd2e5850b8f655e78183d2ed3eeb7749dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adaaf69e6130198bf2ce919a8f0e2bd2e5850b8f655e78183d2ed3eeb7749dc->enter($__internal_8adaaf69e6130198bf2ce919a8f0e2bd2e5850b8f655e78183d2ed3eeb7749dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a825c498b2050161c5fa379ef3dc921e28d36f970e000afd3cd5895e11e7a56f->leave($__internal_a825c498b2050161c5fa379ef3dc921e28d36f970e000afd3cd5895e11e7a56f_prof);

        
        $__internal_8adaaf69e6130198bf2ce919a8f0e2bd2e5850b8f655e78183d2ed3eeb7749dc->leave($__internal_8adaaf69e6130198bf2ce919a8f0e2bd2e5850b8f655e78183d2ed3eeb7749dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b3436d4b90d11834d86cfee66a31e69d545be7b1106983c2aebcf191ac1f5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3436d4b90d11834d86cfee66a31e69d545be7b1106983c2aebcf191ac1f5ee->enter($__internal_2b3436d4b90d11834d86cfee66a31e69d545be7b1106983c2aebcf191ac1f5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e4478a59cfb5aac5f59ddbbf245f430fcaa23c60189c987af4ed92394df47a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4478a59cfb5aac5f59ddbbf245f430fcaa23c60189c987af4ed92394df47a34->enter($__internal_e4478a59cfb5aac5f59ddbbf245f430fcaa23c60189c987af4ed92394df47a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e4478a59cfb5aac5f59ddbbf245f430fcaa23c60189c987af4ed92394df47a34->leave($__internal_e4478a59cfb5aac5f59ddbbf245f430fcaa23c60189c987af4ed92394df47a34_prof);

        
        $__internal_2b3436d4b90d11834d86cfee66a31e69d545be7b1106983c2aebcf191ac1f5ee->leave($__internal_2b3436d4b90d11834d86cfee66a31e69d545be7b1106983c2aebcf191ac1f5ee_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
