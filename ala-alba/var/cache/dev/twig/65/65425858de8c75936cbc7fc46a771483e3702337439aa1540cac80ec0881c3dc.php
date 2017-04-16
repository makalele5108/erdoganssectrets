<?php

/* AlbaBundle::base.html.twig */
class __TwigTemplate_e5cb9b78954b9da0da18216b27ad69807ff4b96c8427c223fa9831abc87447fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2af422f4d5b279944a683adb2b89cbf4b140e36e0087202be9e33429d8d2a7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af422f4d5b279944a683adb2b89cbf4b140e36e0087202be9e33429d8d2a7d8->enter($__internal_2af422f4d5b279944a683adb2b89cbf4b140e36e0087202be9e33429d8d2a7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle::base.html.twig"));

        $__internal_37af5956f3720d9491df4a3c47aa643d9cd59ac378e860a00fb9c3360a4ea664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37af5956f3720d9491df4a3c47aa643d9cd59ac378e860a00fb9c3360a4ea664->enter($__internal_37af5956f3720d9491df4a3c47aa643d9cd59ac378e860a00fb9c3360a4ea664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2af422f4d5b279944a683adb2b89cbf4b140e36e0087202be9e33429d8d2a7d8->leave($__internal_2af422f4d5b279944a683adb2b89cbf4b140e36e0087202be9e33429d8d2a7d8_prof);

        
        $__internal_37af5956f3720d9491df4a3c47aa643d9cd59ac378e860a00fb9c3360a4ea664->leave($__internal_37af5956f3720d9491df4a3c47aa643d9cd59ac378e860a00fb9c3360a4ea664_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9867a03fbf000f790299a93d44f3917745293609ebe6acc6825f01cea185d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9867a03fbf000f790299a93d44f3917745293609ebe6acc6825f01cea185d9e->enter($__internal_d9867a03fbf000f790299a93d44f3917745293609ebe6acc6825f01cea185d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b7c9e86ac368032b8f1b9b92dbd942ae9f0355c3751c17b39633cfbde4aca32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7c9e86ac368032b8f1b9b92dbd942ae9f0355c3751c17b39633cfbde4aca32->enter($__internal_4b7c9e86ac368032b8f1b9b92dbd942ae9f0355c3751c17b39633cfbde4aca32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4b7c9e86ac368032b8f1b9b92dbd942ae9f0355c3751c17b39633cfbde4aca32->leave($__internal_4b7c9e86ac368032b8f1b9b92dbd942ae9f0355c3751c17b39633cfbde4aca32_prof);

        
        $__internal_d9867a03fbf000f790299a93d44f3917745293609ebe6acc6825f01cea185d9e->leave($__internal_d9867a03fbf000f790299a93d44f3917745293609ebe6acc6825f01cea185d9e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f5bf8032194951192ec4506db6c30effc541986ad5af068350a48b5e3c283a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5bf8032194951192ec4506db6c30effc541986ad5af068350a48b5e3c283a4->enter($__internal_0f5bf8032194951192ec4506db6c30effc541986ad5af068350a48b5e3c283a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9c47183b6f25722d076dea9652c0c299e766207eba5c55e14d8e52799835146d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c47183b6f25722d076dea9652c0c299e766207eba5c55e14d8e52799835146d->enter($__internal_9c47183b6f25722d076dea9652c0c299e766207eba5c55e14d8e52799835146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9c47183b6f25722d076dea9652c0c299e766207eba5c55e14d8e52799835146d->leave($__internal_9c47183b6f25722d076dea9652c0c299e766207eba5c55e14d8e52799835146d_prof);

        
        $__internal_0f5bf8032194951192ec4506db6c30effc541986ad5af068350a48b5e3c283a4->leave($__internal_0f5bf8032194951192ec4506db6c30effc541986ad5af068350a48b5e3c283a4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2595f5119d218ee94e2db21fc61b33fa59a57f41c61b39383cda961460df142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2595f5119d218ee94e2db21fc61b33fa59a57f41c61b39383cda961460df142->enter($__internal_c2595f5119d218ee94e2db21fc61b33fa59a57f41c61b39383cda961460df142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96c4170c3b818e45317c60ff21769528b66cef37f1c182c1adf8dabeb2cd09df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c4170c3b818e45317c60ff21769528b66cef37f1c182c1adf8dabeb2cd09df->enter($__internal_96c4170c3b818e45317c60ff21769528b66cef37f1c182c1adf8dabeb2cd09df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96c4170c3b818e45317c60ff21769528b66cef37f1c182c1adf8dabeb2cd09df->leave($__internal_96c4170c3b818e45317c60ff21769528b66cef37f1c182c1adf8dabeb2cd09df_prof);

        
        $__internal_c2595f5119d218ee94e2db21fc61b33fa59a57f41c61b39383cda961460df142->leave($__internal_c2595f5119d218ee94e2db21fc61b33fa59a57f41c61b39383cda961460df142_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_102e04c6b054046f6bbdfb1d8cffd23cbbe67829a777025a158f781431a6fc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102e04c6b054046f6bbdfb1d8cffd23cbbe67829a777025a158f781431a6fc3b->enter($__internal_102e04c6b054046f6bbdfb1d8cffd23cbbe67829a777025a158f781431a6fc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_09448a153c62538b357518afe4c26d3129762ab735e9926723fa27e4ebd9cf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09448a153c62538b357518afe4c26d3129762ab735e9926723fa27e4ebd9cf0f->enter($__internal_09448a153c62538b357518afe4c26d3129762ab735e9926723fa27e4ebd9cf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_09448a153c62538b357518afe4c26d3129762ab735e9926723fa27e4ebd9cf0f->leave($__internal_09448a153c62538b357518afe4c26d3129762ab735e9926723fa27e4ebd9cf0f_prof);

        
        $__internal_102e04c6b054046f6bbdfb1d8cffd23cbbe67829a777025a158f781431a6fc3b->leave($__internal_102e04c6b054046f6bbdfb1d8cffd23cbbe67829a777025a158f781431a6fc3b_prof);

    }

    public function getTemplateName()
    {
        return "AlbaBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "AlbaBundle::base.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle/Resources/views/base.html.twig");
    }
}
