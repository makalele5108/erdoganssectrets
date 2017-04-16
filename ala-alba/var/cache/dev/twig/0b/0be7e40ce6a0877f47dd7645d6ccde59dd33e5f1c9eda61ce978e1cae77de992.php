<?php

/* @Alba/base.html.twig */
class __TwigTemplate_89edcdb5575e90e1803a07ae462defeb43c2efa0cf106d4e1d581a2d214fb521 extends Twig_Template
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
        $__internal_e85325f75f820ef551951a6aa2023fc7f7b658117b007d582022f4045fa64762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85325f75f820ef551951a6aa2023fc7f7b658117b007d582022f4045fa64762->enter($__internal_e85325f75f820ef551951a6aa2023fc7f7b658117b007d582022f4045fa64762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/base.html.twig"));

        $__internal_41c998df2e6bfb9c96e65fc6702cb22015ac5df9faef3f9497fe12b768193340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c998df2e6bfb9c96e65fc6702cb22015ac5df9faef3f9497fe12b768193340->enter($__internal_41c998df2e6bfb9c96e65fc6702cb22015ac5df9faef3f9497fe12b768193340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/base.html.twig"));

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
        
        $__internal_e85325f75f820ef551951a6aa2023fc7f7b658117b007d582022f4045fa64762->leave($__internal_e85325f75f820ef551951a6aa2023fc7f7b658117b007d582022f4045fa64762_prof);

        
        $__internal_41c998df2e6bfb9c96e65fc6702cb22015ac5df9faef3f9497fe12b768193340->leave($__internal_41c998df2e6bfb9c96e65fc6702cb22015ac5df9faef3f9497fe12b768193340_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e863aa9a48259c2017ce07e437c7c8ea857ae4794850d8ecf040ac0db9d6b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e863aa9a48259c2017ce07e437c7c8ea857ae4794850d8ecf040ac0db9d6b46->enter($__internal_6e863aa9a48259c2017ce07e437c7c8ea857ae4794850d8ecf040ac0db9d6b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34da8a7403e2f06a6466977236e921417bda08048d787d330fe743657c881c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34da8a7403e2f06a6466977236e921417bda08048d787d330fe743657c881c28->enter($__internal_34da8a7403e2f06a6466977236e921417bda08048d787d330fe743657c881c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_34da8a7403e2f06a6466977236e921417bda08048d787d330fe743657c881c28->leave($__internal_34da8a7403e2f06a6466977236e921417bda08048d787d330fe743657c881c28_prof);

        
        $__internal_6e863aa9a48259c2017ce07e437c7c8ea857ae4794850d8ecf040ac0db9d6b46->leave($__internal_6e863aa9a48259c2017ce07e437c7c8ea857ae4794850d8ecf040ac0db9d6b46_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92271b44099b065cf761e1a17bae354c8ea89580387d9f619d4e9e954b7f1ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92271b44099b065cf761e1a17bae354c8ea89580387d9f619d4e9e954b7f1ca3->enter($__internal_92271b44099b065cf761e1a17bae354c8ea89580387d9f619d4e9e954b7f1ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_04c8129d6051af58b31f73ba951fb94211430197bf409a3c5cb3529e405225d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c8129d6051af58b31f73ba951fb94211430197bf409a3c5cb3529e405225d9->enter($__internal_04c8129d6051af58b31f73ba951fb94211430197bf409a3c5cb3529e405225d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_04c8129d6051af58b31f73ba951fb94211430197bf409a3c5cb3529e405225d9->leave($__internal_04c8129d6051af58b31f73ba951fb94211430197bf409a3c5cb3529e405225d9_prof);

        
        $__internal_92271b44099b065cf761e1a17bae354c8ea89580387d9f619d4e9e954b7f1ca3->leave($__internal_92271b44099b065cf761e1a17bae354c8ea89580387d9f619d4e9e954b7f1ca3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_62c359d7bb2cb1ff0d5c9429fcc2299176b6e04181c31c7324724b96ec667fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c359d7bb2cb1ff0d5c9429fcc2299176b6e04181c31c7324724b96ec667fb0->enter($__internal_62c359d7bb2cb1ff0d5c9429fcc2299176b6e04181c31c7324724b96ec667fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f9104a4ca2d44c9cafad43b19fa2e25436fdf40ad5ec57ff6d4199305a9fa90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9104a4ca2d44c9cafad43b19fa2e25436fdf40ad5ec57ff6d4199305a9fa90->enter($__internal_9f9104a4ca2d44c9cafad43b19fa2e25436fdf40ad5ec57ff6d4199305a9fa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f9104a4ca2d44c9cafad43b19fa2e25436fdf40ad5ec57ff6d4199305a9fa90->leave($__internal_9f9104a4ca2d44c9cafad43b19fa2e25436fdf40ad5ec57ff6d4199305a9fa90_prof);

        
        $__internal_62c359d7bb2cb1ff0d5c9429fcc2299176b6e04181c31c7324724b96ec667fb0->leave($__internal_62c359d7bb2cb1ff0d5c9429fcc2299176b6e04181c31c7324724b96ec667fb0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e86badad63fb57c2193473e3d7913687a7576858d8070c9c9b476ab15561a610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86badad63fb57c2193473e3d7913687a7576858d8070c9c9b476ab15561a610->enter($__internal_e86badad63fb57c2193473e3d7913687a7576858d8070c9c9b476ab15561a610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dcfd39483cd3de7a9d8360644a66b90daeadd8158db9e54973500933e85290a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfd39483cd3de7a9d8360644a66b90daeadd8158db9e54973500933e85290a8->enter($__internal_dcfd39483cd3de7a9d8360644a66b90daeadd8158db9e54973500933e85290a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dcfd39483cd3de7a9d8360644a66b90daeadd8158db9e54973500933e85290a8->leave($__internal_dcfd39483cd3de7a9d8360644a66b90daeadd8158db9e54973500933e85290a8_prof);

        
        $__internal_e86badad63fb57c2193473e3d7913687a7576858d8070c9c9b476ab15561a610->leave($__internal_e86badad63fb57c2193473e3d7913687a7576858d8070c9c9b476ab15561a610_prof);

    }

    public function getTemplateName()
    {
        return "@Alba/base.html.twig";
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
", "@Alba/base.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle\\Resources\\views\\base.html.twig");
    }
}
