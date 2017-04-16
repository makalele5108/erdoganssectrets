<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_ff4ddf8a04346629317be3367e4358fac368f354f5d5aa46a61c35361e5316ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_f91b1503a4fa2e7d674fb72ee517ce2090c316ef6c202b09849b9d552e02236b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91b1503a4fa2e7d674fb72ee517ce2090c316ef6c202b09849b9d552e02236b->enter($__internal_f91b1503a4fa2e7d674fb72ee517ce2090c316ef6c202b09849b9d552e02236b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_8e3880aa889b3119aed83d4d01f331d6c09d23dc628be0bc9b65edee49bd8403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3880aa889b3119aed83d4d01f331d6c09d23dc628be0bc9b65edee49bd8403->enter($__internal_8e3880aa889b3119aed83d4d01f331d6c09d23dc628be0bc9b65edee49bd8403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91b1503a4fa2e7d674fb72ee517ce2090c316ef6c202b09849b9d552e02236b->leave($__internal_f91b1503a4fa2e7d674fb72ee517ce2090c316ef6c202b09849b9d552e02236b_prof);

        
        $__internal_8e3880aa889b3119aed83d4d01f331d6c09d23dc628be0bc9b65edee49bd8403->leave($__internal_8e3880aa889b3119aed83d4d01f331d6c09d23dc628be0bc9b65edee49bd8403_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1c60c5ef8c5788367dce0b55a4b67600b77c5efd1955e8d6cec609d8b979d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c60c5ef8c5788367dce0b55a4b67600b77c5efd1955e8d6cec609d8b979d0b->enter($__internal_f1c60c5ef8c5788367dce0b55a4b67600b77c5efd1955e8d6cec609d8b979d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4369d6273d9824494df27d3a315e2f031e44e41a6d897d826859393181f0bdbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4369d6273d9824494df27d3a315e2f031e44e41a6d897d826859393181f0bdbd->enter($__internal_4369d6273d9824494df27d3a315e2f031e44e41a6d897d826859393181f0bdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4369d6273d9824494df27d3a315e2f031e44e41a6d897d826859393181f0bdbd->leave($__internal_4369d6273d9824494df27d3a315e2f031e44e41a6d897d826859393181f0bdbd_prof);

        
        $__internal_f1c60c5ef8c5788367dce0b55a4b67600b77c5efd1955e8d6cec609d8b979d0b->leave($__internal_f1c60c5ef8c5788367dce0b55a4b67600b77c5efd1955e8d6cec609d8b979d0b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
