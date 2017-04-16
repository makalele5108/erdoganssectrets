<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c995560b59d841638fe4e6eb53f8e347f9fde1284165842d3f0e199dc28de136 extends Twig_Template
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
        $__internal_e66021b82c61179a2be4c62a1958ab0b7cafe00a1e1f7ddba3950113e6a675f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66021b82c61179a2be4c62a1958ab0b7cafe00a1e1f7ddba3950113e6a675f3->enter($__internal_e66021b82c61179a2be4c62a1958ab0b7cafe00a1e1f7ddba3950113e6a675f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5cd007ffa11f76ccbaf6406688157b0769a229d2e1830c43dba27df6ddcaa9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd007ffa11f76ccbaf6406688157b0769a229d2e1830c43dba27df6ddcaa9e0->enter($__internal_5cd007ffa11f76ccbaf6406688157b0769a229d2e1830c43dba27df6ddcaa9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e66021b82c61179a2be4c62a1958ab0b7cafe00a1e1f7ddba3950113e6a675f3->leave($__internal_e66021b82c61179a2be4c62a1958ab0b7cafe00a1e1f7ddba3950113e6a675f3_prof);

        
        $__internal_5cd007ffa11f76ccbaf6406688157b0769a229d2e1830c43dba27df6ddcaa9e0->leave($__internal_5cd007ffa11f76ccbaf6406688157b0769a229d2e1830c43dba27df6ddcaa9e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
