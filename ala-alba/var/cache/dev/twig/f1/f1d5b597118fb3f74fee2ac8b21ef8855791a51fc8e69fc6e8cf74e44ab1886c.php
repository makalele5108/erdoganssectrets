<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_18b29a51527a1cc4c651f95ae32ba7a8b3db2ec54038bf15ffdb5b7d01a93afa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ada392eb56e8d66c3cf4b61638869101fa94e8307fa4710157da592735d7dde9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada392eb56e8d66c3cf4b61638869101fa94e8307fa4710157da592735d7dde9->enter($__internal_ada392eb56e8d66c3cf4b61638869101fa94e8307fa4710157da592735d7dde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_9ff933818a97685bbf7d163f9d665a787cfc219fe95f109af7a92f93f6be6499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff933818a97685bbf7d163f9d665a787cfc219fe95f109af7a92f93f6be6499->enter($__internal_9ff933818a97685bbf7d163f9d665a787cfc219fe95f109af7a92f93f6be6499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada392eb56e8d66c3cf4b61638869101fa94e8307fa4710157da592735d7dde9->leave($__internal_ada392eb56e8d66c3cf4b61638869101fa94e8307fa4710157da592735d7dde9_prof);

        
        $__internal_9ff933818a97685bbf7d163f9d665a787cfc219fe95f109af7a92f93f6be6499->leave($__internal_9ff933818a97685bbf7d163f9d665a787cfc219fe95f109af7a92f93f6be6499_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d29c9f54ee6bcea0623c32fd638ff30e9ff9644b930af6a5fd5713c0ba0ab8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29c9f54ee6bcea0623c32fd638ff30e9ff9644b930af6a5fd5713c0ba0ab8a3->enter($__internal_d29c9f54ee6bcea0623c32fd638ff30e9ff9644b930af6a5fd5713c0ba0ab8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9775d726c38ef5190dcdd1f4f2f6ad5cd1234b72fc35955decaee8d63c15cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9775d726c38ef5190dcdd1f4f2f6ad5cd1234b72fc35955decaee8d63c15cbd->enter($__internal_d9775d726c38ef5190dcdd1f4f2f6ad5cd1234b72fc35955decaee8d63c15cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d9775d726c38ef5190dcdd1f4f2f6ad5cd1234b72fc35955decaee8d63c15cbd->leave($__internal_d9775d726c38ef5190dcdd1f4f2f6ad5cd1234b72fc35955decaee8d63c15cbd_prof);

        
        $__internal_d29c9f54ee6bcea0623c32fd638ff30e9ff9644b930af6a5fd5713c0ba0ab8a3->leave($__internal_d29c9f54ee6bcea0623c32fd638ff30e9ff9644b930af6a5fd5713c0ba0ab8a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
