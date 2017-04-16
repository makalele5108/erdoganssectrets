<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4ac8201660450102ae40f5b761bff033bc9e18c809d1da7419f8b53a5f7bb5cf extends Twig_Template
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
        $__internal_927ee461f2c19c3c9f3b2d320cc07da8e61aa0dab95dc0d6749b746388b55d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927ee461f2c19c3c9f3b2d320cc07da8e61aa0dab95dc0d6749b746388b55d17->enter($__internal_927ee461f2c19c3c9f3b2d320cc07da8e61aa0dab95dc0d6749b746388b55d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b45a693ad460d00dc59d2765035b4cc1130972cc0a20e7fc7dc0f685bf35a354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45a693ad460d00dc59d2765035b4cc1130972cc0a20e7fc7dc0f685bf35a354->enter($__internal_b45a693ad460d00dc59d2765035b4cc1130972cc0a20e7fc7dc0f685bf35a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_927ee461f2c19c3c9f3b2d320cc07da8e61aa0dab95dc0d6749b746388b55d17->leave($__internal_927ee461f2c19c3c9f3b2d320cc07da8e61aa0dab95dc0d6749b746388b55d17_prof);

        
        $__internal_b45a693ad460d00dc59d2765035b4cc1130972cc0a20e7fc7dc0f685bf35a354->leave($__internal_b45a693ad460d00dc59d2765035b4cc1130972cc0a20e7fc7dc0f685bf35a354_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
