<?php

/* report/seller_transactions.twig */
class __TwigTemplate_0780d3bfa4f9df1987cf759a57775ec9936a39fa1287f279273c41ae1f8dfc6a extends Twig_Template
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
      <h1>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
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
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 23
        echo (isset($context["column_seller_id"]) ? $context["column_seller_id"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 24
        echo (isset($context["column_seller_name"]) ? $context["column_seller_name"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 25
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo " Sale</td>
              <td class=\"text-right\">Total ";
        // line 26
        echo (isset($context["column_commision"]) ? $context["column_commision"] : null);
        echo "</td>
              <td class=\"text-right\">Seller Cut</td>
              <td class=\"text-left\">";
        // line 28
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>

            ";
        // line 33
        if ((isset($context["incomes"]) ? $context["incomes"] : null)) {
            // line 34
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["incomes"]) ? $context["incomes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["income"]) {
                // line 35
                echo "
            ";
                // line 36
                if (($this->getAttribute($context["income"], "amounttopay1", array()) > 0)) {
                    // line 37
                    echo "
            <tr>
              <td class=\"text-left\">";
                    // line 39
                    echo $this->getAttribute($context["income"], "seller_id", array());
                    echo "</td>
              <td class=\"text-left\">";
                    // line 40
                    echo $this->getAttribute($context["income"], "company", array());
                    echo "</td>
              <td class=\"text-right\">";
                    // line 41
                    echo $this->getAttribute($context["income"], "gross_amount", array());
                    echo "</td>
              <td class=\"text-right\">";
                    // line 42
                    echo $this->getAttribute($context["income"], "commission", array());
                    echo "</td>
              <td class=\"text-right\">";
                    // line 43
                    echo $this->getAttribute($context["income"], "seller_amount", array());
                    echo "</td>
              <td class=\"text-left\">
               <?php ?>

               <a href=\"";
                    // line 47
                    echo $this->getAttribute($context["income"], "href", array());
                    echo "\" target=\"_blank\" class=\"btn btn-primary\">";
                    echo (isset($context["button_addPayment"]) ? $context["button_addPayment"] : null);
                    echo "</a>
               <a href=\"";
                    // line 48
                    echo $this->getAttribute($context["income"], "transaction", array());
                    echo "\" target=\"_blank\" class=\"btn btn-primary\">View Transactions</a>
             </td>

           </tr>

           ";
                }
                // line 54
                echo "           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['income'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
           ";
        } else {
            // line 57
            echo "           <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 58
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
          </tr>
          ";
        }
        // line 61
        echo "        </tbody>
      </table>

    </div>
  </div>
</div>\t 
</div>
</div>
";
        // line 69
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "report/seller_transactions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 69,  163 => 61,  157 => 58,  154 => 57,  150 => 55,  144 => 54,  135 => 48,  129 => 47,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 37,  100 => 36,  97 => 35,  92 => 34,  90 => 33,  82 => 28,  77 => 26,  73 => 25,  69 => 24,  65 => 23,  56 => 17,  48 => 11,  37 => 9,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* */
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-bar-chart"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_seller_id }}</td>*/
/*               <td class="text-left">{{ column_seller_name }}</td>*/
/*               <td class="text-right">{{ column_total }} Sale</td>*/
/*               <td class="text-right">Total {{ column_commision }}</td>*/
/*               <td class="text-right">Seller Cut</td>*/
/*               <td class="text-left">{{ column_action }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/* */
/*             {% if incomes %}*/
/*             {% for income in incomes %}*/
/* */
/*             {% if income.amounttopay1 > 0  %}*/
/* */
/*             <tr>*/
/*               <td class="text-left">{{ income.seller_id }}</td>*/
/*               <td class="text-left">{{ income.company }}</td>*/
/*               <td class="text-right">{{ income.gross_amount }}</td>*/
/*               <td class="text-right">{{ income.commission }}</td>*/
/*               <td class="text-right">{{ income.seller_amount }}</td>*/
/*               <td class="text-left">*/
/*                <?php ?>*/
/* */
/*                <a href="{{ income.href }}" target="_blank" class="btn btn-primary">{{ button_addPayment }}</a>*/
/*                <a href="{{ income.transaction }}" target="_blank" class="btn btn-primary">View Transactions</a>*/
/*              </td>*/
/* */
/*            </tr>*/
/* */
/*            {% endif %}*/
/*            {% endfor %}*/
/* */
/*            {% else %}*/
/*            <tr>*/
/*             <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*           </tr>*/
/*           {% endif %}*/
/*         </tbody>*/
/*       </table>*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>	 */
/* </div>*/
/* </div>*/
/* {{ footer }}*/
