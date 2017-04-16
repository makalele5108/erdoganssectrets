<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8609834dda2935b99a2c9429413b566e1a309f5c308a17555acb78e69f1e82ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b5a5846b0bd8363a896857827cab8ea6d945049db0d5e98c4abbc57b79b7cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5a5846b0bd8363a896857827cab8ea6d945049db0d5e98c4abbc57b79b7cf3->enter($__internal_7b5a5846b0bd8363a896857827cab8ea6d945049db0d5e98c4abbc57b79b7cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8db1269b3152be845e191998728f5591e5cd2cb8e3e9e06943ce5e1d89356abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db1269b3152be845e191998728f5591e5cd2cb8e3e9e06943ce5e1d89356abc->enter($__internal_8db1269b3152be845e191998728f5591e5cd2cb8e3e9e06943ce5e1d89356abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5a5846b0bd8363a896857827cab8ea6d945049db0d5e98c4abbc57b79b7cf3->leave($__internal_7b5a5846b0bd8363a896857827cab8ea6d945049db0d5e98c4abbc57b79b7cf3_prof);

        
        $__internal_8db1269b3152be845e191998728f5591e5cd2cb8e3e9e06943ce5e1d89356abc->leave($__internal_8db1269b3152be845e191998728f5591e5cd2cb8e3e9e06943ce5e1d89356abc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22d82c1d8ec49ebed08b74e357522abfa1af5f08127154a62976cc4b94145c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d82c1d8ec49ebed08b74e357522abfa1af5f08127154a62976cc4b94145c34->enter($__internal_22d82c1d8ec49ebed08b74e357522abfa1af5f08127154a62976cc4b94145c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ed67d99c496b79ab4989e8b0291b58552cabe2918fc660130eb9b5dcd92d7ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed67d99c496b79ab4989e8b0291b58552cabe2918fc660130eb9b5dcd92d7ca4->enter($__internal_ed67d99c496b79ab4989e8b0291b58552cabe2918fc660130eb9b5dcd92d7ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ed67d99c496b79ab4989e8b0291b58552cabe2918fc660130eb9b5dcd92d7ca4->leave($__internal_ed67d99c496b79ab4989e8b0291b58552cabe2918fc660130eb9b5dcd92d7ca4_prof);

        
        $__internal_22d82c1d8ec49ebed08b74e357522abfa1af5f08127154a62976cc4b94145c34->leave($__internal_22d82c1d8ec49ebed08b74e357522abfa1af5f08127154a62976cc4b94145c34_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f13c1a102d2fc7dbfe62b9cf96b06d43980692502758f4e0c90bf7428f86ec31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13c1a102d2fc7dbfe62b9cf96b06d43980692502758f4e0c90bf7428f86ec31->enter($__internal_f13c1a102d2fc7dbfe62b9cf96b06d43980692502758f4e0c90bf7428f86ec31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca9c7dbb03f820b1c0563bb1e80ae384b56f6fa0061789e4506effc774111089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9c7dbb03f820b1c0563bb1e80ae384b56f6fa0061789e4506effc774111089->enter($__internal_ca9c7dbb03f820b1c0563bb1e80ae384b56f6fa0061789e4506effc774111089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ca9c7dbb03f820b1c0563bb1e80ae384b56f6fa0061789e4506effc774111089->leave($__internal_ca9c7dbb03f820b1c0563bb1e80ae384b56f6fa0061789e4506effc774111089_prof);

        
        $__internal_f13c1a102d2fc7dbfe62b9cf96b06d43980692502758f4e0c90bf7428f86ec31->leave($__internal_f13c1a102d2fc7dbfe62b9cf96b06d43980692502758f4e0c90bf7428f86ec31_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf1f71ceb3a128c9f1e290afd4d59ff24f50657ac0a309bbe362508866e7b511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1f71ceb3a128c9f1e290afd4d59ff24f50657ac0a309bbe362508866e7b511->enter($__internal_cf1f71ceb3a128c9f1e290afd4d59ff24f50657ac0a309bbe362508866e7b511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d00714726145124bcd75532e84d8bfd1cf22ce852dfe86853c62e75ae888e01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00714726145124bcd75532e84d8bfd1cf22ce852dfe86853c62e75ae888e01c->enter($__internal_d00714726145124bcd75532e84d8bfd1cf22ce852dfe86853c62e75ae888e01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d00714726145124bcd75532e84d8bfd1cf22ce852dfe86853c62e75ae888e01c->leave($__internal_d00714726145124bcd75532e84d8bfd1cf22ce852dfe86853c62e75ae888e01c_prof);

        
        $__internal_cf1f71ceb3a128c9f1e290afd4d59ff24f50657ac0a309bbe362508866e7b511->leave($__internal_cf1f71ceb3a128c9f1e290afd4d59ff24f50657ac0a309bbe362508866e7b511_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
