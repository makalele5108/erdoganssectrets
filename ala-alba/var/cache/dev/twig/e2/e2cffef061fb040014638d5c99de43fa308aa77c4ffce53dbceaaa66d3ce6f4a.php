<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0e650c06177e211da0c4bad30f1ba10d1f03d9ff0b73fef17875610ceff3eb44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01146d9de0b444bbb465ed871415c18a94eb9c19f399e5407f7fb4bda9082f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01146d9de0b444bbb465ed871415c18a94eb9c19f399e5407f7fb4bda9082f40->enter($__internal_01146d9de0b444bbb465ed871415c18a94eb9c19f399e5407f7fb4bda9082f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_db129b8eb47ebdeb0074965b00c9fc0a21909e38c53750eab7bbe004f3ff8d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db129b8eb47ebdeb0074965b00c9fc0a21909e38c53750eab7bbe004f3ff8d38->enter($__internal_db129b8eb47ebdeb0074965b00c9fc0a21909e38c53750eab7bbe004f3ff8d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_01146d9de0b444bbb465ed871415c18a94eb9c19f399e5407f7fb4bda9082f40->leave($__internal_01146d9de0b444bbb465ed871415c18a94eb9c19f399e5407f7fb4bda9082f40_prof);

        
        $__internal_db129b8eb47ebdeb0074965b00c9fc0a21909e38c53750eab7bbe004f3ff8d38->leave($__internal_db129b8eb47ebdeb0074965b00c9fc0a21909e38c53750eab7bbe004f3ff8d38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
