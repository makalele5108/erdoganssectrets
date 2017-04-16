<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37174e2ebb406be0b282c8fc54129a044ce3708e78188dd91571d7fa6226303a extends Twig_Template
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
        $__internal_daf6ff4b07f73db190dfccc1d6fdacca1a016b0f32d8fc12a8865db53e8c5110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf6ff4b07f73db190dfccc1d6fdacca1a016b0f32d8fc12a8865db53e8c5110->enter($__internal_daf6ff4b07f73db190dfccc1d6fdacca1a016b0f32d8fc12a8865db53e8c5110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b0fadf46bad1beb9153ffb6338dab4cb03f6348683dac1161f98723e8e36080a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fadf46bad1beb9153ffb6338dab4cb03f6348683dac1161f98723e8e36080a->enter($__internal_b0fadf46bad1beb9153ffb6338dab4cb03f6348683dac1161f98723e8e36080a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_daf6ff4b07f73db190dfccc1d6fdacca1a016b0f32d8fc12a8865db53e8c5110->leave($__internal_daf6ff4b07f73db190dfccc1d6fdacca1a016b0f32d8fc12a8865db53e8c5110_prof);

        
        $__internal_b0fadf46bad1beb9153ffb6338dab4cb03f6348683dac1161f98723e8e36080a->leave($__internal_b0fadf46bad1beb9153ffb6338dab4cb03f6348683dac1161f98723e8e36080a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
