<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4b2e67e67f929b599b9ebf88a3935fd6b248cff0b64206afd465ab8ab4b2ee9d extends Twig_Template
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
        $__internal_7a8a54404ac0486ab1c93ec4742c81f348c04f6e0d47a759f31aa711edcfce88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8a54404ac0486ab1c93ec4742c81f348c04f6e0d47a759f31aa711edcfce88->enter($__internal_7a8a54404ac0486ab1c93ec4742c81f348c04f6e0d47a759f31aa711edcfce88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d4c10b02d84827e802de40b25382a3efc82d183239c51cdef9b43d2f8d12a14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c10b02d84827e802de40b25382a3efc82d183239c51cdef9b43d2f8d12a14c->enter($__internal_d4c10b02d84827e802de40b25382a3efc82d183239c51cdef9b43d2f8d12a14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7a8a54404ac0486ab1c93ec4742c81f348c04f6e0d47a759f31aa711edcfce88->leave($__internal_7a8a54404ac0486ab1c93ec4742c81f348c04f6e0d47a759f31aa711edcfce88_prof);

        
        $__internal_d4c10b02d84827e802de40b25382a3efc82d183239c51cdef9b43d2f8d12a14c->leave($__internal_d4c10b02d84827e802de40b25382a3efc82d183239c51cdef9b43d2f8d12a14c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
