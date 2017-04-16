<?php

/* AlbaBundle:user:edit.html.twig */
class __TwigTemplate_1dfb87d045d9babf75bcbb70a01117eddba1a0a1f6b70c3d7b519a472eef6a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Alba/base.html.twig", "AlbaBundle:user:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Alba/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fedac5fd01edfc8db34e2a13c0158e54951b738b18ce62f6a7d6330efefaf14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedac5fd01edfc8db34e2a13c0158e54951b738b18ce62f6a7d6330efefaf14d->enter($__internal_fedac5fd01edfc8db34e2a13c0158e54951b738b18ce62f6a7d6330efefaf14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:user:edit.html.twig"));

        $__internal_054c717266de6230df0330d1714fa2af7e8947ca6735c52ec3b3a42db8d699cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054c717266de6230df0330d1714fa2af7e8947ca6735c52ec3b3a42db8d699cc->enter($__internal_054c717266de6230df0330d1714fa2af7e8947ca6735c52ec3b3a42db8d699cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fedac5fd01edfc8db34e2a13c0158e54951b738b18ce62f6a7d6330efefaf14d->leave($__internal_fedac5fd01edfc8db34e2a13c0158e54951b738b18ce62f6a7d6330efefaf14d_prof);

        
        $__internal_054c717266de6230df0330d1714fa2af7e8947ca6735c52ec3b3a42db8d699cc->leave($__internal_054c717266de6230df0330d1714fa2af7e8947ca6735c52ec3b3a42db8d699cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d75a3cc1b8017875acca56fffa87b9db69a9cb79fc338a4910aad8c718d6de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d75a3cc1b8017875acca56fffa87b9db69a9cb79fc338a4910aad8c718d6de3->enter($__internal_4d75a3cc1b8017875acca56fffa87b9db69a9cb79fc338a4910aad8c718d6de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57412c90bb5e12976c4301cc4611e17c9a49e74382c112697fdce4d9c9fe9254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57412c90bb5e12976c4301cc4611e17c9a49e74382c112697fdce4d9c9fe9254->enter($__internal_57412c90bb5e12976c4301cc4611e17c9a49e74382c112697fdce4d9c9fe9254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_57412c90bb5e12976c4301cc4611e17c9a49e74382c112697fdce4d9c9fe9254->leave($__internal_57412c90bb5e12976c4301cc4611e17c9a49e74382c112697fdce4d9c9fe9254_prof);

        
        $__internal_4d75a3cc1b8017875acca56fffa87b9db69a9cb79fc338a4910aad8c718d6de3->leave($__internal_4d75a3cc1b8017875acca56fffa87b9db69a9cb79fc338a4910aad8c718d6de3_prof);

    }

    public function getTemplateName()
    {
        return "AlbaBundle:user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Alba/base.html.twig' %}

{% block body %}
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "AlbaBundle:user:edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle/Resources/views/user/edit.html.twig");
    }
}
