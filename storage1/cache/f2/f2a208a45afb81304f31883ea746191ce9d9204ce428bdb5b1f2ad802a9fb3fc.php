<?php

/* extension/tfa/setup.twig */
class __TwigTemplate_c1fc201abf86e7d101c307deecd7b1468238f3f39ae6039593202d8a528949f3 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 6
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 7
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 16
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 17
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 21
        echo "        ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 22
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 26
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-shield\"></i> ";
        // line 29
        echo (isset($context["text_configure_tfa"]) ? $context["text_configure_tfa"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" id=\"form-tfa\" class=\"form-inline\">
                    ";
        // line 33
        if ((isset($context["tfa_enable"]) ? $context["tfa_enable"] : null)) {
            // line 34
            echo "                        <p>";
            echo (isset($context["text_description_enabled"]) ? $context["text_description_enabled"] : null);
            echo "</p>
                        <input type=\"hidden\" name=\"tfa_enable\" value=\"0\" />
                        <input type=\"text\" class=\"form-control\" name=\"code\" placeholder=\"";
            // line 36
            echo (isset($context["authentication_code"]) ? $context["authentication_code"] : null);
            echo "\" />
                        <button type=\"submit\" form=\"form-user\" data-toggle=\"tooltip\" title=\"";
            // line 37
            echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
            echo "</button>
                    ";
        } else {
            // line 39
            echo "                        <p>";
            echo (isset($context["text_description"]) ? $context["text_description"] : null);
            echo "</p>
                        <h3>";
            // line 40
            echo (isset($context["text_step1"]) ? $context["text_step1"] : null);
            echo "</h3>
                        <p>";
            // line 41
            echo (isset($context["text_step1_description"]) ? $context["text_step1_description"] : null);
            echo "</p>
                        <h3>";
            // line 42
            echo (isset($context["text_step2"]) ? $context["text_step2"] : null);
            echo "</h3>
                        <p>";
            // line 43
            echo (isset($context["text_step2_description"]) ? $context["text_step2_description"] : null);
            echo "</p>
                        <p><big><strong>";
            // line 44
            echo (isset($context["backup_code"]) ? $context["backup_code"] : null);
            echo "</strong></big></p>
                        <h3>";
            // line 45
            echo (isset($context["text_step3"]) ? $context["text_step3"] : null);
            echo "</h3>
                        <p>";
            // line 46
            echo (isset($context["text_step3_description"]) ? $context["text_step3_description"] : null);
            echo "</p>
                        <p><img src=\"";
            // line 47
            echo (isset($context["qr_image"]) ? $context["qr_image"] : null);
            echo "\" /></p>
                        <h3>";
            // line 48
            echo (isset($context["text_step4"]) ? $context["text_step4"] : null);
            echo "</h3>
                        <p>";
            // line 49
            echo (isset($context["text_step4_description"]) ? $context["text_step4_description"] : null);
            echo "</p>
                        <input type=\"hidden\" name=\"tfa_enable\" value=\"1\" />
                        <input type=\"text\" class=\"form-control\" name=\"code\" placeholder=\"";
            // line 51
            echo (isset($context["authentication_code"]) ? $context["authentication_code"] : null);
            echo "\" />
                        <button type=\"submit\" form=\"form-user\" data-toggle=\"tooltip\" title=\"";
            // line 52
            echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
            echo "</button>
                    ";
        }
        // line 54
        echo "                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 59
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/tfa/setup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 59,  172 => 54,  165 => 52,  161 => 51,  156 => 49,  152 => 48,  148 => 47,  144 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  115 => 39,  108 => 37,  104 => 36,  98 => 34,  96 => 33,  92 => 32,  86 => 29,  81 => 26,  73 => 22,  70 => 21,  62 => 17,  60 => 16,  54 => 12,  43 => 10,  39 => 9,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if success %}*/
/*             <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-shield"></i> {{ text_configure_tfa }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" id="form-tfa" class="form-inline">*/
/*                     {% if tfa_enable %}*/
/*                         <p>{{ text_description_enabled }}</p>*/
/*                         <input type="hidden" name="tfa_enable" value="0" />*/
/*                         <input type="text" class="form-control" name="code" placeholder="{{ authentication_code }}" />*/
/*                         <button type="submit" form="form-user" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-primary">{{ button_disable }}</button>*/
/*                     {% else %}*/
/*                         <p>{{ text_description }}</p>*/
/*                         <h3>{{ text_step1 }}</h3>*/
/*                         <p>{{ text_step1_description }}</p>*/
/*                         <h3>{{ text_step2 }}</h3>*/
/*                         <p>{{ text_step2_description }}</p>*/
/*                         <p><big><strong>{{ backup_code }}</strong></big></p>*/
/*                         <h3>{{ text_step3 }}</h3>*/
/*                         <p>{{ text_step3_description }}</p>*/
/*                         <p><img src="{{ qr_image }}" /></p>*/
/*                         <h3>{{ text_step4 }}</h3>*/
/*                         <p>{{ text_step4_description }}</p>*/
/*                         <input type="hidden" name="tfa_enable" value="1" />*/
/*                         <input type="text" class="form-control" name="code" placeholder="{{ authentication_code }}" />*/
/*                         <button type="submit" form="form-user" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-primary">{{ button_enable }}</button>*/
/*                     {% endif %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
