<?php

/* sale/seller_list.twig */
class __TwigTemplate_95a8376e67f752a0fcd12a69d4e2b018e82d5e071e6411758e9bbed503bf4f66 extends Twig_Template
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
        echo "') ? \$('#form-seller').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>     <a onclick=\"\$('#form-seller').attr('action', '";
        echo (isset($context["approve"]) ? $context["approve"] : null);
        echo "'); \$('#form-seller').submit();\" data-toggle=\"tooltip\" title=\"Approve\" \t  class=\"btn btn-success\"><i class=\"fa fa-thumbs-o-up\"></i></a>                   
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
\t  
\t  <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 37
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</label>
                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 38
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 41
        echo (isset($context["column_email"]) ? $context["column_email"] : null);
        echo "</label>
                <input type=\"text\" name=\"filter_email\" value=\"";
        // line 42
        echo (isset($context["filter_email"]) ? $context["filter_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["column_email"]) ? $context["column_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-3\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-approved\">";
        // line 47
        echo (isset($context["column_approved"]) ? $context["column_approved"] : null);
        echo "</label>
                <select name=\"filter_approved\" id=\"input-approved\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 50
        if ((isset($context["filter_approved"]) ? $context["filter_approved"] : null)) {
            // line 51
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                  ";
        } else {
            // line 53
            echo "                  <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                  ";
        }
        // line 55
        echo "
\t\t   ";
        // line 56
        if (((isset($context["filter_approved"]) ? $context["filter_approved"] : null) == "0")) {
            // line 57
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                  ";
        } else {
            // line 59
            echo "                  <option value=\"0\">";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                  ";
        }
        // line 61
        echo "
              
                </select>
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 66
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 69
        if ((isset($context["filter_status"]) ? $context["filter_status"] : null)) {
            // line 70
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 72
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        }
        // line 74
        echo "                  ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 75
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 77
            echo "                  <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 79
        echo "                </select>
              </div>
            </div>
           
            <div class=\"col-sm-3\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 85
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 87
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "\" data-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 92
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
\t\t  </div>
        
        <form action=\"";
        // line 97
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-seller\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 103
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 104
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        } else {
            // line 106
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        }
        // line 107
        echo "</td>
                  <td class=\"text-left\">";
        // line 108
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.email")) {
            // line 109
            echo "                    <a href=\"";
            echo (isset($context["sort_email"]) ? $context["sort_email"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_email"]) ? $context["column_email"] : null);
            echo "</a>
                    ";
        } else {
            // line 111
            echo "                    <a href=\"";
            echo (isset($context["sort_email"]) ? $context["sort_email"] : null);
            echo "\">";
            echo (isset($context["column_email"]) ? $context["column_email"] : null);
            echo "</a>
                    ";
        }
        // line 112
        echo "</td>
                 
                  <td class=\"text-left\">";
        // line 114
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.status")) {
            // line 115
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                    ";
        } else {
            // line 117
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                    ";
        }
        // line 118
        echo "</td>
                  
                  <td class=\"text-left\">";
        // line 120
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.date_added")) {
            // line 121
            echo "                    <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                    ";
        } else {
            // line 123
            echo "                    <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                    ";
        }
        // line 124
        echo "</td>
\t\t\t\t\t
\t\t\t\t\t <td class=\"text-left\">Pending balance</td>
\t\t\t\t\t <td class=\"text-left\">View Transaction</td>
\t\t\t\t\t<td class=\"text-left\">Payment Status</td>

\t\t\t\t\t
                  <td class=\"text-right\">";
        // line 131
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 135
        if ((isset($context["sellers"]) ? $context["sellers"] : null)) {
            // line 136
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sellers"]) ? $context["sellers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["seller"]) {
                // line 137
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 138
                if (twig_in_filter($this->getAttribute($context["seller"], "seller_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 139
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["seller"], "seller_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 141
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["seller"], "seller_id", array());
                    echo "\" />
                    ";
                }
                // line 142
                echo "</td>
                  <td class=\"text-left\">";
                // line 143
                echo $this->getAttribute($context["seller"], "name", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 144
                echo $this->getAttribute($context["seller"], "email", array());
                echo "</td>
                 
                  <td class=\"text-left\">";
                // line 146
                echo $this->getAttribute($context["seller"], "status", array());
                echo "</td>
                 
                  <td class=\"text-left\">";
                // line 148
                echo $this->getAttribute($context["seller"], "date_added", array());
                echo "</td>
\t\t\t\t  
\t\t\t\t   <td class=\"text-left\">";
                // line 150
                echo $this->getAttribute($context["seller"], "amount", array());
                echo "</td>
\t\t\t\t     <td class=\"text-left\"><a href=\"";
                // line 151
                echo $this->getAttribute($context["seller"], "transaction", array());
                echo "\" target=\"_blank\">Click here to view </a></td>
\t\t\t\t\t 
\t\t\t\t\t 
\t\t\t\t\t 
\t\t\t\t\t <td class=\"text-left\">

\t\t\t\t\t  ";
                // line 157
                if (($this->getAttribute($context["seller"], "payment_status", array()) == 1)) {
                    // line 158
                    echo "
\t\t\t\t\t  Paid

\t\t\t\t\t  ";
                } else {
                    // line 162
                    echo "\t\t\t\t\t  UnPaid

\t\t\t\t\t   ";
                }
                // line 165
                echo "


\t\t\t</td>
\t\t\t\t\t 
                  <td class=\"text-right\">

\t\t   ";
                // line 172
                if ($this->getAttribute($context["seller"], "payment_status", array())) {
                    // line 173
                    echo "
\t\t\t <button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa fa-thumbs-o-up\"></i></button>
                   
                   
                    ";
                } else {
                    // line 178
                    echo "
\t\t     <a href=\"";
                    // line 179
                    echo $this->getAttribute($context["seller"], "approvepayment", array());
                    echo "\" data-toggle=\"tooltip\" title=\"Approve Payment\" class=\"btn btn-success\">
\t\t\t\t\t<i class=\"fa fa-thumbs-o-up\"></i></a>

                    ";
                }
                // line 183
                echo "

\t\t     ";
                // line 185
                if ($this->getAttribute($context["seller"], "approved", array())) {
                    // line 186
                    echo "
\t\t       <button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa fa-thumbs-o-up\"></i></button>
                  

\t\t
                  
                    ";
                } else {
                    // line 193
                    echo "
\t\t      <a href=\"";
                    // line 194
                    echo $this->getAttribute($context["seller"], "approve", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_approve"]) ? $context["button_approve"] : null);
                    echo "\" class=\"btn btn-success\">
\t\t\t\t\t<i class=\"fa fa-thumbs-o-up\"></i></a>

                    ";
                }
                // line 198
                echo "

                    <div class=\"btn-group\" data-toggle=\"tooltip\" title=\"";
                // line 200
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "\">
                      <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-info dropdown-toggle\"><i class=\"fa fa-lock\"></i></button>
                      <ul class=\"dropdown-menu pull-right\">
                        <li><a href=\"index.php?route=sale/seller/login&user_token=";
                // line 203
                echo (isset($context["user_token"]) ? $context["user_token"] : null);
                echo "&seller_id=";
                echo $this->getAttribute($context["seller"], "seller_id", array());
                echo "&store_id=0\" target=\"_blank\">";
                echo (isset($context["text_default"]) ? $context["text_default"] : null);
                echo "</a></li>
                        ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 205
                    echo "                        <li><a href=\"index.php?route=sale/seller/login&user_token=";
                    echo (isset($context["user_token"]) ? $context["user_token"] : null);
                    echo "&seller_id=";
                    echo $this->getAttribute($context["seller"], "seller_id", array());
                    echo "&store_id=";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</a></li>
                         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "                      </ul>
                    </div>
                    <a href=\"";
                // line 209
                echo $this->getAttribute($context["seller"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "                ";
        } else {
            // line 213
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 214
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 217
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 222
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 223
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=sale/seller&user_token=";
        // line 230
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
\t
\tvar filter_name = \$('input[name=\\'filter_name\\']').val();
\t
\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}
\t
\tvar filter_email = \$('input[name=\\'filter_email\\']').val();
\t
\tif (filter_email) {
\t\turl += '&filter_email=' + encodeURIComponent(filter_email);
\t}
\t
\t
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status); 
\t}\t
\t
\tvar filter_approved = \$('select[name=\\'filter_approved\\']').val();
\t
\tif (filter_approved != '*') {
\t\turl += '&filter_approved=' + encodeURIComponent(filter_approved);
\t}\t
\t
\t
\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}
\t
\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=sale/seller/autocomplete&user_token=";
        // line 273
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['seller_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}\t
});

\$('input[name=\\'filter_email\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=sale/seller/autocomplete&user_token=";
        // line 293
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_email=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['email'],
\t\t\t\t\t\tvalue: item['seller_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_email\\']').val(item['label']);
\t}\t
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tpickTime: false
});
//--></script></div>
";
        // line 315
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/seller_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 315,  637 => 293,  614 => 273,  568 => 230,  558 => 223,  554 => 222,  547 => 217,  541 => 214,  538 => 213,  535 => 212,  524 => 209,  520 => 207,  505 => 205,  501 => 204,  493 => 203,  487 => 200,  483 => 198,  474 => 194,  471 => 193,  462 => 186,  460 => 185,  456 => 183,  449 => 179,  446 => 178,  439 => 173,  437 => 172,  428 => 165,  423 => 162,  417 => 158,  415 => 157,  406 => 151,  402 => 150,  397 => 148,  392 => 146,  387 => 144,  383 => 143,  380 => 142,  374 => 141,  368 => 139,  366 => 138,  363 => 137,  358 => 136,  356 => 135,  349 => 131,  340 => 124,  332 => 123,  322 => 121,  320 => 120,  316 => 118,  308 => 117,  298 => 115,  296 => 114,  292 => 112,  284 => 111,  274 => 109,  272 => 108,  269 => 107,  261 => 106,  251 => 104,  249 => 103,  240 => 97,  232 => 92,  222 => 87,  217 => 85,  209 => 79,  203 => 77,  197 => 75,  194 => 74,  188 => 72,  182 => 70,  180 => 69,  174 => 66,  167 => 61,  161 => 59,  155 => 57,  153 => 56,  150 => 55,  144 => 53,  138 => 51,  136 => 50,  130 => 47,  120 => 42,  116 => 41,  108 => 38,  104 => 37,  93 => 29,  89 => 27,  81 => 23,  78 => 22,  70 => 18,  68 => 17,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ insert }}" data-toggle="tooltip" title="{{ button_insert }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-seller').submit() : false;"><i class="fa fa-trash-o"></i></button>     <a onclick="$('#form-seller').attr('action', '{{ approve }}'); $('#form-seller').submit();" data-toggle="tooltip" title="Approve" 	  class="btn btn-success"><i class="fa fa-thumbs-o-up"></i></a>                   */
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
/* 	  */
/* 	  <div class="well">*/
/*           <div class="row">*/
/*             <div class="col-sm-3">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-name">{{ column_name }}</label>*/
/*                 <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ column_name }}" id="input-name" class="form-control" />*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-email">{{ column_email }}</label>*/
/*                 <input type="text" name="filter_email" value="{{ filter_email }}" placeholder="{{ column_email }}" id="input-email" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-approved">{{ column_approved }}</label>*/
/*                 <select name="filter_approved" id="input-approved" class="form-control">*/
/*                   <option value="*"></option>*/
/*                   {% if filter_approved %}*/
/*                   <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_yes }}</option>*/
/*                   {% endif %}*/
/* */
/* 		   {% if filter_approved == '0' %}*/
/*                   <option value="0" selected="selected">{{ text_no }}</option>*/
/*                   {% else %}*/
/*                   <option value="0">{{ text_no }}</option>*/
/*                   {% endif %}*/
/* */
/*               */
/*                 </select>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-status">{{ column_status }}</label>*/
/*                 <select name="filter_status" id="input-status" class="form-control">*/
/*                   <option value="*"></option>*/
/*                   {% if filter_status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_status == '0' %}*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*            */
/*             <div class="col-sm-3">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-date-added">{{ column_date_added }}</label>*/
/*                 <div class="input-group date">*/
/*                   <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ column_date_added }}" data-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*               </div>*/
/*               <button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/* 		  </div>*/
/*         */
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-seller">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'name' %}*/
/*                     <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'c.email' %}*/
/*                     <a href="{{ sort_email }}" class="{{ order|lower }}">{{ column_email }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_email }}">{{ column_email }}</a>*/
/*                     {% endif %}</td>*/
/*                  */
/*                   <td class="text-left">{% if sort == 'c.status' %}*/
/*                     <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                     {% endif %}</td>*/
/*                   */
/*                   <td class="text-left">{% if sort == 'c.date_added' %}*/
/*                     <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_date_added }}">{{ column_date_added }}</a>*/
/*                     {% endif %}</td>*/
/* 					*/
/* 					 <td class="text-left">Pending balance</td>*/
/* 					 <td class="text-left">View Transaction</td>*/
/* 					<td class="text-left">Payment Status</td>*/
/* */
/* 					*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if sellers %}*/
/*                 {% for seller in sellers %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if seller.seller_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ seller.seller_id   }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ seller.seller_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ seller.name }}</td>*/
/*                   <td class="text-left">{{ seller.email }}</td>*/
/*                  */
/*                   <td class="text-left">{{ seller.status }}</td>*/
/*                  */
/*                   <td class="text-left">{{ seller.date_added }}</td>*/
/* 				  */
/* 				   <td class="text-left">{{ seller.amount }}</td>*/
/* 				     <td class="text-left"><a href="{{ seller.transaction }}" target="_blank">Click here to view </a></td>*/
/* 					 */
/* 					 */
/* 					 */
/* 					 <td class="text-left">*/
/* */
/* 					  {% if seller.payment_status ==1 %}*/
/* */
/* 					  Paid*/
/* */
/* 					  {% else %}*/
/* 					  UnPaid*/
/* */
/* 					   {% endif %}*/
/* */
/* */
/* */
/* 			</td>*/
/* 					 */
/*                   <td class="text-right">*/
/* */
/* 		   {% if seller.payment_status %}*/
/* */
/* 			 <button type="button" class="btn btn-success" disabled><i class="fa fa-thumbs-o-up"></i></button>*/
/*                    */
/*                    */
/*                     {% else %}*/
/* */
/* 		     <a href="{{ seller.approvepayment }}" data-toggle="tooltip" title="Approve Payment" class="btn btn-success">*/
/* 					<i class="fa fa-thumbs-o-up"></i></a>*/
/* */
/*                     {% endif %}*/
/* */
/* */
/* 		     {% if seller.approved %}*/
/* */
/* 		       <button type="button" class="btn btn-success" disabled><i class="fa fa-thumbs-o-up"></i></button>*/
/*                   */
/* */
/* 		*/
/*                   */
/*                     {% else %}*/
/* */
/* 		      <a href="{{ seller.approve }}" data-toggle="tooltip" title="{{ button_approve }}" class="btn btn-success">*/
/* 					<i class="fa fa-thumbs-o-up"></i></a>*/
/* */
/*                     {% endif %}*/
/* */
/* */
/*                     <div class="btn-group" data-toggle="tooltip" title="{{ text_login }}">*/
/*                       <button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle"><i class="fa fa-lock"></i></button>*/
/*                       <ul class="dropdown-menu pull-right">*/
/*                         <li><a href="index.php?route=sale/seller/login&user_token={{ user_token }}&seller_id={{ seller.seller_id }}&store_id=0" target="_blank">{{ text_default }}</a></li>*/
/*                         {% for store in stores %}*/
/*                         <li><a href="index.php?route=sale/seller/login&user_token={{ user_token }}&seller_id={{ seller.seller_id }}&store_id={{ store.store_id }}" target="_blank">{{ store.name }}</a></li>*/
/*                          {% endfor %}*/
/*                       </ul>*/
/*                     </div>*/
/*                     <a href="{{ seller.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = 'index.php?route=sale/seller&user_token={{ user_token }}';*/
/* 	*/
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* 	*/
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* 	*/
/* 	var filter_email = $('input[name=\'filter_email\']').val();*/
/* 	*/
/* 	if (filter_email) {*/
/* 		url += '&filter_email=' + encodeURIComponent(filter_email);*/
/* 	}*/
/* 	*/
/* 	*/
/* 	*/
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* 	*/
/* 	if (filter_status != '*') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status); */
/* 	}	*/
/* 	*/
/* 	var filter_approved = $('select[name=\'filter_approved\']').val();*/
/* 	*/
/* 	if (filter_approved != '*') {*/
/* 		url += '&filter_approved=' + encodeURIComponent(filter_approved);*/
/* 	}	*/
/* 	*/
/* 	*/
/* 		*/
/* 	var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* 	*/
/* 	if (filter_date_added) {*/
/* 		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 	}*/
/* 	*/
/* 	location = url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter_name\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=sale/seller/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',			*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['seller_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_name\']').val(item['label']);*/
/* 	}	*/
/* });*/
/* */
/* $('input[name=\'filter_email\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=sale/seller/autocomplete&user_token={{ user_token }}&filter_email=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',			*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['email'],*/
/* 						value: item['seller_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_email\']').val(item['label']);*/
/* 	}	*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	pickTime: false*/
/* });*/
/* //--></script></div>*/
/* {{ footer }} */
