<?php

/* catalog/product_list.twig */
class __TwigTemplate_671d7dafa641848e03dbd0f16ba839b385f8912fecd97e95f3e1f2730c8f6865 extends Twig_Template
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
      
\t\t\t<!--START OVICKO MULTISELLER-->
      <div class=\"pull-right\">
\t\t\t <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo (isset($context["approve"]) ? $context["approve"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"Approve\" 
\t       class=\"btn btn-default\"><i class=\"fa fa-thumbs-o-up\"></i></button>
\t\t\t<!--END OVICKO MULTISELLER-->
\t\t\t
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 12
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 13
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 14
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 15
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
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
        // line 22
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 25
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 26
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 31
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 35
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 39
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 43
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 44
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 47
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 48
        echo (isset($context["filter_model"]) ? $context["filter_model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">";
        // line 51
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_price\" value=\"";
        // line 52
        echo (isset($context["filter_price"]) ? $context["filter_price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 55
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 56
        echo (isset($context["filter_quantity"]) ? $context["filter_quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 59
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                  ";
        // line 62
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 63
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 64
            echo " 
                <option value=\"1\">";
            // line 65
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        }
        // line 67
        echo "                  ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 68
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 70
            echo "                <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 72
        echo "              </select>
            </div>

            <!--START OVICKO MULTISELLER-->
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-seller\">";
        // line 77
        echo (isset($context["column_seller"]) ? $context["column_seller"] : null);
        echo "</label>
              <select name=\"filter_seller_name\" id=\"input-seller\" class=\"form-control\">
\t\t\t\t        <option value=\"\"></option>
                  ";
        // line 80
        if (((isset($context["filter_seller_name"]) ? $context["filter_seller_name"] : null) == "0")) {
            // line 81
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  ";
        } else {
            // line 83
            echo "                <option value=\"0\">";
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  ";
        }
        // line 85
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sellers"]) ? $context["sellers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["seller"]) {
            // line 86
            echo "                  ";
            if (($this->getAttribute($context["seller"], "seller_id", array()) == (isset($context["filter_seller_name"]) ? $context["filter_seller_name"] : null))) {
                // line 87
                echo "                <option value=\"";
                echo $this->getAttribute($context["seller"], "seller_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["seller"], "name", array());
                echo "</option>
                  ";
            } else {
                // line 89
                echo "                <option value=\"";
                echo $this->getAttribute($context["seller"], "seller_id", array());
                echo "\">";
                echo $this->getAttribute($context["seller"], "name", array());
                echo "</option>
                  ";
            }
            // line 91
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t\t    </select>
\t\t\t\t  </div>
\t\t\t\t   <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 95
        echo (isset($context["column_approve"]) ? $context["column_approve"] : null);
        echo "</label>
              <select name=\"filter_approve\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                  ";
        // line 98
        if (((isset($context["filter_approve"]) ? $context["filter_approve"] : null) == "1")) {
            // line 99
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["approve_enabled"]) ? $context["approve_enabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 101
            echo "                <option value=\"1\">";
            echo (isset($context["approve_enabled"]) ? $context["approve_enabled"] : null);
            echo "</option>
                  ";
        }
        // line 103
        echo "                  ";
        if (((isset($context["filter_approve"]) ? $context["filter_approve"] : null) == "0")) {
            // line 104
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["approve_disabled"]) ? $context["approve_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 106
            echo "                <option value=\"0\">";
            echo (isset($context["approve_disabled"]) ? $context["approve_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 108
        echo "              </select>
            </div>
\t\t\t<!--END OVICKO MULTISELLER-->
\t\t\t
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 113
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 121
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 124
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-center\">";
        // line 130
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 131
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.name")) {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 132
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.model")) {
            echo " <a href=\"";
            echo (isset($context["sort_model"]) ? $context["sort_model"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_model"]) ? $context["sort_model"] : null);
            echo "\">";
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 133
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.price")) {
            echo " <a href=\"";
            echo (isset($context["sort_price"]) ? $context["sort_price"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_price"]) ? $context["sort_price"] : null);
            echo "\">";
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 134
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.quantity")) {
            echo " <a href=\"";
            echo (isset($context["sort_quantity"]) ? $context["sort_quantity"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_quantity"]) ? $context["sort_quantity"] : null);
            echo "\">";
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 135
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.status")) {
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

                   <!--START OVICKO MULTISELLER-->
                     <td class=\"text-right\">";
        // line 138
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.seller")) {
            echo " <a href=\"";
            echo (isset($context["sort_seller"]) ? $context["sort_seller"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_seller"]) ? $context["column_seller"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_seller"]) ? $context["sort_seller"] : null);
            echo "\">";
            echo (isset($context["column_seller"]) ? $context["column_seller"] : null);
            echo "</a> ";
        }
        echo "</td>

                  \t <td class=\"text-right\">";
        // line 140
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.approve")) {
            echo " <a href=\"";
            echo (isset($context["sort_approve"]) ? $context["sort_approve"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_approve"]) ? $context["column_approve"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_approve"]) ? $context["sort_approve"] : null);
            echo "\">";
            echo (isset($context["column_approve"]) ? $context["column_approve"] : null);
            echo "</a> ";
        }
        echo "</td>
\t\t\t             <!--END OVICKO MULTISELLER-->
\t\t\t
                      <td class=\"text-right\">";
        // line 143
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 148
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 149
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 150
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 151
                if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 152
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 154
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" />
                      ";
                }
                // line 155
                echo "</td>
                    <td class=\"text-center\">";
                // line 156
                if ($this->getAttribute($context["product"], "image", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["product"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 157
                echo $this->getAttribute($context["product"], "name", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 158
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 159
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span><br/>
                      <div class=\"text-danger\">";
                    // line 160
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</div>
                      ";
                } else {
                    // line 162
                    echo "                      ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
                      ";
                }
                // line 163
                echo "</td>
                    <td class=\"text-right\">";
                // line 164
                if (($this->getAttribute($context["product"], "quantity", array()) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "</span> ";
                } elseif (($this->getAttribute($context["product"], "quantity", array()) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "</span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 165
                echo $this->getAttribute($context["product"], "status", array());
                echo "</td>
                    <!--START OVICKO MULTISELLER-->
                    <td class=\"text-left\">";
                // line 167
                echo $this->getAttribute($context["product"], "seller_name", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 168
                echo $this->getAttribute($context["product"], "approve", array());
                echo "</td>
                    <!--END OVICKO MULTISELLER-->
                    <td class=\"text-right\"><a href=\"";
                // line 170
                echo $this->getAttribute($context["product"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                  ";
        } else {
            // line 174
            echo "                  <tr> 
                  <!--START OVICKO MULTISELLER-->
                  <td class=\"text-center\" colspan=\"10\">";
            // line 176
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  <!--END OVICKO MULTISELLER-->
\t\t\t
                  </tr>
                  ";
        }
        // line 181
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 187
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 188
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';
\tvar filter_seller_name = \$('select[name=\\'filter_seller_name\\']').val();
\tif (filter_seller_name) {
\t\turl += '&filter_seller_name=' + encodeURIComponent(filter_seller_name);
\t}
\tvar filter_approve = \$('select[name=\\'filter_approve\\']').val();
\tif (filter_approve !== '') {
\t\turl += '&filter_approve=' + encodeURIComponent(filter_approve);
\t}
\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price = \$('input[name=\\'filter_price\\']').val();

\tif (filter_price) {
\t\turl += '&filter_price=' + encodeURIComponent(filter_price);
\t}

\tvar filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

\tif (filter_quantity) {
\t\turl += '&filter_quantity=' + encodeURIComponent(filter_quantity);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 236
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 248
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 268
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 285
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 285,  703 => 268,  680 => 248,  665 => 236,  614 => 188,  610 => 187,  602 => 181,  594 => 176,  590 => 174,  587 => 173,  576 => 170,  571 => 168,  567 => 167,  562 => 165,  546 => 164,  543 => 163,  537 => 162,  532 => 160,  526 => 159,  522 => 158,  518 => 157,  506 => 156,  503 => 155,  497 => 154,  491 => 152,  489 => 151,  486 => 150,  481 => 149,  479 => 148,  471 => 143,  451 => 140,  432 => 138,  412 => 135,  394 => 134,  376 => 133,  358 => 132,  340 => 131,  336 => 130,  327 => 124,  321 => 121,  310 => 113,  303 => 108,  297 => 106,  291 => 104,  288 => 103,  282 => 101,  276 => 99,  274 => 98,  268 => 95,  263 => 92,  257 => 91,  249 => 89,  241 => 87,  238 => 86,  233 => 85,  227 => 83,  221 => 81,  219 => 80,  213 => 77,  206 => 72,  200 => 70,  194 => 68,  191 => 67,  186 => 65,  183 => 64,  177 => 63,  175 => 62,  169 => 59,  161 => 56,  157 => 55,  149 => 52,  145 => 51,  137 => 48,  133 => 47,  125 => 44,  121 => 43,  114 => 39,  108 => 35,  100 => 31,  97 => 30,  89 => 26,  87 => 25,  82 => 22,  71 => 20,  67 => 19,  62 => 17,  53 => 15,  47 => 14,  41 => 13,  37 => 12,  30 => 8,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       */
/* 			<!--START OVICKO MULTISELLER-->*/
/*       <div class="pull-right">*/
/* 			 <button type="submit" form="form-product" formaction="{{ approve }}" data-toggle="tooltip" title="Approve" */
/* 	       class="btn btn-default"><i class="fa fa-thumbs-o-up"></i></button>*/
/* 			<!--END OVICKO MULTISELLER-->*/
/* 			*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-product').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="submit" form="form-product" formaction="{{ copy }}" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default"><i class="fa fa-copy"></i></button>*/
/*         <button type="button" form="form-product" formaction="{{ delete }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-product').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-product" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-model">{{ entry_model }}</label>*/
/*               <input type="text" name="filter_model" value="{{ filter_model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-price">{{ entry_price }}</label>*/
/*               <input type="text" name="filter_price" value="{{ filter_price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*               <input type="text" name="filter_quantity" value="{{ filter_quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                   {% if filter_status == '1' %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   {% else %} */
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_status == '0' %}*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*               </select>*/
/*             </div>*/
/* */
/*             <!--START OVICKO MULTISELLER-->*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-seller">{{ column_seller }}</label>*/
/*               <select name="filter_seller_name" id="input-seller" class="form-control">*/
/* 				        <option value=""></option>*/
/*                   {% if filter_seller_name == '0' %}*/
/*                 <option value="0" selected="selected">{{ text_select }}</option>*/
/*                   {% else %}*/
/*                 <option value="0">{{ text_select }}</option>*/
/*                   {% endif %}*/
/*                   {% for seller in sellers %}*/
/*                   {% if seller.seller_id == filter_seller_name %}*/
/*                 <option value="{{ seller.seller_id }}" selected="selected">{{ seller.name }}</option>*/
/*                   {% else %}*/
/*                 <option value="{{ seller.seller_id }}">{{ seller.name  }}</option>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/* 				    </select>*/
/* 				  </div>*/
/* 				   <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ column_approve }}</label>*/
/*               <select name="filter_approve" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                   {% if filter_approve == '1' %}*/
/*                 <option value="1" selected="selected">{{ approve_enabled }}</option>*/
/*                   {% else %}*/
/*                 <option value="1">{{ approve_enabled }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_approve == '0' %}*/
/*                 <option value="0" selected="selected">{{ approve_disabled }}</option>*/
/*                   {% else %}*/
/*                 <option value="0">{{ approve_disabled }}</option>*/
/*                   {% endif %}*/
/*               </select>*/
/*             </div>*/
/* 			<!--END OVICKO MULTISELLER-->*/
/* 			*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-product">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-center">{{ column_image }}</td>*/
/*                       <td class="text-left">{% if sort == 'pd.name' %} <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a> {% else %} <a href="{{ sort_name }}">{{ column_name }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'p.model' %} <a href="{{ sort_model }}" class="{{ order|lower }}">{{ column_model }}</a> {% else %} <a href="{{ sort_model }}">{{ column_model }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{% if sort == 'p.price' %} <a href="{{ sort_price }}" class="{{ order|lower }}">{{ column_price }}</a> {% else %} <a href="{{ sort_price }}">{{ column_price }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{% if sort == 'p.quantity' %} <a href="{{ sort_quantity }}" class="{{ order|lower }}">{{ column_quantity }}</a> {% else %} <a href="{{ sort_quantity }}">{{ column_quantity }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'p.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/* */
/*                    <!--START OVICKO MULTISELLER-->*/
/*                      <td class="text-right">{% if sort == 'p.seller' %} <a href="{{ sort_seller }}" class="{{ order|lower }}">{{ column_seller }}</a> {% else %} <a href="{{ sort_seller }}">{{ column_seller }}</a> {% endif %}</td>*/
/* */
/*                   	 <td class="text-right">{% if sort == 'p.approve' %} <a href="{{ sort_approve }}" class="{{ order|lower }}">{{ column_approve }}</a> {% else %} <a href="{{ sort_approve }}">{{ column_approve }}</a> {% endif %}</td>*/
/* 			             <!--END OVICKO MULTISELLER-->*/
/* 			*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% if products %}*/
/*                   {% for product in products %}*/
/*                   <tr>*/
/*                     <td class="text-center">{% if product.product_id in selected %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ product.product_id }}" checked="checked" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ product.product_id }}" />*/
/*                       {% endif %}</td>*/
/*                     <td class="text-center">{% if product.image %} <img src="{{ product.image }}" alt="{{ product.name }}" class="img-thumbnail" /> {% else %} <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span> {% endif %}</td>*/
/*                     <td class="text-left">{{ product.name }}</td>*/
/*                     <td class="text-left">{{ product.model }}</td>*/
/*                     <td class="text-right">{% if product.special %} <span style="text-decoration: line-through;">{{ product.price }}</span><br/>*/
/*                       <div class="text-danger">{{ product.special }}</div>*/
/*                       {% else %}*/
/*                       {{ product.price }}*/
/*                       {% endif %}</td>*/
/*                     <td class="text-right">{% if product.quantity <= 0 %} <span class="label label-warning">{{ product.quantity }}</span> {% elseif product.quantity <= 5 %} <span class="label label-danger">{{ product.quantity }}</span> {% else %} <span class="label label-success">{{ product.quantity }}</span> {% endif %}</td>*/
/*                     <td class="text-left">{{ product.status }}</td>*/
/*                     <!--START OVICKO MULTISELLER-->*/
/*                     <td class="text-left">{{ product.seller_name }}</td>*/
/*                     <td class="text-left">{{ product.approve }}</td>*/
/*                     <!--END OVICKO MULTISELLER-->*/
/*                     <td class="text-right"><a href="{{ product.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr> */
/*                   <!--START OVICKO MULTISELLER-->*/
/*                   <td class="text-center" colspan="10">{{ text_no_results }}</td>*/
/*                   <!--END OVICKO MULTISELLER-->*/
/* 			*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = '';*/
/* 	var filter_seller_name = $('select[name=\'filter_seller_name\']').val();*/
/* 	if (filter_seller_name) {*/
/* 		url += '&filter_seller_name=' + encodeURIComponent(filter_seller_name);*/
/* 	}*/
/* 	var filter_approve = $('select[name=\'filter_approve\']').val();*/
/* 	if (filter_approve !== '') {*/
/* 		url += '&filter_approve=' + encodeURIComponent(filter_approve);*/
/* 	}*/
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_model = $('input[name=\'filter_model\']').val();*/
/* */
/* 	if (filter_model) {*/
/* 		url += '&filter_model=' + encodeURIComponent(filter_model);*/
/* 	}*/
/* */
/* 	var filter_price = $('input[name=\'filter_price\']').val();*/
/* */
/* 	if (filter_price) {*/
/* 		url += '&filter_price=' + encodeURIComponent(filter_price);*/
/* 	}*/
/* */
/* 	var filter_quantity = $('input[name=\'filter_quantity\']').val();*/
/* */
/* 	if (filter_quantity) {*/
/* 		url += '&filter_quantity=' + encodeURIComponent(filter_quantity);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/* 	if (filter_status !== '') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* */
/* 	location = 'index.php?route=catalog/product&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* // IE and Edge fix!*/
/* $('button[form=\'form-product\']').on('click', function(e) {*/
/* 	$('#form-product').attr('action', $(this).attr('formaction'));*/
/* });*/
/*   */
/* $('input[name=\'filter_name\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_name\']').val(item['label']);*/
/* 	}*/
/* });*/
/* */
/* $('input[name=\'filter_model\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_model=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['model'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_model\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script></div>*/
/* {{ footer }} */
