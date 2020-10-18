<?php

/* report/seller_payment1.twig */
class __TwigTemplate_6edc607aba38be467c80e869cbcc5f34b9dbb562d80f6dbc7449197d80882720 extends Twig_Template
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
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t  
\t  <div class=\"pull-right\">
   
        <a data-toggle=\"tooltip\" title=\"Confirm\" class=\"btn btn-primary\" 
\tonclick=\"confirm('Are you sure you wants to confirm payment?') ? \$('#form').submit() : false;\"><i class=\"fa fa-save\">
\t\t</i></a>
\t\t <a href=\"";
        // line 12
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"Cancel\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t
\t\t</div>
    
\t
       
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 23
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      
        <div class=\"table-responsive\">
\t\t<form method=\"post\" enctype=\"multipart/form-data\" action=\"";
        // line 27
        echo (isset($context["insert"]) ? $context["insert"] : null);
        echo "\" id=\"form\">
          <table class=\"table table-bordered\">
\t\t  
\t\t  <tr>
\t\t<td class=\"text-left\" colspan=\"2\">
\t\tBank Details of 


\t\t
\t\t";
        // line 36
        if ((isset($context["business_name"]) ? $context["business_name"] : null)) {
            // line 37
            echo "
\t\t";
            // line 38
            echo (isset($context["business_name"]) ? $context["business_name"] : null);
            echo "

\t\t";
        } else {
            // line 41
            echo "
\t\t";
            // line 42
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "

\t\t";
        }
        // line 45
        echo "\t\t
\t\t<br/>
\t\tPayee Name: ";
        // line 47
        echo (isset($context["account_name"]) ? $context["account_name"] : null);
        echo "<br/>
\t\tBank Name: ";
        // line 48
        echo (isset($context["bank_name"]) ? $context["bank_name"] : null);
        echo "<br/>
\t\tAccount Number: ";
        // line 49
        echo (isset($context["account_number"]) ? $context["account_number"] : null);
        echo "<br/>
\t\tBranch: ";
        // line 50
        echo (isset($context["branch"]) ? $context["branch"] : null);
        echo "<br/>
\t\tIFSC CODE: ";
        // line 51
        echo (isset($context["ifsccode"]) ? $context["ifsccode"] : null);
        echo "<br/>
\t\tTelephone: ";
        // line 52
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br/>
\t\t</td>
          </tr>
          <tr>
\t\t<td class=\"text-left\">Note:</td>
\t\t<td><textarea name=\"description\" cols=\"40\" rows=\"5\"></textarea>
\t\t
\t\t";
        // line 59
        if ((isset($context["error_description"]) ? $context["error_description"] : null)) {
            // line 60
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_description"]) ? $context["error_description"] : null);
            echo "</div>
               ";
        }
        // line 62
        echo "\t\t</td>
\t\t<input type=\"hidden\" name=\"seller_id\" value=\"";
        // line 63
        echo (isset($context["seller_id"]) ? $context["seller_id"] : null);
        echo "\" />
\t\t<input type=\"hidden\" name=\"seller_transaction_ids\" value=\"";
        // line 64
        echo (isset($context["seller_transaction_ids"]) ? $context["seller_transaction_ids"] : null);
        echo "\" />
\t\t</td>
\t\t<tr>
\t\t<td class=\"text-left\">Amount to pay:</td>
\t\t<td>
\t\t<input type=\"text\" name=\"seller_amount\" value=\"";
        // line 69
        echo (isset($context["seller_amount"]) ? $context["seller_amount"] : null);
        echo "\" />
\t\t
\t\t";
        // line 71
        if ((isset($context["error_seller_amount"]) ? $context["error_seller_amount"] : null)) {
            // line 72
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_seller_amount"]) ? $context["error_seller_amount"] : null);
            echo "</div>
                ";
        }
        // line 74
        echo "\t\t</td>
\t\t
\t\t
          </tr>
\t\t  
         </table>
\t\t </form>
        </div>
       

  <script type=\"text/javascript\"><!--

\$('#description').summernote({height: 300});

//--></script>
      </div>
    </div>
  </div>
  
 </div>
";
        // line 94
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "report/seller_payment1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 94,  160 => 74,  154 => 72,  152 => 71,  147 => 69,  139 => 64,  135 => 63,  132 => 62,  126 => 60,  124 => 59,  114 => 52,  110 => 51,  106 => 50,  102 => 49,  98 => 48,  94 => 47,  90 => 45,  84 => 42,  81 => 41,  75 => 38,  72 => 37,  70 => 36,  58 => 27,  51 => 23,  37 => 12,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <h1>{{ heading_title }}</h1>*/
/* 	  */
/* 	  <div class="pull-right">*/
/*    */
/*         <a data-toggle="tooltip" title="Confirm" class="btn btn-primary" */
/* 	onclick="confirm('Are you sure you wants to confirm payment?') ? $('#form').submit() : false;"><i class="fa fa-save">*/
/* 		</i></a>*/
/* 		 <a href="{{ cancel }}" data-toggle="tooltip" title="Cancel" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 		*/
/* 		</div>*/
/*     */
/* 	*/
/*        */
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-bar-chart"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       */
/*         <div class="table-responsive">*/
/* 		<form method="post" enctype="multipart/form-data" action="{{ insert }}" id="form">*/
/*           <table class="table table-bordered">*/
/* 		  */
/* 		  <tr>*/
/* 		<td class="text-left" colspan="2">*/
/* 		Bank Details of */
/* */
/* */
/* 		*/
/* 		{% if business_name %}*/
/* */
/* 		{{ business_name }}*/
/* */
/* 		{% else %}*/
/* */
/* 		{{ name }}*/
/* */
/* 		{% endif %}*/
/* 		*/
/* 		<br/>*/
/* 		Payee Name: {{ account_name }}<br/>*/
/* 		Bank Name: {{ bank_name }}<br/>*/
/* 		Account Number: {{ account_number }}<br/>*/
/* 		Branch: {{ branch }}<br/>*/
/* 		IFSC CODE: {{ ifsccode }}<br/>*/
/* 		Telephone: {{ telephone }}<br/>*/
/* 		</td>*/
/*           </tr>*/
/*           <tr>*/
/* 		<td class="text-left">Note:</td>*/
/* 		<td><textarea name="description" cols="40" rows="5"></textarea>*/
/* 		*/
/* 		{% if error_description %}*/
/*                   <div class="text-danger">{{ error_description }}</div>*/
/*                {% endif %}*/
/* 		</td>*/
/* 		<input type="hidden" name="seller_id" value="{{ seller_id }}" />*/
/* 		<input type="hidden" name="seller_transaction_ids" value="{{ seller_transaction_ids }}" />*/
/* 		</td>*/
/* 		<tr>*/
/* 		<td class="text-left">Amount to pay:</td>*/
/* 		<td>*/
/* 		<input type="text" name="seller_amount" value="{{ seller_amount }}" />*/
/* 		*/
/* 		{% if error_seller_amount %}*/
/*                   <div class="text-danger">{{ error_seller_amount }}</div>*/
/*                 {% endif %}*/
/* 		</td>*/
/* 		*/
/* 		*/
/*           </tr>*/
/* 		  */
/*          </table>*/
/* 		 </form>*/
/*         </div>*/
/*        */
/* */
/*   <script type="text/javascript"><!--*/
/* */
/* $('#description').summernote({height: 300});*/
/* */
/* //--></script>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   */
/*  </div>*/
/* {{ footer }}*/
