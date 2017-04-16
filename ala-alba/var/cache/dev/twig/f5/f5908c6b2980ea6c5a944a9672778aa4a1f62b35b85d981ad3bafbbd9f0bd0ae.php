<?php

/* ::base.html.twig */
class __TwigTemplate_dcbdaf93735b5bc8de218ea0d068d55f653223179d8a8ba7f91fb80474077e3c extends Twig_Template
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
        $__internal_1125fb7b0f0df2e10708cad0f15e0f069dfeed9c87f884080cb5c385fe0c9ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1125fb7b0f0df2e10708cad0f15e0f069dfeed9c87f884080cb5c385fe0c9ad9->enter($__internal_1125fb7b0f0df2e10708cad0f15e0f069dfeed9c87f884080cb5c385fe0c9ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_49c52d0ac42bb01bdc60263264b232e5d13707b93bff62179fba444ca3dc4133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c52d0ac42bb01bdc60263264b232e5d13707b93bff62179fba444ca3dc4133->enter($__internal_49c52d0ac42bb01bdc60263264b232e5d13707b93bff62179fba444ca3dc4133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1125fb7b0f0df2e10708cad0f15e0f069dfeed9c87f884080cb5c385fe0c9ad9->leave($__internal_1125fb7b0f0df2e10708cad0f15e0f069dfeed9c87f884080cb5c385fe0c9ad9_prof);

        
        $__internal_49c52d0ac42bb01bdc60263264b232e5d13707b93bff62179fba444ca3dc4133->leave($__internal_49c52d0ac42bb01bdc60263264b232e5d13707b93bff62179fba444ca3dc4133_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59fc6202d04f8bb73e0ade200adb1cca85fb4b5d533c9b7ead40e021b8c3abb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fc6202d04f8bb73e0ade200adb1cca85fb4b5d533c9b7ead40e021b8c3abb6->enter($__internal_59fc6202d04f8bb73e0ade200adb1cca85fb4b5d533c9b7ead40e021b8c3abb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06bb5b0dfba2b08961a62afdad908a3af8fdbc46d1a40ad8ffdfe04947988fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bb5b0dfba2b08961a62afdad908a3af8fdbc46d1a40ad8ffdfe04947988fe8->enter($__internal_06bb5b0dfba2b08961a62afdad908a3af8fdbc46d1a40ad8ffdfe04947988fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06bb5b0dfba2b08961a62afdad908a3af8fdbc46d1a40ad8ffdfe04947988fe8->leave($__internal_06bb5b0dfba2b08961a62afdad908a3af8fdbc46d1a40ad8ffdfe04947988fe8_prof);

        
        $__internal_59fc6202d04f8bb73e0ade200adb1cca85fb4b5d533c9b7ead40e021b8c3abb6->leave($__internal_59fc6202d04f8bb73e0ade200adb1cca85fb4b5d533c9b7ead40e021b8c3abb6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_032e8ff509db3b92bcf537d9605a7bed7f8dffb5a5347fcd29b761a5cbbc9278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032e8ff509db3b92bcf537d9605a7bed7f8dffb5a5347fcd29b761a5cbbc9278->enter($__internal_032e8ff509db3b92bcf537d9605a7bed7f8dffb5a5347fcd29b761a5cbbc9278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aefdb2657be510193cbbe7f09e423acb63f8d19b90efb4ce8489f882cdb25f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefdb2657be510193cbbe7f09e423acb63f8d19b90efb4ce8489f882cdb25f12->enter($__internal_aefdb2657be510193cbbe7f09e423acb63f8d19b90efb4ce8489f882cdb25f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aefdb2657be510193cbbe7f09e423acb63f8d19b90efb4ce8489f882cdb25f12->leave($__internal_aefdb2657be510193cbbe7f09e423acb63f8d19b90efb4ce8489f882cdb25f12_prof);

        
        $__internal_032e8ff509db3b92bcf537d9605a7bed7f8dffb5a5347fcd29b761a5cbbc9278->leave($__internal_032e8ff509db3b92bcf537d9605a7bed7f8dffb5a5347fcd29b761a5cbbc9278_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_158d64a3f8693d0adc5b0081523c293f0ac87a20e480ef142bc3b29144ff16af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158d64a3f8693d0adc5b0081523c293f0ac87a20e480ef142bc3b29144ff16af->enter($__internal_158d64a3f8693d0adc5b0081523c293f0ac87a20e480ef142bc3b29144ff16af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ec3dca502125efda4f34d5f71bbe1cb4e2ced76239f740aed2a878c0818c8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec3dca502125efda4f34d5f71bbe1cb4e2ced76239f740aed2a878c0818c8ef->enter($__internal_1ec3dca502125efda4f34d5f71bbe1cb4e2ced76239f740aed2a878c0818c8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ec3dca502125efda4f34d5f71bbe1cb4e2ced76239f740aed2a878c0818c8ef->leave($__internal_1ec3dca502125efda4f34d5f71bbe1cb4e2ced76239f740aed2a878c0818c8ef_prof);

        
        $__internal_158d64a3f8693d0adc5b0081523c293f0ac87a20e480ef142bc3b29144ff16af->leave($__internal_158d64a3f8693d0adc5b0081523c293f0ac87a20e480ef142bc3b29144ff16af_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b112f64ef9d6675a9d9ddf035ec5bf63b4e671e05623aad830b3c1f0324d73e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b112f64ef9d6675a9d9ddf035ec5bf63b4e671e05623aad830b3c1f0324d73e2->enter($__internal_b112f64ef9d6675a9d9ddf035ec5bf63b4e671e05623aad830b3c1f0324d73e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ccf8660cfe2f6618d762a809b9c5b4b36af29f1cf41185c1e5bccb71cb64acbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf8660cfe2f6618d762a809b9c5b4b36af29f1cf41185c1e5bccb71cb64acbb->enter($__internal_ccf8660cfe2f6618d762a809b9c5b4b36af29f1cf41185c1e5bccb71cb64acbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ccf8660cfe2f6618d762a809b9c5b4b36af29f1cf41185c1e5bccb71cb64acbb->leave($__internal_ccf8660cfe2f6618d762a809b9c5b4b36af29f1cf41185c1e5bccb71cb64acbb_prof);

        
        $__internal_b112f64ef9d6675a9d9ddf035ec5bf63b4e671e05623aad830b3c1f0324d73e2->leave($__internal_b112f64ef9d6675a9d9ddf035ec5bf63b4e671e05623aad830b3c1f0324d73e2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app/Resources\\views/base.html.twig");
    }
}
