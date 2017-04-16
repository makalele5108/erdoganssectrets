<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_0ef9e0158bdeced1a9eb5d0fc07cfbedd5f91950fe72e813df0e21055125a34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_039b6be5108fd04107016084c298d3ab52c8504cc167ad343491247b7dfaa10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039b6be5108fd04107016084c298d3ab52c8504cc167ad343491247b7dfaa10b->enter($__internal_039b6be5108fd04107016084c298d3ab52c8504cc167ad343491247b7dfaa10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_795a6d9e308ceb8de50d7be3e5d6eb5ef51133bccc927165ea9499937899de42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795a6d9e308ceb8de50d7be3e5d6eb5ef51133bccc927165ea9499937899de42->enter($__internal_795a6d9e308ceb8de50d7be3e5d6eb5ef51133bccc927165ea9499937899de42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_039b6be5108fd04107016084c298d3ab52c8504cc167ad343491247b7dfaa10b->leave($__internal_039b6be5108fd04107016084c298d3ab52c8504cc167ad343491247b7dfaa10b_prof);

        
        $__internal_795a6d9e308ceb8de50d7be3e5d6eb5ef51133bccc927165ea9499937899de42->leave($__internal_795a6d9e308ceb8de50d7be3e5d6eb5ef51133bccc927165ea9499937899de42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8af9049e91fe7b941c92359615d785cdac52660723d98865e29770a7bfd8dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8af9049e91fe7b941c92359615d785cdac52660723d98865e29770a7bfd8dca->enter($__internal_d8af9049e91fe7b941c92359615d785cdac52660723d98865e29770a7bfd8dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bdbc2c9732cea421b8f71109546c942bc1c89d9c6680d9fb4b31c57f540929a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbc2c9732cea421b8f71109546c942bc1c89d9c6680d9fb4b31c57f540929a4->enter($__internal_bdbc2c9732cea421b8f71109546c942bc1c89d9c6680d9fb4b31c57f540929a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_bdbc2c9732cea421b8f71109546c942bc1c89d9c6680d9fb4b31c57f540929a4->leave($__internal_bdbc2c9732cea421b8f71109546c942bc1c89d9c6680d9fb4b31c57f540929a4_prof);

        
        $__internal_d8af9049e91fe7b941c92359615d785cdac52660723d98865e29770a7bfd8dca->leave($__internal_d8af9049e91fe7b941c92359615d785cdac52660723d98865e29770a7bfd8dca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
