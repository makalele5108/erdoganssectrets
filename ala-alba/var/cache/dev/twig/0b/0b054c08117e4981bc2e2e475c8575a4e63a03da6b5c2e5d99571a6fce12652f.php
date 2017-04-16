<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c32123bc7dccf9b089e4f06070d22e869b418a2b59d2d47d58ebfff8f41661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_3609c13654c64ca587890604f6f946508df084ae6e155ba801402de0ddfb21dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3609c13654c64ca587890604f6f946508df084ae6e155ba801402de0ddfb21dc->enter($__internal_3609c13654c64ca587890604f6f946508df084ae6e155ba801402de0ddfb21dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5df0eec93c36bac37cd573b6ecb0979273652a009bff91f8dbf482da1937fedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df0eec93c36bac37cd573b6ecb0979273652a009bff91f8dbf482da1937fedb->enter($__internal_5df0eec93c36bac37cd573b6ecb0979273652a009bff91f8dbf482da1937fedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3609c13654c64ca587890604f6f946508df084ae6e155ba801402de0ddfb21dc->leave($__internal_3609c13654c64ca587890604f6f946508df084ae6e155ba801402de0ddfb21dc_prof);

        
        $__internal_5df0eec93c36bac37cd573b6ecb0979273652a009bff91f8dbf482da1937fedb->leave($__internal_5df0eec93c36bac37cd573b6ecb0979273652a009bff91f8dbf482da1937fedb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94ece3457f4b9aaf40a533a8db4b6287b057764ee7970e89064ea3154bd4cd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ece3457f4b9aaf40a533a8db4b6287b057764ee7970e89064ea3154bd4cd32->enter($__internal_94ece3457f4b9aaf40a533a8db4b6287b057764ee7970e89064ea3154bd4cd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4d0b65f66976081c6bf9b272d9db6e6267fe4e9f41e3e9e166b37064c67d145e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0b65f66976081c6bf9b272d9db6e6267fe4e9f41e3e9e166b37064c67d145e->enter($__internal_4d0b65f66976081c6bf9b272d9db6e6267fe4e9f41e3e9e166b37064c67d145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d0b65f66976081c6bf9b272d9db6e6267fe4e9f41e3e9e166b37064c67d145e->leave($__internal_4d0b65f66976081c6bf9b272d9db6e6267fe4e9f41e3e9e166b37064c67d145e_prof);

        
        $__internal_94ece3457f4b9aaf40a533a8db4b6287b057764ee7970e89064ea3154bd4cd32->leave($__internal_94ece3457f4b9aaf40a533a8db4b6287b057764ee7970e89064ea3154bd4cd32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3185707825d9d58218d4c233f74e4cde64381450fd7a8cbfc6fc1b11f001e473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3185707825d9d58218d4c233f74e4cde64381450fd7a8cbfc6fc1b11f001e473->enter($__internal_3185707825d9d58218d4c233f74e4cde64381450fd7a8cbfc6fc1b11f001e473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ed592eeb4611ef69f91850d5aba0bdcb6593dadfb9a39bc3f7b8ba2e17b6210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed592eeb4611ef69f91850d5aba0bdcb6593dadfb9a39bc3f7b8ba2e17b6210->enter($__internal_1ed592eeb4611ef69f91850d5aba0bdcb6593dadfb9a39bc3f7b8ba2e17b6210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ed592eeb4611ef69f91850d5aba0bdcb6593dadfb9a39bc3f7b8ba2e17b6210->leave($__internal_1ed592eeb4611ef69f91850d5aba0bdcb6593dadfb9a39bc3f7b8ba2e17b6210_prof);

        
        $__internal_3185707825d9d58218d4c233f74e4cde64381450fd7a8cbfc6fc1b11f001e473->leave($__internal_3185707825d9d58218d4c233f74e4cde64381450fd7a8cbfc6fc1b11f001e473_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e45df9e7ac0e2aadad9ac32063400b525803a02ee5bffc5f36df428988a406ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45df9e7ac0e2aadad9ac32063400b525803a02ee5bffc5f36df428988a406ab->enter($__internal_e45df9e7ac0e2aadad9ac32063400b525803a02ee5bffc5f36df428988a406ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2750e448bafed86a23b98cf7f8831fbe1f46c54b96bbf6e4dc96c566d437560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2750e448bafed86a23b98cf7f8831fbe1f46c54b96bbf6e4dc96c566d437560->enter($__internal_a2750e448bafed86a23b98cf7f8831fbe1f46c54b96bbf6e4dc96c566d437560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2750e448bafed86a23b98cf7f8831fbe1f46c54b96bbf6e4dc96c566d437560->leave($__internal_a2750e448bafed86a23b98cf7f8831fbe1f46c54b96bbf6e4dc96c566d437560_prof);

        
        $__internal_e45df9e7ac0e2aadad9ac32063400b525803a02ee5bffc5f36df428988a406ab->leave($__internal_e45df9e7ac0e2aadad9ac32063400b525803a02ee5bffc5f36df428988a406ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
