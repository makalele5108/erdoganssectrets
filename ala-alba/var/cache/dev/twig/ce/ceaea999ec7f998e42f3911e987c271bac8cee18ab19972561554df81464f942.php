<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7bf09c8faea72c183986e083bd4bda9f204920aaf17cd8cd7d9460a3b01bc687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_71c557fc6dc28f54e70b763bce3095137a39b55e397d01c69fa9a64a0c885023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c557fc6dc28f54e70b763bce3095137a39b55e397d01c69fa9a64a0c885023->enter($__internal_71c557fc6dc28f54e70b763bce3095137a39b55e397d01c69fa9a64a0c885023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_5733d9e3a06918f0851a63fa7f44938d73e51cc711a8844aa5360cce2f6c740a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5733d9e3a06918f0851a63fa7f44938d73e51cc711a8844aa5360cce2f6c740a->enter($__internal_5733d9e3a06918f0851a63fa7f44938d73e51cc711a8844aa5360cce2f6c740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71c557fc6dc28f54e70b763bce3095137a39b55e397d01c69fa9a64a0c885023->leave($__internal_71c557fc6dc28f54e70b763bce3095137a39b55e397d01c69fa9a64a0c885023_prof);

        
        $__internal_5733d9e3a06918f0851a63fa7f44938d73e51cc711a8844aa5360cce2f6c740a->leave($__internal_5733d9e3a06918f0851a63fa7f44938d73e51cc711a8844aa5360cce2f6c740a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_855c0faf0dbb6636a16a6d30561cda15216307cf3a109ed8c1a7073118c4629b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855c0faf0dbb6636a16a6d30561cda15216307cf3a109ed8c1a7073118c4629b->enter($__internal_855c0faf0dbb6636a16a6d30561cda15216307cf3a109ed8c1a7073118c4629b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_249a3f05992a58a12a3083bab83899da03e11f1b9e731b0f112e0694ef692c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249a3f05992a58a12a3083bab83899da03e11f1b9e731b0f112e0694ef692c26->enter($__internal_249a3f05992a58a12a3083bab83899da03e11f1b9e731b0f112e0694ef692c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_249a3f05992a58a12a3083bab83899da03e11f1b9e731b0f112e0694ef692c26->leave($__internal_249a3f05992a58a12a3083bab83899da03e11f1b9e731b0f112e0694ef692c26_prof);

        
        $__internal_855c0faf0dbb6636a16a6d30561cda15216307cf3a109ed8c1a7073118c4629b->leave($__internal_855c0faf0dbb6636a16a6d30561cda15216307cf3a109ed8c1a7073118c4629b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71696576195591f8935402858751e188067fa62f41039c65b97059000853fc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71696576195591f8935402858751e188067fa62f41039c65b97059000853fc4f->enter($__internal_71696576195591f8935402858751e188067fa62f41039c65b97059000853fc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c9844d9fa10b2851bcb6d526101f9ab552b71168720772bd05c296cb7e5dff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9844d9fa10b2851bcb6d526101f9ab552b71168720772bd05c296cb7e5dff4->enter($__internal_0c9844d9fa10b2851bcb6d526101f9ab552b71168720772bd05c296cb7e5dff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c9844d9fa10b2851bcb6d526101f9ab552b71168720772bd05c296cb7e5dff4->leave($__internal_0c9844d9fa10b2851bcb6d526101f9ab552b71168720772bd05c296cb7e5dff4_prof);

        
        $__internal_71696576195591f8935402858751e188067fa62f41039c65b97059000853fc4f->leave($__internal_71696576195591f8935402858751e188067fa62f41039c65b97059000853fc4f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60f645947d293a27c8b0f39a80c7beb2e9ab5ff7c5b64fc18bb8bbd5066de9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f645947d293a27c8b0f39a80c7beb2e9ab5ff7c5b64fc18bb8bbd5066de9cc->enter($__internal_60f645947d293a27c8b0f39a80c7beb2e9ab5ff7c5b64fc18bb8bbd5066de9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_414ad36e88c6c84e882f633f0a90d4d9668af863cf92f8b241254601ca8c01d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414ad36e88c6c84e882f633f0a90d4d9668af863cf92f8b241254601ca8c01d2->enter($__internal_414ad36e88c6c84e882f633f0a90d4d9668af863cf92f8b241254601ca8c01d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_414ad36e88c6c84e882f633f0a90d4d9668af863cf92f8b241254601ca8c01d2->leave($__internal_414ad36e88c6c84e882f633f0a90d4d9668af863cf92f8b241254601ca8c01d2_prof);

        
        $__internal_60f645947d293a27c8b0f39a80c7beb2e9ab5ff7c5b64fc18bb8bbd5066de9cc->leave($__internal_60f645947d293a27c8b0f39a80c7beb2e9ab5ff7c5b64fc18bb8bbd5066de9cc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
