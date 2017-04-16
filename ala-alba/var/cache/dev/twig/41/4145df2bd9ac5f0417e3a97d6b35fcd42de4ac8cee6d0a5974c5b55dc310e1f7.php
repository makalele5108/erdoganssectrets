<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_21b241e88ef824f207e7d7aece77e8804a8bbd4c0c27245fa318f57939c7baa0 extends Twig_Template
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
        $__internal_758b173f845927d8372c61b88f87539a3ac75e6cc0d1465f603a9b5541193848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758b173f845927d8372c61b88f87539a3ac75e6cc0d1465f603a9b5541193848->enter($__internal_758b173f845927d8372c61b88f87539a3ac75e6cc0d1465f603a9b5541193848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_356fde59880d8685048f5f35dcf0bd02cb5fbf1d287f9d5be2eea7e6ecbf849e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356fde59880d8685048f5f35dcf0bd02cb5fbf1d287f9d5be2eea7e6ecbf849e->enter($__internal_356fde59880d8685048f5f35dcf0bd02cb5fbf1d287f9d5be2eea7e6ecbf849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_758b173f845927d8372c61b88f87539a3ac75e6cc0d1465f603a9b5541193848->leave($__internal_758b173f845927d8372c61b88f87539a3ac75e6cc0d1465f603a9b5541193848_prof);

        
        $__internal_356fde59880d8685048f5f35dcf0bd02cb5fbf1d287f9d5be2eea7e6ecbf849e->leave($__internal_356fde59880d8685048f5f35dcf0bd02cb5fbf1d287f9d5be2eea7e6ecbf849e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
