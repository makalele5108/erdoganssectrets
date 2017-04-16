<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_e591e7c76eb1724443432a0e618ee276c6293a7b235737f0657fd5e59fa44054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_5c8ff58c546d7fdd0b17721251a32791f0203218679b20795396607b12eb737a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c8ff58c546d7fdd0b17721251a32791f0203218679b20795396607b12eb737a->enter($__internal_5c8ff58c546d7fdd0b17721251a32791f0203218679b20795396607b12eb737a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_43bd77ed1b070d1a295f54ae1c6f01c2817bdbd36a0c2afdc3fb2590de2e5e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bd77ed1b070d1a295f54ae1c6f01c2817bdbd36a0c2afdc3fb2590de2e5e75->enter($__internal_43bd77ed1b070d1a295f54ae1c6f01c2817bdbd36a0c2afdc3fb2590de2e5e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c8ff58c546d7fdd0b17721251a32791f0203218679b20795396607b12eb737a->leave($__internal_5c8ff58c546d7fdd0b17721251a32791f0203218679b20795396607b12eb737a_prof);

        
        $__internal_43bd77ed1b070d1a295f54ae1c6f01c2817bdbd36a0c2afdc3fb2590de2e5e75->leave($__internal_43bd77ed1b070d1a295f54ae1c6f01c2817bdbd36a0c2afdc3fb2590de2e5e75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ad09189987c0461d8231d5a017d706b8e584f44a616fb2a84c21464cbd4678d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad09189987c0461d8231d5a017d706b8e584f44a616fb2a84c21464cbd4678d->enter($__internal_5ad09189987c0461d8231d5a017d706b8e584f44a616fb2a84c21464cbd4678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2217db74526401238b5b800cd33e0541d2f287656d05e00624845a6b8d7704d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2217db74526401238b5b800cd33e0541d2f287656d05e00624845a6b8d7704d5->enter($__internal_2217db74526401238b5b800cd33e0541d2f287656d05e00624845a6b8d7704d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_2217db74526401238b5b800cd33e0541d2f287656d05e00624845a6b8d7704d5->leave($__internal_2217db74526401238b5b800cd33e0541d2f287656d05e00624845a6b8d7704d5_prof);

        
        $__internal_5ad09189987c0461d8231d5a017d706b8e584f44a616fb2a84c21464cbd4678d->leave($__internal_5ad09189987c0461d8231d5a017d706b8e584f44a616fb2a84c21464cbd4678d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
