<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_93622f295dfd907655096d409b725438223ae05a4675d37f7cf23d7be8aa891a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_8025a3b6466ecc9429a0cf19dc6127b7dbcd3244cea6742563b46c3e7d1034e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8025a3b6466ecc9429a0cf19dc6127b7dbcd3244cea6742563b46c3e7d1034e9->enter($__internal_8025a3b6466ecc9429a0cf19dc6127b7dbcd3244cea6742563b46c3e7d1034e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ee80c382fbe45159aaca4c53deeee45ae4328afd5f100391b117207b5c02f49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee80c382fbe45159aaca4c53deeee45ae4328afd5f100391b117207b5c02f49f->enter($__internal_ee80c382fbe45159aaca4c53deeee45ae4328afd5f100391b117207b5c02f49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8025a3b6466ecc9429a0cf19dc6127b7dbcd3244cea6742563b46c3e7d1034e9->leave($__internal_8025a3b6466ecc9429a0cf19dc6127b7dbcd3244cea6742563b46c3e7d1034e9_prof);

        
        $__internal_ee80c382fbe45159aaca4c53deeee45ae4328afd5f100391b117207b5c02f49f->leave($__internal_ee80c382fbe45159aaca4c53deeee45ae4328afd5f100391b117207b5c02f49f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57501d793c81d563a087e7c6c044788d3e37d7229e935d60a91b637cb283fb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57501d793c81d563a087e7c6c044788d3e37d7229e935d60a91b637cb283fb6e->enter($__internal_57501d793c81d563a087e7c6c044788d3e37d7229e935d60a91b637cb283fb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d3ce11435cedc9afc2c2ec29532463e01213875a47357f31b634ce810123f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3ce11435cedc9afc2c2ec29532463e01213875a47357f31b634ce810123f5d->enter($__internal_2d3ce11435cedc9afc2c2ec29532463e01213875a47357f31b634ce810123f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2d3ce11435cedc9afc2c2ec29532463e01213875a47357f31b634ce810123f5d->leave($__internal_2d3ce11435cedc9afc2c2ec29532463e01213875a47357f31b634ce810123f5d_prof);

        
        $__internal_57501d793c81d563a087e7c6c044788d3e37d7229e935d60a91b637cb283fb6e->leave($__internal_57501d793c81d563a087e7c6c044788d3e37d7229e935d60a91b637cb283fb6e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d098fbcbaf29a6ebc63f2e1ef3e4f177b9cbb14369bde074b349988ef0b94b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d098fbcbaf29a6ebc63f2e1ef3e4f177b9cbb14369bde074b349988ef0b94b2->enter($__internal_5d098fbcbaf29a6ebc63f2e1ef3e4f177b9cbb14369bde074b349988ef0b94b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3854ac344b3a805fc5825a2b3a3a29234d046a1bf72588ee71239cd2e0164be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3854ac344b3a805fc5825a2b3a3a29234d046a1bf72588ee71239cd2e0164be6->enter($__internal_3854ac344b3a805fc5825a2b3a3a29234d046a1bf72588ee71239cd2e0164be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3854ac344b3a805fc5825a2b3a3a29234d046a1bf72588ee71239cd2e0164be6->leave($__internal_3854ac344b3a805fc5825a2b3a3a29234d046a1bf72588ee71239cd2e0164be6_prof);

        
        $__internal_5d098fbcbaf29a6ebc63f2e1ef3e4f177b9cbb14369bde074b349988ef0b94b2->leave($__internal_5d098fbcbaf29a6ebc63f2e1ef3e4f177b9cbb14369bde074b349988ef0b94b2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aabbf95e98ee9adb3e9a4507b4bd894d685ee4d62396e3509ce23bd7aebd67f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabbf95e98ee9adb3e9a4507b4bd894d685ee4d62396e3509ce23bd7aebd67f8->enter($__internal_aabbf95e98ee9adb3e9a4507b4bd894d685ee4d62396e3509ce23bd7aebd67f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_daa79a932132ff637b18152d23bd060f5490903062ea87c1dc212cd488ac64e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa79a932132ff637b18152d23bd060f5490903062ea87c1dc212cd488ac64e7->enter($__internal_daa79a932132ff637b18152d23bd060f5490903062ea87c1dc212cd488ac64e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_daa79a932132ff637b18152d23bd060f5490903062ea87c1dc212cd488ac64e7->leave($__internal_daa79a932132ff637b18152d23bd060f5490903062ea87c1dc212cd488ac64e7_prof);

        
        $__internal_aabbf95e98ee9adb3e9a4507b4bd894d685ee4d62396e3509ce23bd7aebd67f8->leave($__internal_aabbf95e98ee9adb3e9a4507b4bd894d685ee4d62396e3509ce23bd7aebd67f8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
