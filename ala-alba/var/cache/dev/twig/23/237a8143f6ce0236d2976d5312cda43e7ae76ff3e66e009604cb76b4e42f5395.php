<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_dba3c46a1a5175e107331f197961bcae1b4a1183e0f3319e62c82c671f614434 extends Twig_Template
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
        $__internal_04c19110b1a8f3120f5ea003c3fd8d87c2516e44196baa7991b68089f958ed79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c19110b1a8f3120f5ea003c3fd8d87c2516e44196baa7991b68089f958ed79->enter($__internal_04c19110b1a8f3120f5ea003c3fd8d87c2516e44196baa7991b68089f958ed79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b939009c1192b8e977fb9181b63783485cb1de0939a7c020f34f414cbc17e933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b939009c1192b8e977fb9181b63783485cb1de0939a7c020f34f414cbc17e933->enter($__internal_b939009c1192b8e977fb9181b63783485cb1de0939a7c020f34f414cbc17e933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_04c19110b1a8f3120f5ea003c3fd8d87c2516e44196baa7991b68089f958ed79->leave($__internal_04c19110b1a8f3120f5ea003c3fd8d87c2516e44196baa7991b68089f958ed79_prof);

        
        $__internal_b939009c1192b8e977fb9181b63783485cb1de0939a7c020f34f414cbc17e933->leave($__internal_b939009c1192b8e977fb9181b63783485cb1de0939a7c020f34f414cbc17e933_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
