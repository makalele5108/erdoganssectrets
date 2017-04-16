<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0efb0f443f18e2cf78e9a8c674fb0a69f0d1a43a0331ca2f27cb7c5a2e9cecc9 extends Twig_Template
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
        $__internal_aa21288a75b0f4f72720633af3b563bfbc75231935818b98e2d0d20b6ef84ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa21288a75b0f4f72720633af3b563bfbc75231935818b98e2d0d20b6ef84ff9->enter($__internal_aa21288a75b0f4f72720633af3b563bfbc75231935818b98e2d0d20b6ef84ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_81ba6c96584033011e7f5b66bec78c8c8a07290130f2591d0cc946d537d77a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ba6c96584033011e7f5b66bec78c8c8a07290130f2591d0cc946d537d77a5f->enter($__internal_81ba6c96584033011e7f5b66bec78c8c8a07290130f2591d0cc946d537d77a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_aa21288a75b0f4f72720633af3b563bfbc75231935818b98e2d0d20b6ef84ff9->leave($__internal_aa21288a75b0f4f72720633af3b563bfbc75231935818b98e2d0d20b6ef84ff9_prof);

        
        $__internal_81ba6c96584033011e7f5b66bec78c8c8a07290130f2591d0cc946d537d77a5f->leave($__internal_81ba6c96584033011e7f5b66bec78c8c8a07290130f2591d0cc946d537d77a5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
