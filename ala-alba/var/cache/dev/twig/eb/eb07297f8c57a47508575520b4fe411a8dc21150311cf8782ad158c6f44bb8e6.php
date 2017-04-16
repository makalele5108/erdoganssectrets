<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4894bf112205b3a460b82ba8f405ea3fc82cc75b5a8d10ca6c8b76b508664f76 extends Twig_Template
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
        $__internal_8b2c6604947f123089a21e730be775caf43010f8fddaba5254e624c1edc9d6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2c6604947f123089a21e730be775caf43010f8fddaba5254e624c1edc9d6da->enter($__internal_8b2c6604947f123089a21e730be775caf43010f8fddaba5254e624c1edc9d6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_970f598dd201db6a3282167c9b3b865dcf04834b5f9c0057b325e1bbd34e8cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970f598dd201db6a3282167c9b3b865dcf04834b5f9c0057b325e1bbd34e8cb3->enter($__internal_970f598dd201db6a3282167c9b3b865dcf04834b5f9c0057b325e1bbd34e8cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8b2c6604947f123089a21e730be775caf43010f8fddaba5254e624c1edc9d6da->leave($__internal_8b2c6604947f123089a21e730be775caf43010f8fddaba5254e624c1edc9d6da_prof);

        
        $__internal_970f598dd201db6a3282167c9b3b865dcf04834b5f9c0057b325e1bbd34e8cb3->leave($__internal_970f598dd201db6a3282167c9b3b865dcf04834b5f9c0057b325e1bbd34e8cb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
