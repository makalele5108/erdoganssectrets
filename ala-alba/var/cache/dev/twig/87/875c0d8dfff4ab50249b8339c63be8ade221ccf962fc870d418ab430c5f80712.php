<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_2427c7676ba146f1a941bc7318f70d3d4cb8e574ad8b424dc3ea8a146c26197b extends Twig_Template
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
        $__internal_2f43a4bea77c6b835b739032a9473f86492395dc95a7076992bd65d57198c474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f43a4bea77c6b835b739032a9473f86492395dc95a7076992bd65d57198c474->enter($__internal_2f43a4bea77c6b835b739032a9473f86492395dc95a7076992bd65d57198c474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_0234bf7584d0975979db294ba7ec22a6d1df810e8e5f69f22c14f681e88e4787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0234bf7584d0975979db294ba7ec22a6d1df810e8e5f69f22c14f681e88e4787->enter($__internal_0234bf7584d0975979db294ba7ec22a6d1df810e8e5f69f22c14f681e88e4787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2f43a4bea77c6b835b739032a9473f86492395dc95a7076992bd65d57198c474->leave($__internal_2f43a4bea77c6b835b739032a9473f86492395dc95a7076992bd65d57198c474_prof);

        
        $__internal_0234bf7584d0975979db294ba7ec22a6d1df810e8e5f69f22c14f681e88e4787->leave($__internal_0234bf7584d0975979db294ba7ec22a6d1df810e8e5f69f22c14f681e88e4787_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
