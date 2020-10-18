<?php

/* catalog/commission_list.twig */
class __TwigTemplate_5a0e08144f47ee5a07b8a6834efebc29a48eee476a7194e3bb389d8f75d1f82b extends Twig_Template
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
     <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["insert"]) ? $context["insert"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_insert"]) ? $context["button_insert"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        
        <form action=\"";
        // line 33
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
             <thead>
          <tr>
            <td width=\"1\" style=\"text-align: text-center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').attr('checked', this.checked);\" /></td>
\t\t\t<td class=\"left\">";
        // line 39
        if (((isset($context["sort"]) ? $context["sort"] : null) == "commission_name")) {
            // line 40
            echo "              <a href=\"";
            echo (isset($context["sort_commission_name"]) ? $context["sort_commission_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
              ";
        } else {
            // line 42
            echo "              <a href=\"";
            echo (isset($context["sort_commission_name"]) ? $context["sort_commission_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
              ";
        }
        // line 43
        echo "</td>
            
\t\t\t<td class=\"left\">";
        // line 45
        if (((isset($context["sort"]) ? $context["sort"] : null) == "commission")) {
            echo "  
\t\t\t  <a href=\"";
            // line 46
            echo (isset($context["sort_commission"]) ? $context["sort_commission"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_commission"]) ? $context["column_commission"] : null);
            echo "</a>
              ";
        } else {
            // line 48
            echo "              <a href=\"";
            echo (isset($context["sort_commission"]) ? $context["sort_commission"] : null);
            echo "\">";
            echo (isset($context["column_commission"]) ? $context["column_commission"] : null);
            echo "</a>
              ";
        }
        // line 49
        echo "</td>
\t\t\t<td class=\"text-right\">";
        // line 50
        echo (isset($context["column_total_agents"]) ? $context["column_total_agents"] : null);
        echo "</td>
\t\t\t
\t\t\t<td class=\"text-right\">";
        // line 52
        echo (isset($context["column_product_limit"]) ? $context["column_product_limit"] : null);
        echo "</td>
\t\t\t
\t\t\t
            <td class=\"text-right\">";
        // line 55
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sort_order")) {
            // line 56
            echo "              <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
              ";
        } else {
            // line 58
            echo "              <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
            ";
        }
        // line 59
        echo "</td>
            <td class=\"text-right\">";
        // line 60
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          ";
        // line 64
        if ((isset($context["commissions"]) ? $context["commissions"] : null)) {
            // line 65
            echo "\t  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commissions"]) ? $context["commissions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commission"]) {
                // line 66
                echo "         
          <tr>
          
\t\t\t  
\t\t\t   <td class=\"text-center\">";
                // line 70
                if (twig_in_filter($this->getAttribute($context["commission"], "commission_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 71
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["commission"], "commission_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 73
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["commission"], "commission_id", array());
                    echo "\" />
                    ";
                }
                // line 74
                echo "</td>
\t\t\t<td class=\"left\">";
                // line 75
                echo $this->getAttribute($context["commission"], "commission_name", array());
                echo "</td>
\t\t\t<td class=\"left\">";
                // line 76
                echo $this->getAttribute($context["commission"], "commission", array());
                echo "</td>
\t\t\t<td class=\"text-right\">";
                // line 77
                echo $this->getAttribute($context["commission"], "total_agents", array());
                echo "</td>
\t\t\t
\t\t\t<td class=\"text-right\">";
                // line 79
                echo $this->getAttribute($context["commission"], "product_limit", array());
                echo "</td>
\t\t\t
\t\t\t<td class=\"text-right\">";
                // line 81
                echo $this->getAttribute($context["commission"], "sort_order", array());
                echo "</td>
             <td class=\"text-right\"><a href=\"";
                // line 82
                echo $this->getAttribute($context["commission"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\">
\t     <i class=\"fa fa-pencil\"></i></a></td>
                </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "          ";
        } else {
            // line 87
            echo "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 88
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
          </tr>
          ";
        }
        // line 91
        echo "        </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 96
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-text-right\">";
        // line 97
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  
 </div>
";
        // line 104
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/commission_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 104,  283 => 97,  279 => 96,  272 => 91,  266 => 88,  263 => 87,  260 => 86,  248 => 82,  244 => 81,  239 => 79,  234 => 77,  230 => 76,  226 => 75,  223 => 74,  217 => 73,  211 => 71,  209 => 70,  203 => 66,  198 => 65,  196 => 64,  189 => 60,  186 => 59,  178 => 58,  168 => 56,  166 => 55,  160 => 52,  155 => 50,  152 => 49,  144 => 48,  135 => 46,  131 => 45,  127 => 43,  119 => 42,  109 => 40,  107 => 39,  98 => 33,  91 => 29,  87 => 27,  79 => 23,  76 => 22,  68 => 18,  66 => 17,  60 => 13,  49 => 11,  45 => 10,  40 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*      <div class="pull-right"><a href="{{ insert }}" data-toggle="tooltip" title="{{ button_insert }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-review').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         */
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-review">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*              <thead>*/
/*           <tr>*/
/*             <td width="1" style="text-align: text-center;"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" /></td>*/
/* 			<td class="left">{% if sort == 'commission_name' %}*/
/*               <a href="{{ sort_commission_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*               {% else %}*/
/*               <a href="{{ sort_commission_name }}">{{ column_name }}</a>*/
/*               {% endif %}</td>*/
/*             */
/* 			<td class="left">{% if sort == 'commission' %}  */
/* 			  <a href="{{ sort_commission }}" class="{{ order|lower }}">{{ column_commission }}</a>*/
/*               {% else %}*/
/*               <a href="{{ sort_commission }}">{{ column_commission }}</a>*/
/*               {% endif %}</td>*/
/* 			<td class="text-right">{{ column_total_agents }}</td>*/
/* 			*/
/* 			<td class="text-right">{{ column_product_limit }}</td>*/
/* 			*/
/* 			*/
/*             <td class="text-right">{% if sort == 'sort_order' %}*/
/*               <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*               {% else %}*/
/*               <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*             {% endif %}</td>*/
/*             <td class="text-right">{{ column_action }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           {% if commissions %}*/
/* 	  {% for commission in commissions %}*/
/*          */
/*           <tr>*/
/*           */
/* 			  */
/* 			   <td class="text-center">{% if commission.commission_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ commission.commission_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ commission.commission_id }}" />*/
/*                     {% endif %}</td>*/
/* 			<td class="left">{{ commission.commission_name }}</td>*/
/* 			<td class="left">{{ commission.commission }}</td>*/
/* 			<td class="text-right">{{ commission.total_agents }}</td>*/
/* 			*/
/* 			<td class="text-right">{{ commission.product_limit }}</td>*/
/* 			*/
/* 			<td class="text-right">{{ commission.sort_order }}</td>*/
/*              <td class="text-right"><a href="{{ commission.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary">*/
/* 	     <i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*           {% endfor %}*/
/*           {% else %}*/
/*           <tr>*/
/*             <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*           </tr>*/
/*           {% endif %}*/
/*         </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   */
/*  </div>*/
/* {{ footer }}*/
