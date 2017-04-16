<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d7ebd663ee1e532fec173367e85b3e67329219791244ffb386b94a646f0fca69 extends Twig_Template
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
        $__internal_d6f3bf799925e6f035003bf396408a5934790332fa6435fa0eef980e179ced4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f3bf799925e6f035003bf396408a5934790332fa6435fa0eef980e179ced4a->enter($__internal_d6f3bf799925e6f035003bf396408a5934790332fa6435fa0eef980e179ced4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_61eccccce0e621217f73a9a6796c902b7ce6fcffbc3edf36b394d9d054836f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61eccccce0e621217f73a9a6796c902b7ce6fcffbc3edf36b394d9d054836f22->enter($__internal_61eccccce0e621217f73a9a6796c902b7ce6fcffbc3edf36b394d9d054836f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d6f3bf799925e6f035003bf396408a5934790332fa6435fa0eef980e179ced4a->leave($__internal_d6f3bf799925e6f035003bf396408a5934790332fa6435fa0eef980e179ced4a_prof);

        
        $__internal_61eccccce0e621217f73a9a6796c902b7ce6fcffbc3edf36b394d9d054836f22->leave($__internal_61eccccce0e621217f73a9a6796c902b7ce6fcffbc3edf36b394d9d054836f22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
