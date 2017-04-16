<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a4515e44e066368fd595e6d4bd6371dcf0be8083e32e4b64053da6ffdc96e742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_cdf7cabf69082dd91451321af5c7adfde0557772935e1237db3973310c877db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf7cabf69082dd91451321af5c7adfde0557772935e1237db3973310c877db3->enter($__internal_cdf7cabf69082dd91451321af5c7adfde0557772935e1237db3973310c877db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_508fb8002a69e44c5d6e282c3a1cca9a549ee9d77fd558d488d46d8d66a41be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508fb8002a69e44c5d6e282c3a1cca9a549ee9d77fd558d488d46d8d66a41be0->enter($__internal_508fb8002a69e44c5d6e282c3a1cca9a549ee9d77fd558d488d46d8d66a41be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf7cabf69082dd91451321af5c7adfde0557772935e1237db3973310c877db3->leave($__internal_cdf7cabf69082dd91451321af5c7adfde0557772935e1237db3973310c877db3_prof);

        
        $__internal_508fb8002a69e44c5d6e282c3a1cca9a549ee9d77fd558d488d46d8d66a41be0->leave($__internal_508fb8002a69e44c5d6e282c3a1cca9a549ee9d77fd558d488d46d8d66a41be0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ef4eaab442e5272bf95ef1af4157561d608919c5ec947f4075934589438c495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef4eaab442e5272bf95ef1af4157561d608919c5ec947f4075934589438c495->enter($__internal_8ef4eaab442e5272bf95ef1af4157561d608919c5ec947f4075934589438c495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41415ce5e798f590bca093e3e2a1f799ef83a59a6855539535cf7f42b784b0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41415ce5e798f590bca093e3e2a1f799ef83a59a6855539535cf7f42b784b0af->enter($__internal_41415ce5e798f590bca093e3e2a1f799ef83a59a6855539535cf7f42b784b0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_41415ce5e798f590bca093e3e2a1f799ef83a59a6855539535cf7f42b784b0af->leave($__internal_41415ce5e798f590bca093e3e2a1f799ef83a59a6855539535cf7f42b784b0af_prof);

        
        $__internal_8ef4eaab442e5272bf95ef1af4157561d608919c5ec947f4075934589438c495->leave($__internal_8ef4eaab442e5272bf95ef1af4157561d608919c5ec947f4075934589438c495_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
