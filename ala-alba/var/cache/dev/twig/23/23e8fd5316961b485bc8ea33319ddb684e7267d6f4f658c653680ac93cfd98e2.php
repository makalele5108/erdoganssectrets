<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_eac20f34d9c65acfe65c6c761470456ebb0b0f8f07b96ef14713af60fc26b83e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_297f9ce6af002d7329ebea471f5dfd8a4c782a2885583dfce414675e443af5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297f9ce6af002d7329ebea471f5dfd8a4c782a2885583dfce414675e443af5e4->enter($__internal_297f9ce6af002d7329ebea471f5dfd8a4c782a2885583dfce414675e443af5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_79834670ce4f6505f30f02469ddac1db8405fa9126af5efb665e4cc1f23b9d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79834670ce4f6505f30f02469ddac1db8405fa9126af5efb665e4cc1f23b9d9a->enter($__internal_79834670ce4f6505f30f02469ddac1db8405fa9126af5efb665e4cc1f23b9d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_297f9ce6af002d7329ebea471f5dfd8a4c782a2885583dfce414675e443af5e4->leave($__internal_297f9ce6af002d7329ebea471f5dfd8a4c782a2885583dfce414675e443af5e4_prof);

        
        $__internal_79834670ce4f6505f30f02469ddac1db8405fa9126af5efb665e4cc1f23b9d9a->leave($__internal_79834670ce4f6505f30f02469ddac1db8405fa9126af5efb665e4cc1f23b9d9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c623e93984057bad617911423041307ce33a5ee11650645e2e9ff67f87cba8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c623e93984057bad617911423041307ce33a5ee11650645e2e9ff67f87cba8f9->enter($__internal_c623e93984057bad617911423041307ce33a5ee11650645e2e9ff67f87cba8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4bffe8e84e02f6b25b94a18f809a95242ef4df0b6ef14001ceed72ae077bd591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bffe8e84e02f6b25b94a18f809a95242ef4df0b6ef14001ceed72ae077bd591->enter($__internal_4bffe8e84e02f6b25b94a18f809a95242ef4df0b6ef14001ceed72ae077bd591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_4bffe8e84e02f6b25b94a18f809a95242ef4df0b6ef14001ceed72ae077bd591->leave($__internal_4bffe8e84e02f6b25b94a18f809a95242ef4df0b6ef14001ceed72ae077bd591_prof);

        
        $__internal_c623e93984057bad617911423041307ce33a5ee11650645e2e9ff67f87cba8f9->leave($__internal_c623e93984057bad617911423041307ce33a5ee11650645e2e9ff67f87cba8f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
