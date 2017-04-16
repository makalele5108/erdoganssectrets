<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f9f61ad5a20ec2db40c8d157fcf12284b5c9ab4a5548b9addc305e24cc676f96 extends Twig_Template
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
        $__internal_fed42c4fef359cc8d1b3c665d4f3c6c8fe8bd25df4a2f8d52299adb030229375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed42c4fef359cc8d1b3c665d4f3c6c8fe8bd25df4a2f8d52299adb030229375->enter($__internal_fed42c4fef359cc8d1b3c665d4f3c6c8fe8bd25df4a2f8d52299adb030229375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_63fc53aaabedf32d72d7ae9c4f0ca18bcc088f026dc64e6ec58839d3a0643476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fc53aaabedf32d72d7ae9c4f0ca18bcc088f026dc64e6ec58839d3a0643476->enter($__internal_63fc53aaabedf32d72d7ae9c4f0ca18bcc088f026dc64e6ec58839d3a0643476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fed42c4fef359cc8d1b3c665d4f3c6c8fe8bd25df4a2f8d52299adb030229375->leave($__internal_fed42c4fef359cc8d1b3c665d4f3c6c8fe8bd25df4a2f8d52299adb030229375_prof);

        
        $__internal_63fc53aaabedf32d72d7ae9c4f0ca18bcc088f026dc64e6ec58839d3a0643476->leave($__internal_63fc53aaabedf32d72d7ae9c4f0ca18bcc088f026dc64e6ec58839d3a0643476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
