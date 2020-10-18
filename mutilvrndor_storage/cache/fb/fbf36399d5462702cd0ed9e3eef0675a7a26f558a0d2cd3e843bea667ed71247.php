<?php

/* default/template/product/seller.twig */
class __TwigTemplate_30604d4f0193326cc7f06b1a7cafc86f3676bcea1f7376f19891821d9917a88a extends Twig_Template
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
        echo "
<div class=\"container\"> 
  <div class=\"row\">
    <div class=\"col-sm-3\">

      <h2>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>

      <div class=\"row\">
        <h2> ";
        // line 9
        echo (isset($context["seller_total_orders"]) ? $context["seller_total_orders"] : null);
        echo " <small> Sales</small></h2>
        <h2> ";
        // line 10
        echo (isset($context["sellereview"]) ? $context["sellereview"] : null);
        echo " <small> Review(s)</small></h2>
        <h3>";
        // line 11
        echo (isset($context["seller_since"]) ? $context["seller_since"] : null);
        echo "</h3>

        ";
        // line 13
        if ((isset($context["sellerating"]) ? $context["sellerating"] : null)) {
            // line 14
            echo "        <div class=\"rating col-sm-2\">
          ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 16
                echo "          ";
                if (((isset($context["sellerating"]) ? $context["sellerating"] : null) < $context["i"])) {
                    // line 17
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                } else {
                    // line 19
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
          </span>
          ";
                }
                // line 22
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
          <a href=\"\" onclick=\"\$('a[href=\\'#tab-reviews\\']').trigger('click'); return false;\">Feedback(";
            // line 24
            echo (isset($context["sellereview"]) ? $context["sellereview"] : null);
            echo ")</a>
        </div>

        ";
        }
        // line 28
        echo "      </div>
      ";
        // line 29
        echo (isset($context["seller_categories"]) ? $context["seller_categories"] : null);
        echo "
    </div>
    <div id=\"content\" class=\"col-sm-9\">";
        // line 31
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "

      ";
        // line 33
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 34
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 37
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 38
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 42
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 46
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 49
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 50
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 52
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                }
                // line 54
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 60
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 63
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 64
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 66
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                }
                // line 68
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            </select>
          </div>
        </div>
      </div>

      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-products\" data-toggle=\"tab\">";
            // line 75
            echo (isset($context["tab_products"]) ? $context["tab_products"] : null);
            echo "</a></li>
        <li><a href=\"#tab-reviews\" data-toggle=\"tab\">";
            // line 76
            echo (isset($context["tab_reviews"]) ? $context["tab_reviews"] : null);
            echo "</a></li>
        <li><a href=\"#tab-about\" data-toggle=\"tab\">";
            // line 77
            echo (isset($context["tab_about"]) ? $context["tab_about"] : null);
            echo "</a></li>
      </ul>

      <div class=\"tab-content\">

        <div class=\"tab-pane active\" id=\"tab-products\">

          <div class=\"row\">
           ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 86
                echo "            <div class=\"product-layout product-list col-xs-12\">
              <div class=\"product-thumb\">
                <div class=\"image\">
                  <a href=\"";
                // line 89
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
                    <img src=\"";
                // line 90
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a>
                </div>
                <div>
                  <div class=\"caption\">
                    <h4><a href=\"";
                // line 94
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                    <p>";
                // line 95
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                    ";
                // line 96
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 97
                    echo "                    <p class=\"price\">
                     ";
                    // line 98
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 99
                        echo "                      ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                      ";
                    } else {
                        // line 101
                        echo "                       <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                       <span class=\"price-old\">";
                        // line 102
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                      ";
                    }
                    // line 104
                    echo "
                      ";
                    // line 105
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " 
                      <span class=\"price-tax\">";
                        // line 106
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
                      ";
                }
                // line 108
                echo "
                      ";
                // line 109
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 110
                    echo "                      <div class=\"rating\"> 
                        ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 112
                        echo "                          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " 
                          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 115
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i>
                              <i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 118
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                      </div>
                    ";
                }
                // line 120
                echo " 
                  </div>
                    <div class=\"button-group\">
                      <button type=\"button\" onclick=\"addToCarts('";
                // line 123
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', 1,'";
                echo $this->getAttribute($context["product"], "seller_id", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 124
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 125
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
                    </div>
                  </div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "          </div>

            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
            // line 134
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
              <div class=\"col-sm-6 text-right\">";
            // line 135
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
            </div>

          </div>

          <div class=\"tab-pane\" id=\"tab-reviews\">

            <div id=\"review\"></div>

          </div>

          <div class=\"tab-pane\" id=\"tab-about\">
            ";
            // line 147
            if ((isset($context["aboutus"]) ? $context["aboutus"] : null)) {
                // line 148
                echo "            <div class=\"row\">
              <div class=\"col-sm-10\">";
                // line 149
                echo (isset($context["aboutus"]) ? $context["aboutus"] : null);
                echo "</div>
            </div>

            ";
            }
            // line 153
            echo "            <hr>
          </div>


        </div>




        ";
        }
        // line 163
        echo "        ";
        if ( !(isset($context["products"]) ? $context["products"] : null)) {
            // line 164
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 166
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
        </div>
        ";
        }
        // line 169
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 170
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
  </div>

  <script>

    function addToCarts(product_id, quantity,seller_id) {

      quantity = typeof(quantity) != 'undefined' ? quantity : 1;
      seller_id = typeof(seller_id) != 'undefined' ? seller_id : 0;


      \$.ajax({
       url: 'index.php?route=checkout/cart/add',
       type: 'post',
       data: 'product_id=' + product_id + '&quantity=' + quantity+ '&seller_id=' + seller_id,
       dataType: 'json',
       success: function(json) {
        \$('.alert, .text-danger').remove();

        if (json['redirect']) {
         location = json['redirect'];
       }

       if (json['success']) {
         \$('#content').parent().before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t// Need to set timeout otherwise it wont update the total
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');
\t\t\t\t\t}, 100);

\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t}
\t\t\t}
\t\t});
    }

  </script>

  <script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function(e) {
      e.preventDefault();

      \$('#review').fadeOut('slow');

      \$('#review').load(this.href);

      \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/seller/review&seller_id=";
        // line 222
        echo (isset($context["seller_id"]) ? $context["seller_id"] : null);
        echo "');


    //--></script>
    ";
        // line 226
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/seller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 226,  490 => 222,  435 => 170,  430 => 169,  422 => 166,  416 => 164,  413 => 163,  401 => 153,  394 => 149,  391 => 148,  389 => 147,  374 => 135,  370 => 134,  365 => 131,  351 => 125,  345 => 124,  337 => 123,  332 => 120,  328 => 119,  322 => 118,  317 => 115,  310 => 112,  306 => 111,  303 => 110,  301 => 109,  298 => 108,  289 => 106,  285 => 105,  282 => 104,  277 => 102,  272 => 101,  266 => 99,  264 => 98,  261 => 97,  259 => 96,  255 => 95,  249 => 94,  238 => 90,  234 => 89,  229 => 86,  225 => 85,  214 => 77,  210 => 76,  206 => 75,  198 => 69,  192 => 68,  184 => 66,  176 => 64,  173 => 63,  169 => 62,  164 => 60,  157 => 55,  151 => 54,  143 => 52,  135 => 50,  132 => 49,  128 => 48,  123 => 46,  114 => 42,  107 => 38,  103 => 37,  98 => 34,  96 => 33,  91 => 31,  86 => 29,  83 => 28,  76 => 24,  73 => 23,  67 => 22,  62 => 19,  58 => 17,  55 => 16,  51 => 15,  48 => 14,  46 => 13,  41 => 11,  37 => 10,  33 => 9,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container"> */
/*   <div class="row">*/
/*     <div class="col-sm-3">*/
/* */
/*       <h2>{{ heading_title }}</h2>*/
/* */
/*       <div class="row">*/
/*         <h2> {{ seller_total_orders }} <small> Sales</small></h2>*/
/*         <h2> {{ sellereview }} <small> Review(s)</small></h2>*/
/*         <h3>{{ seller_since }}</h3>*/
/* */
/*         {% if sellerating %}*/
/*         <div class="rating col-sm-2">*/
/*           {% for i in 1..5 %}*/
/*           {% if sellerating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>*/
/*           </span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/* */
/*           <a href="" onclick="$('a[href=\'#tab-reviews\']').trigger('click'); return false;">Feedback({{ sellereview }})</a>*/
/*         </div>*/
/* */
/*         {% endif %}*/
/*       </div>*/
/*       {{ seller_categories }}*/
/*     </div>*/
/*     <div id="content" class="col-sm-9">{{ content_top }}*/
/* */
/*       {% if products %}*/
/*       <div class="row">*/
/*         <div class="col-md-2 col-sm-6 hidden-xs">*/
/*           <div class="btn-group btn-group-sm">*/
/*             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-sm-6">*/
/*           <div class="form-group"><a href="{{ compare }}" id="compare-total" class="btn btn-link">{{ text_compare }}</a></div>*/
/*         </div>*/
/*         <div class="col-md-4 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*             <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <ul class="nav nav-tabs">*/
/*         <li class="active"><a href="#tab-products" data-toggle="tab">{{ tab_products }}</a></li>*/
/*         <li><a href="#tab-reviews" data-toggle="tab">{{ tab_reviews }}</a></li>*/
/*         <li><a href="#tab-about" data-toggle="tab">{{ tab_about }}</a></li>*/
/*       </ul>*/
/* */
/*       <div class="tab-content">*/
/* */
/*         <div class="tab-pane active" id="tab-products">*/
/* */
/*           <div class="row">*/
/*            {% for product in products %}*/
/*             <div class="product-layout product-list col-xs-12">*/
/*               <div class="product-thumb">*/
/*                 <div class="image">*/
/*                   <a href="{{ product.href }}">*/
/*                     <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a>*/
/*                 </div>*/
/*                 <div>*/
/*                   <div class="caption">*/
/*                     <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                     <p>{{ product.description }}</p>*/
/*                     {% if product.price %}*/
/*                     <p class="price">*/
/*                      {% if not product.special %}*/
/*                       {{ product.price }}*/
/*                       {% else %}*/
/*                        <span class="price-new">{{ product.special }}</span>*/
/*                        <span class="price-old">{{ product.price }}</span>*/
/*                       {% endif %}*/
/* */
/*                       {% if product.tax %} */
/*                       <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*                       {% endif %}*/
/* */
/*                       {% if product.rating %}*/
/*                       <div class="rating"> */
/*                         {% for i in 1..5 %}*/
/*                           {% if product.rating < i %} */
/*                           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% else %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>*/
/*                               <i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                     {% endif %} */
/*                   </div>*/
/*                     <div class="button-group">*/
/*                       <button type="button" onclick="addToCarts('{{ product.product_id }}', 1,'{{ product.seller_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                       <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                       <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*                     </div>*/
/*                   </div>*/
/*               </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*           </div>*/
/* */
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/* */
/*           </div>*/
/* */
/*           <div class="tab-pane" id="tab-reviews">*/
/* */
/*             <div id="review"></div>*/
/* */
/*           </div>*/
/* */
/*           <div class="tab-pane" id="tab-about">*/
/*             {% if aboutus %}*/
/*             <div class="row">*/
/*               <div class="col-sm-10">{{ aboutus }}</div>*/
/*             </div>*/
/* */
/*             {% endif %}*/
/*             <hr>*/
/*           </div>*/
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/* */
/*         {% endif %}*/
/*         {% if  not products %}*/
/*         <p>{{ text_empty }}</p>*/
/*         <div class="buttons">*/
/*           <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*         </div>*/
/*         {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/*   </div>*/
/* */
/*   <script>*/
/* */
/*     function addToCarts(product_id, quantity,seller_id) {*/
/* */
/*       quantity = typeof(quantity) != 'undefined' ? quantity : 1;*/
/*       seller_id = typeof(seller_id) != 'undefined' ? seller_id : 0;*/
/* */
/* */
/*       $.ajax({*/
/*        url: 'index.php?route=checkout/cart/add',*/
/*        type: 'post',*/
/*        data: 'product_id=' + product_id + '&quantity=' + quantity+ '&seller_id=' + seller_id,*/
/*        dataType: 'json',*/
/*        success: function(json) {*/
/*         $('.alert, .text-danger').remove();*/
/* */
/*         if (json['redirect']) {*/
/*          location = json['redirect'];*/
/*        }*/
/* */
/*        if (json['success']) {*/
/*          $('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 					// Need to set timeout otherwise it wont update the total*/
/* 					setTimeout(function () {*/
/* 						$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');*/
/* 					}, 100);*/
/* */
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 					$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 				}*/
/* 			}*/
/* 		});*/
/*     }*/
/* */
/*   </script>*/
/* */
/*   <script type="text/javascript"><!--*/
/*     $('#review').delegate('.pagination a', 'click', function(e) {*/
/*       e.preventDefault();*/
/* */
/*       $('#review').fadeOut('slow');*/
/* */
/*       $('#review').load(this.href);*/
/* */
/*       $('#review').fadeIn('slow');*/
/*     });*/
/* */
/*     $('#review').load('index.php?route=product/seller/review&seller_id={{ seller_id }}');*/
/* */
/* */
/*     //--></script>*/
/*     {{ footer }}*/
/* */
