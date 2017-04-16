<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_b9956cd484dd667a8b7ef712381635682822284b8cc8dc5180d2ec2d7db7734a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_a49bd602a62b7c4804adb2a27992894d4e6ded0982153beaaa8ae53c5848dca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49bd602a62b7c4804adb2a27992894d4e6ded0982153beaaa8ae53c5848dca3->enter($__internal_a49bd602a62b7c4804adb2a27992894d4e6ded0982153beaaa8ae53c5848dca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_709ba83ab0dda574967304eeada8e6b96c3ba408f8434253af09d2b16c13502e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709ba83ab0dda574967304eeada8e6b96c3ba408f8434253af09d2b16c13502e->enter($__internal_709ba83ab0dda574967304eeada8e6b96c3ba408f8434253af09d2b16c13502e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49bd602a62b7c4804adb2a27992894d4e6ded0982153beaaa8ae53c5848dca3->leave($__internal_a49bd602a62b7c4804adb2a27992894d4e6ded0982153beaaa8ae53c5848dca3_prof);

        
        $__internal_709ba83ab0dda574967304eeada8e6b96c3ba408f8434253af09d2b16c13502e->leave($__internal_709ba83ab0dda574967304eeada8e6b96c3ba408f8434253af09d2b16c13502e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fae55dea62df3c85d608a979d6e293ef96cb47cf1cd62fc5b98e80789856a643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae55dea62df3c85d608a979d6e293ef96cb47cf1cd62fc5b98e80789856a643->enter($__internal_fae55dea62df3c85d608a979d6e293ef96cb47cf1cd62fc5b98e80789856a643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_032d9ce580830df0b268b62d148efbd4dee059a2492937116067ced209f57d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032d9ce580830df0b268b62d148efbd4dee059a2492937116067ced209f57d4a->enter($__internal_032d9ce580830df0b268b62d148efbd4dee059a2492937116067ced209f57d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_032d9ce580830df0b268b62d148efbd4dee059a2492937116067ced209f57d4a->leave($__internal_032d9ce580830df0b268b62d148efbd4dee059a2492937116067ced209f57d4a_prof);

        
        $__internal_fae55dea62df3c85d608a979d6e293ef96cb47cf1cd62fc5b98e80789856a643->leave($__internal_fae55dea62df3c85d608a979d6e293ef96cb47cf1cd62fc5b98e80789856a643_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
