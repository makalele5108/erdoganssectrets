<?php

/* base.html.twig */
class __TwigTemplate_54760178e2afd20d65f9beb08cc368901cb954cbe7d422100dbffaa4bf820fbf extends Twig_Template
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
        $__internal_46a7278eb4586042fc11df26ef7d63e442f04e2a278d9359a8e9291891fc40ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a7278eb4586042fc11df26ef7d63e442f04e2a278d9359a8e9291891fc40ff->enter($__internal_46a7278eb4586042fc11df26ef7d63e442f04e2a278d9359a8e9291891fc40ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ce5cba64bb0d3ee82e74247849e7b4c4a3fd637d657c2e90cfcf36ecb37c9d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5cba64bb0d3ee82e74247849e7b4c4a3fd637d657c2e90cfcf36ecb37c9d84->enter($__internal_ce5cba64bb0d3ee82e74247849e7b4c4a3fd637d657c2e90cfcf36ecb37c9d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/alba/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/alba/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</body>
</html>
";
        
        $__internal_46a7278eb4586042fc11df26ef7d63e442f04e2a278d9359a8e9291891fc40ff->leave($__internal_46a7278eb4586042fc11df26ef7d63e442f04e2a278d9359a8e9291891fc40ff_prof);

        
        $__internal_ce5cba64bb0d3ee82e74247849e7b4c4a3fd637d657c2e90cfcf36ecb37c9d84->leave($__internal_ce5cba64bb0d3ee82e74247849e7b4c4a3fd637d657c2e90cfcf36ecb37c9d84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3402e1a9cd7166f8a0c5afa6fb5a903ecd936ad06d9fe35ced62ba468ffecc58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3402e1a9cd7166f8a0c5afa6fb5a903ecd936ad06d9fe35ced62ba468ffecc58->enter($__internal_3402e1a9cd7166f8a0c5afa6fb5a903ecd936ad06d9fe35ced62ba468ffecc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b74f9f524c81d19dd68123ea1a267223c7aa556841948a28ef523d5f8e8d3e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74f9f524c81d19dd68123ea1a267223c7aa556841948a28ef523d5f8e8d3e46->enter($__internal_b74f9f524c81d19dd68123ea1a267223c7aa556841948a28ef523d5f8e8d3e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b74f9f524c81d19dd68123ea1a267223c7aa556841948a28ef523d5f8e8d3e46->leave($__internal_b74f9f524c81d19dd68123ea1a267223c7aa556841948a28ef523d5f8e8d3e46_prof);

        
        $__internal_3402e1a9cd7166f8a0c5afa6fb5a903ecd936ad06d9fe35ced62ba468ffecc58->leave($__internal_3402e1a9cd7166f8a0c5afa6fb5a903ecd936ad06d9fe35ced62ba468ffecc58_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_154e93bacc9d9877a8131ce6f3832cb2605a32e568cbae55935c2ccf873cf4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_154e93bacc9d9877a8131ce6f3832cb2605a32e568cbae55935c2ccf873cf4be->enter($__internal_154e93bacc9d9877a8131ce6f3832cb2605a32e568cbae55935c2ccf873cf4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f91d9f7f4be97a06742b2e602f38ad579b99682101e455e103f33ec187ec22d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91d9f7f4be97a06742b2e602f38ad579b99682101e455e103f33ec187ec22d2->enter($__internal_f91d9f7f4be97a06742b2e602f38ad579b99682101e455e103f33ec187ec22d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f91d9f7f4be97a06742b2e602f38ad579b99682101e455e103f33ec187ec22d2->leave($__internal_f91d9f7f4be97a06742b2e602f38ad579b99682101e455e103f33ec187ec22d2_prof);

        
        $__internal_154e93bacc9d9877a8131ce6f3832cb2605a32e568cbae55935c2ccf873cf4be->leave($__internal_154e93bacc9d9877a8131ce6f3832cb2605a32e568cbae55935c2ccf873cf4be_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a8693df4a4655248c17f54f532244025a8e808dc5c6e59e675788ab4dface36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8693df4a4655248c17f54f532244025a8e808dc5c6e59e675788ab4dface36->enter($__internal_5a8693df4a4655248c17f54f532244025a8e808dc5c6e59e675788ab4dface36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8aa6c1af87cb517a8ce80c3b44d2c337d399aedc430e8d3d5e5d6ccd76a79576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa6c1af87cb517a8ce80c3b44d2c337d399aedc430e8d3d5e5d6ccd76a79576->enter($__internal_8aa6c1af87cb517a8ce80c3b44d2c337d399aedc430e8d3d5e5d6ccd76a79576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8aa6c1af87cb517a8ce80c3b44d2c337d399aedc430e8d3d5e5d6ccd76a79576->leave($__internal_8aa6c1af87cb517a8ce80c3b44d2c337d399aedc430e8d3d5e5d6ccd76a79576_prof);

        
        $__internal_5a8693df4a4655248c17f54f532244025a8e808dc5c6e59e675788ab4dface36->leave($__internal_5a8693df4a4655248c17f54f532244025a8e808dc5c6e59e675788ab4dface36_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0d12103860bd4c63c1489c5fc79843f77749e3efbcaef0702800104d61135d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d12103860bd4c63c1489c5fc79843f77749e3efbcaef0702800104d61135d3->enter($__internal_f0d12103860bd4c63c1489c5fc79843f77749e3efbcaef0702800104d61135d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b11edfcad3ec1893aae6c94fa464301f6883238df66d942acd3801e3fe9e776a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11edfcad3ec1893aae6c94fa464301f6883238df66d942acd3801e3fe9e776a->enter($__internal_b11edfcad3ec1893aae6c94fa464301f6883238df66d942acd3801e3fe9e776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b11edfcad3ec1893aae6c94fa464301f6883238df66d942acd3801e3fe9e776a->leave($__internal_b11edfcad3ec1893aae6c94fa464301f6883238df66d942acd3801e3fe9e776a_prof);

        
        $__internal_f0d12103860bd4c63c1489c5fc79843f77749e3efbcaef0702800104d61135d3->leave($__internal_f0d12103860bd4c63c1489c5fc79843f77749e3efbcaef0702800104d61135d3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 13,  107 => 12,  90 => 6,  72 => 5,  60 => 14,  58 => 13,  56 => 12,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/alba/css/bootstrap.min.css') }}\"/>
    <script src=\"{{ asset('bundles/alba/js/bootstrap.min.js') }}\"></script>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app\\Resources\\views\\base.html.twig");
    }
}
