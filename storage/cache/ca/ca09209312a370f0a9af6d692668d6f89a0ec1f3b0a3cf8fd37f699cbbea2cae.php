<?php

/* default/template/extension/module/hubtalk.twig */
class __TwigTemplate_3a34f20e0d9041bfb9c3cdd101778f361889d576343dc9eba2f4ca02a5557789 extends Twig_Template
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
        // line 1
        echo "<div>
<script type=\"text/javascript\">
    var hubtalk_opencart_v = \"";
        // line 3
        echo (isset($context["module_hubtalk_opencart_v"]) ? $context["module_hubtalk_opencart_v"] : null);
        echo "\";
</script>
";
        // line 5
        echo (isset($context["module_hubtalk_code"]) ? $context["module_hubtalk_code"] : null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/hubtalk.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div>*/
/* <script type="text/javascript">*/
/*     var hubtalk_opencart_v = "{{module_hubtalk_opencart_v}}";*/
/* </script>*/
/* {{module_hubtalk_code}}*/
/* </div>*/
