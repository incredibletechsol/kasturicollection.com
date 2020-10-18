<?php

/* catalog/sellerreview_list.twig */
class __TwigTemplate_7ffc4bd6b4533bfff9dbb731177ea37c4146d9e018821440c5cd7a8afa6ee7a6 extends Twig_Template
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
            echo "      <li><a href=\"";
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
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">
";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
            echo "<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 27
        echo "<div class=\"row\">
<div class=\"col-sm-12 col-xs-12\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
      <form action=\"";
        // line 34
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                <td class=\"text-left\">";
        // line 40
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.name")) {
            echo " <a href=\"";
            echo (isset($context["sort_product"]) ? $context["sort_product"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_product"]) ? $context["sort_product"] : null);
            echo "\">";
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</a> ";
        }
        echo "</td>
                <td class=\"text-left\">";
        // line 41
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.author")) {
            echo " <a href=\"";
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a> ";
        }
        echo "</td>
                <td class=\"text-right\">";
        // line 42
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.rating")) {
            echo " <a href=\"";
            echo (isset($context["sort_rating"]) ? $context["sort_rating"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_rating"]) ? $context["column_rating"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_rating"]) ? $context["sort_rating"] : null);
            echo "\">";
            echo (isset($context["column_rating"]) ? $context["column_rating"] : null);
            echo "</a> ";
        }
        echo "</td>
                <td class=\"text-left\">";
        // line 43
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
                <td class=\"text-left\">";
        // line 44
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.date_added")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        }
        echo "</td>
                <td class=\"text-right\">";
        // line 45
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 50
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 52
                echo "            <tr>
              <td class=\"text-center\">";
                // line 53
                if (twig_in_filter($this->getAttribute($context["review"], "review_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 54
                    echo "                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["review"], "review_id", array());
                    echo "\" checked=\"checked\" />
                ";
                } else {
                    // line 56
                    echo "                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["review"], "review_id", array());
                    echo "\" />
                ";
                }
                // line 57
                echo "</td>
              <td class=\"text-left\">";
                // line 58
                echo $this->getAttribute($context["review"], "name", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 59
                echo $this->getAttribute($context["review"], "author", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 60
                echo $this->getAttribute($context["review"], "rating", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 61
                echo $this->getAttribute($context["review"], "status", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 62
                echo $this->getAttribute($context["review"], "date_added", array());
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 63
                echo $this->getAttribute($context["review"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "            ";
        } else {
            // line 67
            echo "            <tr>
              <td class=\"text-center\" colspan=\"7\">";
            // line 68
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
            </tr>
            ";
        }
        // line 71
        echo "              </tbody>
            
          </table>
        </div>
      </form>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 77
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 78
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
      </div>
    </div>
  </div>
</div>

  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=catalog/sellerreview&user_token=";
        // line 86
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
\t
\tvar filter_product = \$('input[name=\\'filter_product\\']').val();
\t
\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}
\t
\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\t
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status); 
\t}\t\t
\t\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickTime: false
});
//--></script></div>
";
        // line 121
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/sellerreview_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 121,  294 => 86,  283 => 78,  279 => 77,  271 => 71,  265 => 68,  262 => 67,  259 => 66,  248 => 63,  244 => 62,  240 => 61,  236 => 60,  232 => 59,  228 => 58,  225 => 57,  219 => 56,  213 => 54,  211 => 53,  208 => 52,  203 => 51,  201 => 50,  193 => 45,  175 => 44,  157 => 43,  139 => 42,  121 => 41,  103 => 40,  94 => 34,  88 => 31,  82 => 27,  74 => 23,  71 => 22,  63 => 18,  61 => 17,  55 => 13,  44 => 11,  40 => 10,  35 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* <div class="page-header">*/
/*   <div class="container-fluid">*/
/*     <div class="pull-right">*/
/*       <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-review').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*     </div>*/
/*     <h1>{{ heading_title }}</h1>*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container-fluid">*/
/* {% if error_warning %}*/
/* <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*   <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* </div>*/
/* {% endif %}*/
/*     {% if success %}*/
/* <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*   <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* </div>*/
/* {% endif %}*/
/* <div class="row">*/
/* <div class="col-sm-12 col-xs-12">*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-review">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered table-hover">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                 <td class="text-left">{% if sort == 'pd.name' %} <a href="{{ sort_product }}" class="{{ order|lower }}">{{ column_product }}</a> {% else %} <a href="{{ sort_product }}">{{ column_product }}</a> {% endif %}</td>*/
/*                 <td class="text-left">{% if sort == 'r.author' %} <a href="{{ sort_author }}" class="{{ order|lower }}">{{ column_author }}</a> {% else %} <a href="{{ sort_author }}">{{ column_author }}</a> {% endif %}</td>*/
/*                 <td class="text-right">{% if sort == 'r.rating' %} <a href="{{ sort_rating }}" class="{{ order|lower }}">{{ column_rating }}</a> {% else %} <a href="{{ sort_rating }}">{{ column_rating }}</a> {% endif %}</td>*/
/*                 <td class="text-left">{% if sort == 'r.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                 <td class="text-left">{% if sort == 'r.date_added' %} <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a> {% else %} <a href="{{ sort_date_added }}">{{ column_date_added }}</a> {% endif %}</td>*/
/*                 <td class="text-right">{{ column_action }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% if reviews %}*/
/*             {% for review in reviews %}*/
/*             <tr>*/
/*               <td class="text-center">{% if review.review_id in selected %}*/
/*                 <input type="checkbox" name="selected[]" value="{{ review.review_id }}" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="checkbox" name="selected[]" value="{{ review.review_id }}" />*/
/*                 {% endif %}</td>*/
/*               <td class="text-left">{{ review.name }}</td>*/
/*               <td class="text-left">{{ review.author }}</td>*/
/*               <td class="text-right">{{ review.rating }}</td>*/
/*               <td class="text-left">{{ review.status }}</td>*/
/*               <td class="text-left">{{ review.date_added }}</td>*/
/*               <td class="text-right"><a href="{{ review.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% else %}*/
/*             <tr>*/
/*               <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*             </tr>*/
/*             {% endif %}*/
/*               </tbody>*/
/*             */
/*           </table>*/
/*         </div>*/
/*       </form>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = 'index.php?route=catalog/sellerreview&user_token={{ user_token }}';*/
/* 	*/
/* 	var filter_product = $('input[name=\'filter_product\']').val();*/
/* 	*/
/* 	if (filter_product) {*/
/* 		url += '&filter_product=' + encodeURIComponent(filter_product);*/
/* 	}*/
/* 	*/
/* 	var filter_author = $('input[name=\'filter_author\']').val();*/
/* 	*/
/* 	if (filter_author) {*/
/* 		url += '&filter_author=' + encodeURIComponent(filter_author);*/
/* 	}*/
/* 	*/
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* 	*/
/* 	if (filter_status !== '') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status); */
/* 	}		*/
/* 			*/
/* 	var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* 	*/
/* 	if (filter_date_added) {*/
/* 		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 	pickTime: false*/
/* });*/
/* //--></script></div>*/
/* {{ footer }}*/
