<?php

/* extension/module/digitcart_admin_tab.twig */
class __TwigTemplate_373cee695fa3a5cab4b3813b9e0647b51f5fe38465f297585d99d118c8940e93 extends Twig_Template
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
        if (((isset($context["view_type"]) ? $context["view_type"] : null) == "module_settings")) {
            // line 2
            echo "\t";
            echo (isset($context["header"]) ? $context["header"] : null);
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "
\t<div id=\"content\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
            // line 7
            echo (isset($context["button_save"]) ? $context["button_save"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t<button id=\"apply\" data-toggle=\"tooltip\" data-loading-text=\"<i class='fa fa-spin fa-cog'></i>\" title=\"\" class=\"btn btn-success\" data-original-title=\"";
            // line 8
            echo (isset($context["button_save_stay"]) ? $context["button_save_stay"] : null);
            echo "\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t<a href=\"";
            // line 9
            echo (isset($context["cancel"]) ? $context["cancel"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t\t</div>
\t\t\t\t<h1>";
            // line 11
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 14
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid\">
\t\t\t";
            // line 20
            if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
                // line 21
                echo "\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
                echo "
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t</div>
\t\t\t";
            }
            // line 25
            echo "\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
            // line 27
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form action=\"";
            // line 30
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 32
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"module_digitcart_admin_tab_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
            // line 35
            if ((isset($context["module_digitcart_admin_tab_status"]) ? $context["module_digitcart_admin_tab_status"] : null)) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 37
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 40
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script>
\t\t\$('body').on('click', '#apply', function(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'post',
\t\t\t\turl: \$('form').attr('action') + '&save',
\t\t\t\tdata: \$('form').serialize(),
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('form').fadeTo('slow', 0.3);
\t\t\t\t\t\$('#apply').button('loading');
\t\t\t\t\t\$('#dc-admin-notification').remove();
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('form').fadeTo('slow', 1);
\t\t\t\t\t\$('#apply').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\$('body').append('<p id=\"dc-admin-notification\" class=\"alert alert-success\" style=\"position: fixed; z-index: 999; bottom: 0px; right: 0px; left: 0px; margin: auto; display: inline-block; width: 200px; text-align: center;\">";
            // line 66
            echo (isset($context["text_saved"]) ? $context["text_saved"] : null);
            echo "</p>');
\t\t\t\t\t\$('#dc-admin-notification').delay(3000).fadeOut();
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
\t";
            // line 72
            echo (isset($context["footer"]) ? $context["footer"] : null);
            echo "
";
        } elseif ((        // line 73
(isset($context["view_type"]) ? $context["view_type"] : null) == "js_code")) {
            // line 74
            echo "\t<script id=\"digitcart-admin-tab-script\">
\t\tif (typeof(Storage) !== \"undefined\") {
\t\t\t\$(document).on('click', '[data-toggle=\"tab\"]', function(){
\t\t\t\tlocalStorage.setItem(\"digitcart-active-tab-\" + getURLVar('route'), \$(this).attr('href'));
\t\t\t});
\t\t\tif(localStorage.getItem(\"digitcart-active-tab-\" + getURLVar('route'))){
\t\t\t\t\$('[href=\"' + localStorage.getItem(\"digitcart-active-tab-\" + getURLVar('route')) + '\"]').trigger('click');
\t\t\t}
\t\t} else {
\t\t\tconsole.log('Storage not suported!');
\t\t}
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "extension/module/digitcart_admin_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 74,  164 => 73,  160 => 72,  151 => 66,  125 => 42,  120 => 40,  115 => 39,  110 => 37,  105 => 36,  103 => 35,  97 => 32,  92 => 30,  86 => 27,  82 => 25,  74 => 21,  72 => 20,  66 => 16,  55 => 14,  51 => 13,  46 => 11,  39 => 9,  35 => 8,  31 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% if view_type == 'module_settings' %}*/
/* 	{{ header }}{{ column_left }}*/
/* 	<div id="content">*/
/* 		<div class="page-header">*/
/* 			<div class="container-fluid">*/
/* 				<div class="pull-right">*/
/* 					<button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/* 					<button id="apply" data-toggle="tooltip" data-loading-text="<i class='fa fa-spin fa-cog'></i>" title="" class="btn btn-success" data-original-title="{{ button_save_stay }}"><i class="fa fa-save"></i></button>*/
/* 					<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 				</div>*/
/* 				<h1>{{ heading_title }}</h1>*/
/* 				<ul class="breadcrumb">*/
/* 					{% for breadcrumb in breadcrumbs %}*/
/* 						<li><a href="{{ breadcrumb['href'] }}">{{ breadcrumb['text'] }}</a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="container-fluid">*/
/* 			{% if error_warning %}*/
/* 				<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 					<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-heading">*/
/* 					<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/* 				</div>*/
/* 				<div class="panel-body">*/
/* 					<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">{{ entry_status }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="module_digitcart_admin_tab_status" class="form-control">*/
/* 									{% if module_digitcart_admin_tab_status %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 									{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 									{% endif %}*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<script>*/
/* 		$('body').on('click', '#apply', function(){*/
/* 			$.ajax({*/
/* 				type: 'post',*/
/* 				url: $('form').attr('action') + '&save',*/
/* 				data: $('form').serialize(),*/
/* 				beforeSend: function() {*/
/* 					$('form').fadeTo('slow', 0.3);*/
/* 					$('#apply').button('loading');*/
/* 					$('#dc-admin-notification').remove();*/
/* 				},*/
/* 				complete: function() {*/
/* 					$('form').fadeTo('slow', 1);*/
/* 					$('#apply').button('reset');*/
/* 				},*/
/* 				success: function(response) {*/
/* 					$('body').append('<p id="dc-admin-notification" class="alert alert-success" style="position: fixed; z-index: 999; bottom: 0px; right: 0px; left: 0px; margin: auto; display: inline-block; width: 200px; text-align: center;">{{ text_saved }}</p>');*/
/* 					$('#dc-admin-notification').delay(3000).fadeOut();*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* 	{{ footer }}*/
/* {% elseif view_type == 'js_code' %}*/
/* 	<script id="digitcart-admin-tab-script">*/
/* 		if (typeof(Storage) !== "undefined") {*/
/* 			$(document).on('click', '[data-toggle="tab"]', function(){*/
/* 				localStorage.setItem("digitcart-active-tab-" + getURLVar('route'), $(this).attr('href'));*/
/* 			});*/
/* 			if(localStorage.getItem("digitcart-active-tab-" + getURLVar('route'))){*/
/* 				$('[href="' + localStorage.getItem("digitcart-active-tab-" + getURLVar('route')) + '"]').trigger('click');*/
/* 			}*/
/* 		} else {*/
/* 			console.log('Storage not suported!');*/
/* 		}*/
/* 	</script>*/
/* {% endif %}*/
