<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d0b8250f4f97b9964a1b573db62f905019121c6ff7678fda168fd5e1e0886284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daadc5a0a088ceef24a21cd8cdeca138e6d3e43a06318160df387f5e485c8d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daadc5a0a088ceef24a21cd8cdeca138e6d3e43a06318160df387f5e485c8d47->enter($__internal_daadc5a0a088ceef24a21cd8cdeca138e6d3e43a06318160df387f5e485c8d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0724c2320ac81e95a5eae883413e08a328a27bd0e2b33a212abc8daa5174f58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0724c2320ac81e95a5eae883413e08a328a27bd0e2b33a212abc8daa5174f58a->enter($__internal_0724c2320ac81e95a5eae883413e08a328a27bd0e2b33a212abc8daa5174f58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_daadc5a0a088ceef24a21cd8cdeca138e6d3e43a06318160df387f5e485c8d47->leave($__internal_daadc5a0a088ceef24a21cd8cdeca138e6d3e43a06318160df387f5e485c8d47_prof);

        
        $__internal_0724c2320ac81e95a5eae883413e08a328a27bd0e2b33a212abc8daa5174f58a->leave($__internal_0724c2320ac81e95a5eae883413e08a328a27bd0e2b33a212abc8daa5174f58a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
