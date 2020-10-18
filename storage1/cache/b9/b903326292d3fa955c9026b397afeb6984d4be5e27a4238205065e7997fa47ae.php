<?php

/* sale/seller_form.twig */
class __TwigTemplate_fb4114f621399987177ae6f625a9eef40e6afc37010f081753a41198c02f6f2f extends Twig_Template
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
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
           
            <li><a href=\"#tab-history\" data-toggle=\"tab\">Payment History</a></li>
           
          </ul>
          <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <div class=\"row\">
              <div class=\"col-sm-2\">
                <ul class=\"nav nav-pills nav-stacked\" id=\"address\">
                  <li class=\"active\"><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                  ";
        // line 39
        $context["address_row"] = 1;
        // line 40
        echo "                  <li><a href=\"#tab-address";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" data-toggle=\"tab\">";
        echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
        echo " ";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "</a></li>
                 
                </ul>
              </div>
              <div class=\"col-sm-10\">
                <div class=\"tab-content\">
                  
\t\t  <div class=\"tab-pane active\" id=\"tab-customer\">
                    <fieldset>
                      <legend>";
        // line 49
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                     <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 51
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"username\" value=\"";
        // line 53
        echo (isset($context["username"]) ? $context["username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\" />
                          ";
        // line 54
        if ((isset($context["error_username12"]) ? $context["error_username12"] : null)) {
            // line 55
            echo "                          <div class=\"text-danger\">";
            echo (isset($context["error_username12"]) ? $context["error_username12"] : null);
            echo "</div>
                          ";
        }
        // line 56
        echo "</div>
                      </div>

                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 60
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"firstname\" value=\"";
        // line 62
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                          ";
        // line 63
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 64
            echo "                          <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                          ";
        }
        // line 65
        echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 68
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"lastname\" value=\"";
        // line 70
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                          ";
        // line 71
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 72
            echo "                          <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                          ";
        }
        // line 73
        echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 76
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"email\" value=\"";
        // line 78
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                          ";
        // line 79
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 80
            echo "                          <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                          ";
        }
        // line 81
        echo "</div>
                      </div>
                    
                      
                    
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 87
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"password\" name=\"password\" value=\"";
        // line 89
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\" />
                          ";
        // line 90
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 91
            echo "                          <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                          ";
        }
        // line 92
        echo "</div>
                      </div> 

\t\t        <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 96
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"telephone\" value=\"";
        // line 98
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                          ";
        // line 99
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 100
            echo "                          <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                          ";
        }
        // line 101
        echo "</div>
                      </div>
\t\t      

\t\t      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-tin_no\">Tin No/Vat no.</label>
                        <div class=\"col-sm-10\">
                         <input type=\"text\" name=\"tin_no\" placeholder=\"tin_no\" value=\"";
        // line 108
        echo (isset($context["tin_no"]) ? $context["tin_no"] : null);
        echo "\" class=\"form-control\"/>
                  
                        </div>
                      </div>\t  

                    <div class=\"form-group\" style=\"display:none\">
                        <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 114
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo " </label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"fax\" value=\"";
        // line 116
        echo (isset($context["fax"]) ? $context["fax"] : null);
        echo " \" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo " \" id=\"input-fax\" class=\"form-control\" />
                        </div>
                      </div>


                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 122
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"status\" id=\"input-status\" class=\"form-control\">
                            
                            
                            
                            
                            
                ";
        // line 130
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 131
            echo "                
                            
                            
                            
                            
                            <option value=\"1\" selected=\"selected\">";
            // line 136
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                            <option value=\"0\">";
            // line 137
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                            
                            
                            
                            
                            
                ";
        } else {
            // line 144
            echo "                
                            
                            
                            
                            
                            <option value=\"1\">";
            // line 149
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 150
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                            
                            
                            
                            
                            
                ";
        }
        // line 157
        echo "              
                          
                          
                          
                          
                          </select>
                        </div>
                      </div>
                      
\t\t      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-comm\">";
        // line 167
        echo (isset($context["entry_commission"]) ? $context["entry_commission"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
\t\t\t\t<select name=\"commission_id\" id=\"input-comm\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 170
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>

\t\t\t\t";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commissions"]) ? $context["commissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["commission"]) {
            // line 173
            echo "
\t\t\t\t";
            // line 174
            if (($this->getAttribute($context["commission"], "commission_id", array()) == (isset($context["commission_id"]) ? $context["commission_id"] : null))) {
                // line 175
                echo "
\t\t\t\t
\t\t\t\t<option selected value=\"";
                // line 177
                echo $this->getAttribute($context["commission"], "commission_id", array());
                echo "\">";
                echo $this->getAttribute($context["commission"], "commission_name", array());
                echo "</option>

\t\t\t\t ";
            } else {
                // line 180
                echo "
\t\t\t\t <option  value=\"";
                // line 181
                echo $this->getAttribute($context["commission"], "commission_id", array());
                echo "\">";
                echo $this->getAttribute($context["commission"], "commission_name", array());
                echo "</option>


\t\t\t\t ";
            }
            // line 185
            echo "

\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "\t\t\t\t</select>
                        </div>
                      </div>

\t\t      ";
        // line 193
        if (((isset($context["seller_id"]) ? $context["seller_id"] : null) > 0)) {
            // line 194
            echo "\t\t\t\t\t  <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-image\">";
            // line 195
            echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">       
\t\t\t\t\t\t\t\t<div id=\"option-1\" class=\"option\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 198
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" alt=\"\" id=\"thumb\" width=\"100\" height=\"100\"/><br/>
\t\t\t\t\t\t\t\t<a id=\"image\" class=\"btn btn-primary\">Upload</a>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\"  value=\"";
            // line 200
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\"  />
\t\t\t\t\t\t\t\t<div id=\"option-2\"></div>
\t\t\t\t\t\t\t\t</div>
                        </div>
                      </div>
<script type=\"text/javascript\" src=\"view/javascript/jquery/ajaxupload.js\"></script>
<script type=\"text/javascript\"><!--
\t\t\t\t\tnew AjaxUpload('#image', {
\t\t\t\t\taction: 'index.php?route=sale/seller/upload&user_token=";
            // line 208
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "&seller_id=' + ";
            echo (isset($context["seller_id"]) ? $context["seller_id"] : null);
            echo ",
\t\t\t\t\tname: 'file',
\t\t\t\t\tautoSubmit: true,
\t\t\t\t\tresponseType: 'json',
\t\t\t\t\tonSubmit: function(file, extension) {
\t\t\t\t\t\$('#image').after('<img src=\"view/image/loading.gif\" class=\"loading\" style=\"padding-left: 5px;\" />');
\t\t\t\t\t},
\t\t\t\t\tonComplete: function(file, json) {
\t\t\t\t\t\$('.error').remove();

\t\t\t\t\tif (json.success) {
\t\t\t\t\talert(json.success);\t\t\t
\t\t\t\t\t\$(\"input[name='image']\").attr('value', json.foldername+json.file);
\t\t\t\t\t\$('#thumb').attr('src','../image/'+json.foldername+json.file);
\t\t\t\t\t}

\t\t\t\t\tif (json.error) {
\t\t\t\t\t\$('#option-2').html('<span class=\"text-danger\">' + json.error + '</span>');
\t\t\t\t\t}

\t\t\t\t\t\$('.loading').remove();\t
\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t//--></script>

\t\t\t\t\t   ";
        }
        // line 234
        echo "

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 237
        echo (isset($context["entry_aboutus"]) ? $context["entry_aboutus"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<textarea name=\"aboutus\" id=\"aboutus\">";
        // line 239
        echo (isset($context["aboutus"]) ? $context["aboutus"] : null);
        echo "</textarea>


\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    </fieldset>
                  </div>


                  ";
        // line 249
        $context["address_row"] = 1;
        // line 250
        echo "                  
\t\t 
                  <div class=\"tab-pane\" id=\"tab-address";
        // line 252
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">
                    <input type=\"hidden\" name=\"address[";
        // line 253
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][address_id]\" value=\"";
        echo $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "address_id", array());
        echo "\" />
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-firstname";
        // line 255
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"address[";
        // line 257
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][firstname]\" value=\"";
        echo $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "firstname", array());
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" class=\"form-control\" />
                        ";
        // line 258
        if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array())) {
            // line 259
            echo "                        <div class=\"text-danger\">";
            echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array());
            echo "</div>
                        ";
        }
        // line 260
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-lastname";
        // line 263
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"address[";
        // line 265
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][lastname]\" value=\"";
        echo $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "lastname", array());
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" class=\"form-control\" />
                        ";
        // line 266
        if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "lastname", array())) {
            // line 267
            echo "                        <div class=\"text-danger\">";
            echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "lastname", array());
            echo "</div>
                        ";
        }
        // line 268
        echo "</div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-company";
        // line 271
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"address[";
        // line 273
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][company]\" value=\"";
        echo $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "company", array());
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-address-1";
        // line 277
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"address[";
        // line 279
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][address_1]\" value=\"";
        echo $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "address_1", array());
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" class=\"form-control\" />
                        ";
        // line 280
        if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array())) {
            // line 281
            echo "                        <div class=\"text-danger\">";
            echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array());
            echo "</div>
                        ";
        }
        // line 282
        echo "</div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-address-2";
        // line 285
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"address[";
        // line 287
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][address_2]\" value=\"";
        echo $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "address_2", array());
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-city";
        // line 291
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"address[";
        // line 293
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][city]\" value=\"";
        echo $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "city", array());
        echo "\" placeholder=\"";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" class=\"form-control\" />
                        ";
        // line 294
        if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array())) {
            // line 295
            echo "                        <div class=\"text-danger\">";
            echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array());
            echo "</div>
                        ";
        }
        // line 296
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-postcode";
        // line 299
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"address[";
        // line 301
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][postcode]\" value=\"";
        echo $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "postcode", array());
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" class=\"form-control\" />
                        ";
        // line 302
        if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array())) {
            // line 303
            echo "                        <div class=\"text-danger\">";
            echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array());
            echo "</div>
                        ";
        }
        // line 304
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-country";
        // line 307
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">";
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"address[";
        // line 309
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][country_id]\" id=\"input-country";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" onchange=\"country(this, '";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "', '";
        echo $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "zone_id", array());
        echo "');\" class=\"form-control\">
                          <option value=\"\">";
        // line 310
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                          
                          
                          
                          
                          
                  
                  
                  
                  
                  
                  
                            
                            
                            
                            
                            
                            
                            ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 329
            echo "                            ";
            if (($this->getAttribute($context["country"], "country_id", array()) == $this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "country_id", array()))) {
                // line 330
                echo "                            
                            
                            
                            
                            
                            
                            
                  
                  
                  
                  
                  
                  
                          
                          
                          
                          
                          <option value=\"";
                // line 347
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                          
                          
                          
                          
                          
                  
                  
                  
                  
                  
                  
                            
                            
                            
                            
                            
                            
                            ";
            } else {
                // line 366
                echo "                            
                            
                            
                            
                            
                            
                            
                  
                  
                  
                  
                  
                  
                          
                          
                          
                          
                          <option value=\"";
                // line 383
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                          
                          
                          
                          
                          
                  
                  
                  
                  
                  
                  
                            
                            
                            
                            
                            
                            
                            ";
            }
            // line 402
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "                          
                          
                          
                          
                          
                          
                          
                
                
                
                
                
                
                        
                        
                        
                        
                        </select>
                        ";
        // line 421
        if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array())) {
            // line 422
            echo "                        <div class=\"text-danger\">";
            echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array());
            echo "</div>
                        ";
        }
        // line 423
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-zone";
        // line 426
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\">";
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"address[";
        // line 428
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "][zone_id]\" id=\"input-zone";
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo "\" class=\"form-control\">
                        </select>
                        ";
        // line 430
        if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array())) {
            // line 431
            echo "                        <div class=\"text-danger\">";
            echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array());
            echo "</div>
                        ";
        }
        // line 432
        echo "</div>
                    </div>
                   
                    <div class=\"form-group\" style=\"display:none\">
                      <label class=\"col-sm-2 control-label\">";
        // line 436
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <label class=\"radio\">";
        // line 438
        if ((($this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : null), "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null)) ||  !(isset($context["addresses"]) ? $context["addresses"] : null))) {
            // line 439
            echo "                          <input type=\"radio\" name=\"address[";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][default]\" value=\"";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" checked=\"checked\" />
                          ";
        } else {
            // line 441
            echo "                          <input type=\"radio\" name=\"address[";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][default]\" value=\"";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" checked=\"checked\" />
                          ";
        }
        // line 442
        echo "</label>
                      </div>
                    </div>

\t\t    
                   
                    </div>
                </div>
              </div>
            </div>
\t    </div>
          
          <div class=\"tab-pane\" id=\"tab-history\">
          
            
            <div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-comment\"></label>
\t\t\t\t\t <div class=\"col-sm-10\">
              ";
        // line 460
        if (((isset($context["paypalorcheque"]) ? $context["paypalorcheque"] : null) == 1)) {
            // line 461
            echo "            <input type=\"radio\" name=\"paypalorcheque\" value=\"1\" checked=\"checked\" />
            Paypal
            <input type=\"radio\" name=\"paypalorcheque\" value=\"0\" />
            Cheque
\t    <input type=\"radio\" name=\"paypalorcheque\" value=\"2\" />
            Bank Transfer
            ";
        } elseif ((        // line 467
(isset($context["paypalorcheque"]) ? $context["paypalorcheque"] : null) == 0)) {
            // line 468
            echo "            <input type=\"radio\" name=\"paypalorcheque\" value=\"1\" />
            Paypal
            <input type=\"radio\" name=\"paypalorcheque\" value=\"0\" checked=\"checked\" />
            Cheque
\t    <input type=\"radio\" name=\"paypalorcheque\" value=\"2\" />
            Bank Transfer
            ";
        } else {
            // line 475
            echo "            <input type=\"radio\" name=\"paypalorcheque\" value=\"1\" />
            Paypal
            <input type=\"radio\" name=\"paypalorcheque\" value=\"0\" />
            Cheque
\t    <input type=\"radio\" name=\"paypalorcheque\" value=\"2\" checked=\"checked\" />
            Bank Transfer
             ";
        }
        // line 482
        echo "\t\t\t
            </div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t <div class=\"form-group required\" id=\"paypal-tr\">
            <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 491
        echo (isset($context["entry_paypalemail"]) ? $context["entry_paypalemail"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"paypal_email\" value=\"";
        // line 493
        echo (isset($context["paypal_email"]) ? $context["paypal_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_paypalemail"]) ? $context["entry_paypalemail"] : null);
        echo "\" 
\t\t\t  id=\"input-paypal\" class=\"form-control\" />
              ";
        // line 495
        if ((isset($context["error_paypalemail"]) ? $context["error_paypalemail"] : null)) {
            // line 496
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_paypalemail"]) ? $context["error_paypalemail"] : null);
            echo "</div>
               ";
        }
        // line 498
        echo "            </div>
          </div>
\t\t  
\t\t  
\t\t   <div class=\"form-group required\" id=\"bankname-tr\">
            <label class=\"col-sm-2 control-label\" for=\"input-bank\">";
        // line 503
        echo (isset($context["entry_bankname"]) ? $context["entry_bankname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"bank_name\" value=\"";
        // line 505
        echo (isset($context["bank_name"]) ? $context["bank_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bankname"]) ? $context["entry_bankname"] : null);
        echo "\" 
\t\t\t  id=\"input-bank\" class=\"form-control\" />
               ";
        // line 507
        if ((isset($context["error_bankname"]) ? $context["error_bankname"] : null)) {
            // line 508
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_bankname"]) ? $context["error_bankname"] : null);
            echo "</div>
               ";
        }
        // line 510
        echo "            </div>
          </div>
\t\t  
\t\t  
\t\t   <div class=\"form-group required\" id=\"accountnumber-tr\">
            <label class=\"col-sm-2 control-label\" for=\"input-accountnumber\">";
        // line 515
        echo (isset($context["entry_accountnumber"]) ? $context["entry_accountnumber"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"account_number\" value=\"";
        // line 517
        echo (isset($context["account_number"]) ? $context["account_number"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_accountnumber"]) ? $context["entry_accountnumber"] : null);
        echo "\" 
\t\t\t  id=\"input-accountnumber\" class=\"form-control\" />
               ";
        // line 519
        if ((isset($context["error_accountnumber"]) ? $context["error_accountnumber"] : null)) {
            // line 520
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_accountnumber"]) ? $context["error_accountnumber"] : null);
            echo "</div>
               ";
        }
        // line 522
        echo "            </div>
          </div>
\t\t  
\t\t  
\t\t   <div class=\"form-group required\" id=\"accountname-tr\">
            <label class=\"col-sm-2 control-label\" for=\"input-accountname\">";
        // line 527
        echo (isset($context["entry_accountname"]) ? $context["entry_accountname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"account_name\" value=\"";
        // line 529
        echo (isset($context["account_name"]) ? $context["account_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_accountname"]) ? $context["entry_accountname"] : null);
        echo "\" 
\t\t\t  id=\"input-accountname\" class=\"form-control\" />
               ";
        // line 531
        if ((isset($context["error_accountname"]) ? $context["error_accountname"] : null)) {
            // line 532
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_accountname"]) ? $context["error_accountname"] : null);
            echo "</div>
               ";
        }
        // line 534
        echo "            </div>
          </div>
\t\t  
\t\t  <div class=\"form-group required\" id=\"branch-tr\">
            <label class=\"col-sm-2 control-label\" for=\"input-branch\">";
        // line 538
        echo (isset($context["entry_branch"]) ? $context["entry_branch"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"branch\" value=\"";
        // line 540
        echo (isset($context["branch"]) ? $context["branch"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_branch"]) ? $context["entry_branch"] : null);
        echo "\" 
\t\t\t  id=\"input-branch\" class=\"form-control\" />
               ";
        // line 542
        if ((isset($context["error_branch"]) ? $context["error_branch"] : null)) {
            // line 543
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_branch"]) ? $context["error_branch"] : null);
            echo "</div>
               ";
        }
        // line 545
        echo "            </div>
          </div>
\t\t  
\t\t  
\t\t   <div class=\"form-group required\" id=\"ifsccode-tr\">
            <label class=\"col-sm-2 control-label\" for=\"input-ifsccode\">";
        // line 550
        echo (isset($context["entry_ifsccode"]) ? $context["entry_ifsccode"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"ifsccode\" value=\"";
        // line 552
        echo (isset($context["ifsccode"]) ? $context["ifsccode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ifsccode"]) ? $context["entry_ifsccode"] : null);
        echo "\" 
\t\t\t  id=\"input-ifsccode\" class=\"form-control\" />
               ";
        // line 554
        if ((isset($context["error_ifsccode"]) ? $context["error_ifsccode"] : null)) {
            // line 555
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_ifsccode"]) ? $context["error_ifsccode"] : null);
            echo "</div>
               ";
        }
        // line 557
        echo "            </div>
          </div>
\t\t  
\t\t  
\t\t 
\t\t 
\t\t   <div class=\"form-group required\" id=\"cheque-tr\">
            <label class=\"col-sm-2 control-label\" for=\"input-cheque\">";
        // line 564
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"cheque\" value=\"";
        // line 566
        echo (isset($context["cheque"]) ? $context["cheque"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "\" 
\t\t\t  id=\"input-cheque\" class=\"form-control\" />
               ";
        // line 568
        if ((isset($context["error_cheque"]) ? $context["error_cheque"] : null)) {
            // line 569
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_cheque"]) ? $context["error_cheque"] : null);
            echo "</div>
               ";
        }
        // line 571
        echo "            </div>
          </div>
            
          </div>
          
         

        </form>
      </div>
    </div>
  </div>

  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 

  
   <script type=\"text/javascript\"><!--

\$('#aboutus').summernote({height: 300});

//--></script>
  <script type=\"text/javascript\"><!--

\$('input[name=\\'paypalorcheque\\']').on('change', function() {
\tvar value = \$(this).val();
\tif(value == 1){
\t\t\$('#paypal-tr').show();
\t\t\$('#cheque-tr').hide();
\t\t\$('#bankname-tr').hide();
\t\t\$('#accountnumber-tr').hide();
\t\t\$('#accountname-tr').hide();
\t\t\$('#branch-tr').hide();
\t\t\$('#ifsccode-tr').hide();
\t}else if(value == 2){
\t\t\$('#paypal-tr').hide();
\t\t\$('#cheque-tr').hide();
\t\t\$('#bankname-tr').show();
\t\t\$('#accountnumber-tr').show();
\t\t\$('#accountname-tr').show();
\t\t\$('#branch-tr').show();
\t\t\$('#ifsccode-tr').show();
\t}
\telse{
\t\t\$('#paypal-tr').hide();
\t\t\$('#cheque-tr').show();
\t\t\$('#bankname-tr').hide();
\t\t\$('#accountnumber-tr').hide();
\t\t\$('#accountname-tr').hide();
\t\t\$('#branch-tr').hide();
\t\t\$('#ifsccode-tr').hide();
\t}
});

\$('input[name=\\'paypalorcheque\\']:checked').trigger('change');
//--></script>

  
  <script type=\"text/javascript\"><!--
var address_row = ";
        // line 630
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo ";

function addAddress() {
\thtml  = '<div class=\"tab-pane\" id=\"tab-address' + address_row + '\">';
\thtml += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

\thtml += '  <div class=\"form-group required\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-firstname' + address_row + '\">";
        // line 637
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 638
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group required\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-lastname' + address_row + '\">";
        // line 642
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 643
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-company' + address_row + '\">";
        // line 647
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 648
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group required\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-address-1' + address_row + '\">";
        // line 652
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 653
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-address-2' + address_row + '\">";
        // line 657
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 658
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group required\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">";
        // line 662
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 663
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group required\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-postcode' + address_row + '\">";
        // line 667
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 668
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group required\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-country' + address_row + '\">";
        // line 672
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
    html += '         <option value=\"\">";
        // line 674
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
    ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 676
            echo "    html += '         <option value=\"";
            echo $this->getAttribute($context["country"], "country_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 678
        echo "    html += '      </select></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group required\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-zone' + address_row + '\">";
        // line 682
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 683
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option></select></div>';
\thtml += '  </div>';

\t// Custom Fields
\t";
        // line 687
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 688
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 689
                echo "\t";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 690
                    echo "
\thtml += '  <div class=\"form-group custom-field custom-field";
                    // line 691
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '  \t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 692
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '  \t\t<div class=\"col-sm-10\">';
\thtml += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 694
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">';
\thtml += '  \t\t\t<option value=\"\">";
                    // line 695
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>';

\t";
                    // line 697
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 698
                        echo "\thtml += '  \t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                        echo "</option>';
\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 700
                    echo "
\thtml += '  \t\t  </select>';
\thtml += '  \t\t</div>';
\thtml += '  \t  </div>';
\t";
                }
                // line 705
                echo "
\t";
                // line 706
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 707
                    echo "\thtml += '  \t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">';
\thtml += '  \t\t<label class=\"col-sm-2 control-label\">";
                    // line 708
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '  \t\t<div class=\"col-sm-10\">';
\thtml += '  \t\t  <div>';

\t";
                    // line 712
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 713
                        echo "\thtml += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 715
                    echo "
\thtml += '\t\t  </div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
\t";
                }
                // line 720
                echo "
\t";
                // line 721
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 722
                    echo "\thtml += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 723
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div>';

\t";
                    // line 727
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 728
                        echo "\thtml += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 730
                    echo "
\thtml += '\t\t  </div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
\t";
                }
                // line 735
                echo "
\t";
                // line 736
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 737
                    echo "\thtml += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 738
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 740
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
\t";
                }
                // line 744
                echo "
\t";
                // line 745
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 746
                    echo "\thtml += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 747
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 749
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "</textarea>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
\t";
                }
                // line 753
                echo "
\t";
                // line 754
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 755
                    echo "\thtml += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 756
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field";
                    // line 758
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>';
\thtml += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 759
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
\t";
                }
                // line 763
                echo "
\t";
                // line 764
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 765
                    echo "\thtml += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 766
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 768
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo " data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
\t";
                }
                // line 772
                echo "
\t";
                // line 773
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 774
                    echo "\thtml += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 775
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 777
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
\t";
                }
                // line 781
                echo "
\t";
                // line 782
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 783
                    echo "\thtml += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 784
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 786
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
\t";
                }
                // line 790
                echo "
\t";
            }
            // line 792
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 793
        echo "
\thtml += '  <div class=\"form-group\">';
\thtml += '    <label class=\"col-sm-2 control-label\">";
        // line 795
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><label class=\"radio\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" /></label></div>';
\thtml += '  </div>';

    html += '</div>';

\t\$('#tab-general .tab-content').append(html);

\t\$('select[name=\\'customer_group_id\\']').trigger('change');

\t\$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

\t\$('#address-add').before('<li><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\">";
        // line 807
        echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
        echo " ' + address_row + '</a></li>');

\t\$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

\t\$('.date').datetimepicker({
\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\t\tpickTime: false
\t});

\t\$('.datetime').datetimepicker({
\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\t\tpickDate: true,
\t\tpickTime: true
\t});

\t\$('.time').datetimepicker({
\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\t\tpickDate: false
\t});

\t\$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}

\t\tif (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:last').after(this);
\t\t}

\t\tif (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:first').before(this);
\t\t}
\t});

\taddress_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
function country(element, index, zone_id) {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 847
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + element.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 862
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == zone_id) {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\">";
        // line 875
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

\$('select[name\$=\\'[country_id]\\']').trigger('change');
//--></script> 
 
 
 
</div>
";
        // line 892
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/seller_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1840 => 892,  1820 => 875,  1804 => 862,  1786 => 847,  1743 => 807,  1728 => 795,  1724 => 793,  1718 => 792,  1714 => 790,  1701 => 786,  1694 => 784,  1687 => 783,  1685 => 782,  1682 => 781,  1669 => 777,  1662 => 775,  1655 => 774,  1653 => 773,  1650 => 772,  1637 => 768,  1630 => 766,  1623 => 765,  1621 => 764,  1618 => 763,  1609 => 759,  1601 => 758,  1596 => 756,  1589 => 755,  1587 => 754,  1584 => 753,  1571 => 749,  1564 => 747,  1557 => 746,  1555 => 745,  1552 => 744,  1539 => 740,  1532 => 738,  1525 => 737,  1523 => 736,  1520 => 735,  1513 => 730,  1498 => 728,  1494 => 727,  1487 => 723,  1480 => 722,  1478 => 721,  1475 => 720,  1468 => 715,  1455 => 713,  1451 => 712,  1444 => 708,  1439 => 707,  1437 => 706,  1434 => 705,  1427 => 700,  1416 => 698,  1412 => 697,  1407 => 695,  1401 => 694,  1394 => 692,  1388 => 691,  1385 => 690,  1382 => 689,  1379 => 688,  1375 => 687,  1368 => 683,  1364 => 682,  1358 => 678,  1347 => 676,  1343 => 675,  1339 => 674,  1334 => 672,  1327 => 668,  1323 => 667,  1316 => 663,  1312 => 662,  1305 => 658,  1301 => 657,  1294 => 653,  1290 => 652,  1283 => 648,  1279 => 647,  1272 => 643,  1268 => 642,  1261 => 638,  1257 => 637,  1247 => 630,  1186 => 571,  1180 => 569,  1178 => 568,  1171 => 566,  1166 => 564,  1157 => 557,  1151 => 555,  1149 => 554,  1142 => 552,  1137 => 550,  1130 => 545,  1124 => 543,  1122 => 542,  1115 => 540,  1110 => 538,  1104 => 534,  1098 => 532,  1096 => 531,  1089 => 529,  1084 => 527,  1077 => 522,  1071 => 520,  1069 => 519,  1062 => 517,  1057 => 515,  1050 => 510,  1044 => 508,  1042 => 507,  1035 => 505,  1030 => 503,  1023 => 498,  1017 => 496,  1015 => 495,  1008 => 493,  1003 => 491,  992 => 482,  983 => 475,  974 => 468,  972 => 467,  964 => 461,  962 => 460,  942 => 442,  934 => 441,  926 => 439,  924 => 438,  919 => 436,  913 => 432,  907 => 431,  905 => 430,  898 => 428,  891 => 426,  886 => 423,  880 => 422,  878 => 421,  858 => 403,  852 => 402,  828 => 383,  809 => 366,  785 => 347,  766 => 330,  763 => 329,  759 => 328,  738 => 310,  728 => 309,  721 => 307,  716 => 304,  710 => 303,  708 => 302,  698 => 301,  691 => 299,  686 => 296,  680 => 295,  678 => 294,  668 => 293,  661 => 291,  648 => 287,  641 => 285,  636 => 282,  630 => 281,  628 => 280,  618 => 279,  611 => 277,  598 => 273,  591 => 271,  586 => 268,  580 => 267,  578 => 266,  568 => 265,  561 => 263,  556 => 260,  550 => 259,  548 => 258,  538 => 257,  531 => 255,  524 => 253,  520 => 252,  516 => 250,  514 => 249,  501 => 239,  496 => 237,  491 => 234,  460 => 208,  449 => 200,  444 => 198,  438 => 195,  435 => 194,  433 => 193,  427 => 189,  418 => 185,  409 => 181,  406 => 180,  398 => 177,  394 => 175,  392 => 174,  389 => 173,  385 => 172,  380 => 170,  374 => 167,  362 => 157,  352 => 150,  348 => 149,  341 => 144,  331 => 137,  327 => 136,  320 => 131,  318 => 130,  307 => 122,  296 => 116,  291 => 114,  282 => 108,  273 => 101,  267 => 100,  265 => 99,  259 => 98,  254 => 96,  248 => 92,  242 => 91,  240 => 90,  234 => 89,  229 => 87,  221 => 81,  215 => 80,  213 => 79,  207 => 78,  202 => 76,  197 => 73,  191 => 72,  189 => 71,  183 => 70,  178 => 68,  173 => 65,  167 => 64,  165 => 63,  159 => 62,  154 => 60,  148 => 56,  142 => 55,  140 => 54,  134 => 53,  129 => 51,  124 => 49,  107 => 40,  105 => 39,  101 => 38,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-customer" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{  heading_title }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-customer" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*            */
/*             <li><a href="#tab-history" data-toggle="tab">Payment History</a></li>*/
/*            */
/*           </ul>*/
/*           <div class="tab-content">*/
/*           <div class="tab-pane active" id="tab-general">*/
/*             <div class="row">*/
/*               <div class="col-sm-2">*/
/*                 <ul class="nav nav-pills nav-stacked" id="address">*/
/*                   <li class="active"><a href="#tab-customer" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                   {% set address_row = 1 %}*/
/*                   <li><a href="#tab-address{{ address_row }}" data-toggle="tab">{{ tab_address }} {{ address_row }}</a></li>*/
/*                  */
/*                 </ul>*/
/*               </div>*/
/*               <div class="col-sm-10">*/
/*                 <div class="tab-content">*/
/*                   */
/* 		  <div class="tab-pane active" id="tab-customer">*/
/*                     <fieldset>*/
/*                       <legend>{{ text_account }}</legend>*/
/*                      <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-firstname">{{ entry_username }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="username" value="{{ username }}" placeholder="{{ entry_username }}" id="input-username" class="form-control" />*/
/*                           {% if error_username12 %}*/
/*                           <div class="text-danger">{{ error_username12 }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/* */
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                           {% if error_firstname %}*/
/*                           <div class="text-danger">{{ error_firstname }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*                           {% if error_lastname %}*/
/*                           <div class="text-danger">{{ error_lastname }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                           {% if error_email %}*/
/*                           <div class="text-danger">{{ error_email }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                     */
/*                       */
/*                     */
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" autocomplete="off" />*/
/*                           {% if error_password %}*/
/*                           <div class="text-danger">{{ error_password }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div> */
/* */
/* 		        <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                           {% if error_telephone %}*/
/*                           <div class="text-danger">{{ error_telephone }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/* 		      */
/* */
/* 		      <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-tin_no">Tin No/Vat no.</label>*/
/*                         <div class="col-sm-10">*/
/*                          <input type="text" name="tin_no" placeholder="tin_no" value="{{ tin_no }}" class="form-control"/>*/
/*                   */
/*                         </div>*/
/*                       </div>	  */
/* */
/*                     <div class="form-group" style="display:none">*/
/*                         <label class="col-sm-2 control-label" for="input-fax">{{ entry_fax }} </label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="fax" value="{{ fax }} " placeholder="{{ entry_fax }} " id="input-fax" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/* */
/* */
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="status" id="input-status" class="form-control">*/
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                 {% if status %}*/
/*                 */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                             <option value="0">{{ text_disabled }}</option>*/
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                 {% else %}*/
/*                 */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             <option value="1">{{ text_enabled }}</option>*/
/*                             <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                 {% endif %}*/
/*               */
/*                           */
/*                           */
/*                           */
/*                           */
/*                           </select>*/
/*                         </div>*/
/*                       </div>*/
/*                       */
/* 		      <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-comm">{{ entry_commission }}</label>*/
/*                         <div class="col-sm-10">*/
/* 				<select name="commission_id" id="input-comm" class="form-control">*/
/* 				<option value="">{{ text_select }}</option>*/
/* */
/* 				{% for commission in commissions %}*/
/* */
/* 				{% if commission.commission_id == commission_id %}*/
/* */
/* 				*/
/* 				<option selected value="{{ commission.commission_id }}">{{ commission.commission_name }}</option>*/
/* */
/* 				 {% else %}*/
/* */
/* 				 <option  value="{{ commission.commission_id }}">{{ commission.commission_name }}</option>*/
/* */
/* */
/* 				 {% endif %}*/
/* */
/* */
/* 				*/
/* 				{% endfor %}*/
/* 				</select>*/
/*                         </div>*/
/*                       </div>*/
/* */
/* 		      {% if seller_id > 0 %}*/
/* 					  <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-image">{{ entry_image }}</label>*/
/*                         <div class="col-sm-10">       */
/* 								<div id="option-1" class="option">*/
/* 								<img src="{{ thumb }}" alt="" id="thumb" width="100" height="100"/><br/>*/
/* 								<a id="image" class="btn btn-primary">Upload</a>*/
/* 								<input type="hidden" name="image"  value="{{ image }}"  />*/
/* 								<div id="option-2"></div>*/
/* 								</div>*/
/*                         </div>*/
/*                       </div>*/
/* <script type="text/javascript" src="view/javascript/jquery/ajaxupload.js"></script>*/
/* <script type="text/javascript"><!--*/
/* 					new AjaxUpload('#image', {*/
/* 					action: 'index.php?route=sale/seller/upload&user_token={{ user_token }}&seller_id=' + {{ seller_id }},*/
/* 					name: 'file',*/
/* 					autoSubmit: true,*/
/* 					responseType: 'json',*/
/* 					onSubmit: function(file, extension) {*/
/* 					$('#image').after('<img src="view/image/loading.gif" class="loading" style="padding-left: 5px;" />');*/
/* 					},*/
/* 					onComplete: function(file, json) {*/
/* 					$('.error').remove();*/
/* */
/* 					if (json.success) {*/
/* 					alert(json.success);			*/
/* 					$("input[name='image']").attr('value', json.foldername+json.file);*/
/* 					$('#thumb').attr('src','../image/'+json.foldername+json.file);*/
/* 					}*/
/* */
/* 					if (json.error) {*/
/* 					$('#option-2').html('<span class="text-danger">' + json.error + '</span>');*/
/* 					}*/
/* */
/* 					$('.loading').remove();	*/
/* 					}*/
/* 					});*/
/* 					//--></script>*/
/* */
/* 					   {% endif %}*/
/* */
/* */
/* 					<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-status">{{ entry_aboutus }}</label>*/
/* 					<div class="col-sm-10">*/
/* 					<textarea name="aboutus" id="aboutus">{{ aboutus }}</textarea>*/
/* */
/* */
/* 					</div>*/
/* 					</div>*/
/* */
/*                     </fieldset>*/
/*                   </div>*/
/* */
/* */
/*                   {% set address_row = 1 %}*/
/*                   */
/* 		 */
/*                   <div class="tab-pane" id="tab-address{{ address_row }}">*/
/*                     <input type="hidden" name="address[{{ address_row }}][address_id]" value="{{ addresses.address_id }}" />*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-firstname{{ address_row }}">{{ entry_firstname }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="address[{{ address_row }}][firstname]" value="{{ addresses.firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname{{ address_row }}" class="form-control" />*/
/*                         {% if error_address[address_row].firstname %}*/
/*                         <div class="text-danger">{{ error_address[address_row].firstname }}</div>*/
/*                         {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-lastname{{ address_row }}">{{ entry_lastname }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="address[{{ address_row }}][lastname]" value="{{ addresses.lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname{{ address_row }}" class="form-control" />*/
/*                         {% if error_address[address_row].lastname %}*/
/*                         <div class="text-danger">{{ error_address[address_row].lastname }}</div>*/
/*                         {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-company{{ address_row }}">{{ entry_company }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="address[{{ address_row }}][company]" value="{{ addresses.company }}" placeholder="{{ entry_company }}" id="input-company{{ address_row }}" class="form-control" />*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-address-1{{ address_row }}">{{ entry_address_1 }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="address[{{ address_row }}][address_1]" value="{{ addresses.address_1 }}" placeholder="{{ entry_address_1 }}" id="input-address-1{{ address_row }}" class="form-control" />*/
/*                         {% if error_address[address_row].address_1 %}*/
/*                         <div class="text-danger">{{ error_address[address_row].address_1 }}</div>*/
/*                         {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-address-2{{ address_row }}">{{ entry_address_2 }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="address[{{ address_row }}][address_2]" value="{{ addresses.address_2 }}" placeholder="{{ entry_address_2 }}" id="input-address-2{{ address_row }}" class="form-control" />*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-city{{ address_row }}">{{ entry_city }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="address[{{ address_row }}][city]" value="{{ addresses.city }}" placeholder="{{ entry_city }}" id="input-city{{ address_row }}" class="form-control" />*/
/*                         {% if error_address[address_row].city %}*/
/*                         <div class="text-danger">{{ error_address[address_row].city }}</div>*/
/*                         {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-postcode{{ address_row }}">{{ entry_postcode }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="address[{{ address_row }}][postcode]" value="{{ addresses.postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode{{ address_row }}" class="form-control" />*/
/*                         {% if error_address[address_row].postcode %}*/
/*                         <div class="text-danger">{{ error_address[address_row].postcode }}</div>*/
/*                         {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-country{{ address_row }}">{{ entry_country }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <select name="address[{{ address_row }}][country_id]" id="input-country{{ address_row }}" onchange="country(this, '{{ address_row }}', '{{ addresses.zone_id }}');" class="form-control">*/
/*                           <option value="">{{ text_select }}</option>*/
/*                           */
/*                           */
/*                           */
/*                           */
/*                           */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             {% for country in countries %}*/
/*                             {% if country.country_id == addresses.country_id %}*/
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                           */
/*                           */
/*                           */
/*                           */
/*                           <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                           */
/*                           */
/*                           */
/*                           */
/*                           */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             {% else %}*/
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                           */
/*                           */
/*                           */
/*                           */
/*                           <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                           */
/*                           */
/*                           */
/*                           */
/*                           */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                   */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                           */
/*                           */
/*                           */
/*                           */
/*                           */
/*                           */
/*                           */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         </select>*/
/*                         {% if error_address[address_row].country %}*/
/*                         <div class="text-danger">{{ error_address[address_row].country }}</div>*/
/*                         {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-zone{{ address_row }}">{{ entry_zone }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <select name="address[{{ address_row }}][zone_id]" id="input-zone{{ address_row }}" class="form-control">*/
/*                         </select>*/
/*                         {% if error_address[address_row].zone %}*/
/*                         <div class="text-danger">{{ error_address[address_row].zone }}</div>*/
/*                         {% endif %}</div>*/
/*                     </div>*/
/*                    */
/*                     <div class="form-group" style="display:none">*/
/*                       <label class="col-sm-2 control-label">{{ entry_default }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <label class="radio">{% if addresses.address_id == address_id or not addresses %}*/
/*                           <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}" checked="checked" />*/
/*                           {% else %}*/
/*                           <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}" checked="checked" />*/
/*                           {% endif %}</label>*/
/*                       </div>*/
/*                     </div>*/
/* */
/* 		    */
/*                    */
/*                     </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* 	    </div>*/
/*           */
/*           <div class="tab-pane" id="tab-history">*/
/*           */
/*             */
/*             <div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-comment"></label>*/
/* 					 <div class="col-sm-10">*/
/*               {% if  paypalorcheque == 1 %}*/
/*             <input type="radio" name="paypalorcheque" value="1" checked="checked" />*/
/*             Paypal*/
/*             <input type="radio" name="paypalorcheque" value="0" />*/
/*             Cheque*/
/* 	    <input type="radio" name="paypalorcheque" value="2" />*/
/*             Bank Transfer*/
/*             {% elseif  paypalorcheque == 0 %}*/
/*             <input type="radio" name="paypalorcheque" value="1" />*/
/*             Paypal*/
/*             <input type="radio" name="paypalorcheque" value="0" checked="checked" />*/
/*             Cheque*/
/* 	    <input type="radio" name="paypalorcheque" value="2" />*/
/*             Bank Transfer*/
/*             {% else %}*/
/*             <input type="radio" name="paypalorcheque" value="1" />*/
/*             Paypal*/
/*             <input type="radio" name="paypalorcheque" value="0" />*/
/*             Cheque*/
/* 	    <input type="radio" name="paypalorcheque" value="2" checked="checked" />*/
/*             Bank Transfer*/
/*              {% endif %}*/
/* 			*/
/*             </div>*/
/* 			*/
/* 			*/
/* 			*/
/* 					</div>*/
/* 					*/
/* 					*/
/* 					 <div class="form-group required" id="paypal-tr">*/
/*             <label class="col-sm-2 control-label" for="input-paypal">{{ entry_paypalemail }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="paypal_email" value="{{ paypal_email }}" placeholder="{{ entry_paypalemail }}" */
/* 			  id="input-paypal" class="form-control" />*/
/*               {% if error_paypalemail %}*/
/*               <div class="text-danger">{{ error_paypalemail }}</div>*/
/*                {% endif %}*/
/*             </div>*/
/*           </div>*/
/* 		  */
/* 		  */
/* 		   <div class="form-group required" id="bankname-tr">*/
/*             <label class="col-sm-2 control-label" for="input-bank">{{ entry_bankname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="bank_name" value="{{ bank_name }}" placeholder="{{ entry_bankname }}" */
/* 			  id="input-bank" class="form-control" />*/
/*                {% if error_bankname %}*/
/*               <div class="text-danger">{{ error_bankname }}</div>*/
/*                {% endif %}*/
/*             </div>*/
/*           </div>*/
/* 		  */
/* 		  */
/* 		   <div class="form-group required" id="accountnumber-tr">*/
/*             <label class="col-sm-2 control-label" for="input-accountnumber">{{ entry_accountnumber }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="account_number" value="{{ account_number }}" placeholder="{{ entry_accountnumber }}" */
/* 			  id="input-accountnumber" class="form-control" />*/
/*                {% if error_accountnumber %}*/
/*               <div class="text-danger">{{ error_accountnumber }}</div>*/
/*                {% endif %}*/
/*             </div>*/
/*           </div>*/
/* 		  */
/* 		  */
/* 		   <div class="form-group required" id="accountname-tr">*/
/*             <label class="col-sm-2 control-label" for="input-accountname">{{ entry_accountname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="account_name" value="{{ account_name }}" placeholder="{{ entry_accountname }}" */
/* 			  id="input-accountname" class="form-control" />*/
/*                {% if error_accountname %}*/
/*               <div class="text-danger">{{ error_accountname }}</div>*/
/*                {% endif %}*/
/*             </div>*/
/*           </div>*/
/* 		  */
/* 		  <div class="form-group required" id="branch-tr">*/
/*             <label class="col-sm-2 control-label" for="input-branch">{{ entry_branch }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="branch" value="{{ branch }}" placeholder="{{ entry_branch }}" */
/* 			  id="input-branch" class="form-control" />*/
/*                {% if error_branch %}*/
/*               <div class="text-danger">{{ error_branch }}</div>*/
/*                {% endif %}*/
/*             </div>*/
/*           </div>*/
/* 		  */
/* 		  */
/* 		   <div class="form-group required" id="ifsccode-tr">*/
/*             <label class="col-sm-2 control-label" for="input-ifsccode">{{ entry_ifsccode }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="ifsccode" value="{{ ifsccode }}" placeholder="{{ entry_ifsccode }}" */
/* 			  id="input-ifsccode" class="form-control" />*/
/*                {% if error_ifsccode %}*/
/*               <div class="text-danger">{{ error_ifsccode }}</div>*/
/*                {% endif %}*/
/*             </div>*/
/*           </div>*/
/* 		  */
/* 		  */
/* 		 */
/* 		 */
/* 		   <div class="form-group required" id="cheque-tr">*/
/*             <label class="col-sm-2 control-label" for="input-cheque">{{ entry_cheque }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="cheque" value="{{ cheque }}" placeholder="{{ entry_cheque }}" */
/* 			  id="input-cheque" class="form-control" />*/
/*                {% if error_cheque %}*/
/*               <div class="text-danger">{{ error_cheque }}</div>*/
/*                {% endif %}*/
/*             </div>*/
/*           </div>*/
/*             */
/*           </div>*/
/*           */
/*          */
/* */
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> */
/* */
/*   */
/*    <script type="text/javascript"><!--*/
/* */
/* $('#aboutus').summernote({height: 300});*/
/* */
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* */
/* $('input[name=\'paypalorcheque\']').on('change', function() {*/
/* 	var value = $(this).val();*/
/* 	if(value == 1){*/
/* 		$('#paypal-tr').show();*/
/* 		$('#cheque-tr').hide();*/
/* 		$('#bankname-tr').hide();*/
/* 		$('#accountnumber-tr').hide();*/
/* 		$('#accountname-tr').hide();*/
/* 		$('#branch-tr').hide();*/
/* 		$('#ifsccode-tr').hide();*/
/* 	}else if(value == 2){*/
/* 		$('#paypal-tr').hide();*/
/* 		$('#cheque-tr').hide();*/
/* 		$('#bankname-tr').show();*/
/* 		$('#accountnumber-tr').show();*/
/* 		$('#accountname-tr').show();*/
/* 		$('#branch-tr').show();*/
/* 		$('#ifsccode-tr').show();*/
/* 	}*/
/* 	else{*/
/* 		$('#paypal-tr').hide();*/
/* 		$('#cheque-tr').show();*/
/* 		$('#bankname-tr').hide();*/
/* 		$('#accountnumber-tr').hide();*/
/* 		$('#accountname-tr').hide();*/
/* 		$('#branch-tr').hide();*/
/* 		$('#ifsccode-tr').hide();*/
/* 	}*/
/* });*/
/* */
/* $('input[name=\'paypalorcheque\']:checked').trigger('change');*/
/* //--></script>*/
/* */
/*   */
/*   <script type="text/javascript"><!--*/
/* var address_row = {{ address_row }};*/
/* */
/* function addAddress() {*/
/* 	html  = '<div class="tab-pane" id="tab-address' + address_row + '">';*/
/* 	html += '  <input type="hidden" name="address[' + address_row + '][address_id]" value="" />';*/
/* */
/* 	html += '  <div class="form-group required">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-firstname' + address_row + '">{{ entry_firstname }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][firstname]" value="" placeholder="{{ entry_firstname }}" id="input-firstname' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group required">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-lastname' + address_row + '">{{ entry_lastname }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][lastname]" value="" placeholder="{{ entry_lastname }}" id="input-lastname' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-company' + address_row + '">{{ entry_company }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][company]" value="" placeholder="{{ entry_company }}" id="input-company' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group required">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-address-1' + address_row + '">{{ entry_address_1 }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_1]" value="" placeholder="{{ entry_address_1 }}" id="input-address-1' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-address-2' + address_row + '">{{ entry_address_2 }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_2]" value="" placeholder="{{ entry_address_2 }}" id="input-address-2' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group required">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-city' + address_row + '">{{ entry_city }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][city]" value="" placeholder="{{ entry_city }}" id="input-city' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group required">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-postcode' + address_row + '">{{ entry_postcode }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][postcode]" value="" placeholder="{{ entry_postcode }}" id="input-postcode' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group required">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-country' + address_row + '">{{ entry_country }}</label>';*/
/* 	html += '    <div class="col-sm-10"><select name="address[' + address_row + '][country_id]" id="input-country' + address_row + '" onchange="country(this, \'' + address_row + '\', \'0\');" class="form-control">';*/
/*     html += '         <option value="">{{ text_select }}</option>';*/
/*     {% for country in countries %}*/
/*     html += '         <option value="{{ country.country_id }}">{{ country.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/*     html += '      </select></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group required">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-zone' + address_row + '">{{ entry_zone }}</label>';*/
/* 	html += '    <div class="col-sm-10"><select name="address[' + address_row + '][zone_id]" id="input-zone' + address_row + '" class="form-control"><option value="">{{ text_none }}</option></select></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	// Custom Fields*/
/* 	{% for custom_field in custom_fields %}*/
/* 	{% if custom_field.location == 'address' %}*/
/* 	{% if custom_field.type == 'select' %}*/
/* */
/* 	html += '  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '  		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '  		<div class="col-sm-10">';*/
/* 	html += '  		  <select name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">';*/
/* 	html += '  			<option value="">{{ text_select }}</option>';*/
/* */
/* 	{% for custom_field_value in custom_field.custom_field_value %}*/
/* 	html += '  			<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field.name|e('js') }}</option>';*/
/* 	{% endfor %}*/
/* */
/* 	html += '  		  </select>';*/
/* 	html += '  		</div>';*/
/* 	html += '  	  </div>';*/
/* 	{% endif %}*/
/* */
/* 	{% if custom_field.type == 'radio' %}*/
/* 	html += '  	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}">';*/
/* 	html += '  		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '  		<div class="col-sm-10">';*/
/* 	html += '  		  <div>';*/
/* */
/* 	{% for custom_field_value in custom_field.custom_field_value %}*/
/* 	html += '  			<div class="radio"><label><input type="radio" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/* 	{% endfor %}*/
/* */
/* 	html += '		  </div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/* 	{% endif %}*/
/* */
/* 	{% if custom_field.type == 'checkbox' %}*/
/* 	html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <div>';*/
/* */
/* 	{% for custom_field_value in custom_field.custom_field_value %}*/
/* 	html += '			<div class="checkbox"><label><input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/* 	{% endfor %}*/
/* */
/* 	html += '		  </div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/* 	{% endif %}*/
/* */
/* 	{% if custom_field.type == 'text' %}*/
/* 	html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field_value.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" />';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/* 	{% endif %}*/
/* */
/* 	{% if custom_field.type == 'textarea' %}*/
/* 	html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <textarea name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field_value.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value|e('js') }}</textarea>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/* 	{% endif %}*/
/* */
/* 	{% if custom_field.type == 'file' %}*/
/* 	html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <button type="button" id="button-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>';*/
/* 	html += '		  <input type="hidden" name="address[' + address_row + '][{{ custom_field.custom_field_id }}]" value="" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" />';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/* 	{% endif %}*/
/* */
/* 	{% if custom_field.type == 'date' %}*/
/* 	html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <div class="input-group date"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }} data-date-format="YYYY-MM-DD" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/* 	{% endif %}*/
/* */
/* 	{% if custom_field.type == 'time' %}*/
/* 	html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <div class="input-group time"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/* 	{% endif %}*/
/* */
/* 	{% if custom_field.type == 'datetime' %}*/
/* 	html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <div class="input-group datetime"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="YYYY-MM-DD HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/* 	{% endif %}*/
/* */
/* 	{% endif %}*/
/* 	{% endfor %}*/
/* */
/* 	html += '  <div class="form-group">';*/
/* 	html += '    <label class="col-sm-2 control-label">{{ entry_default }}</label>';*/
/* 	html += '    <div class="col-sm-10"><label class="radio"><input type="radio" name="address[' + address_row + '][default]" value="1" /></label></div>';*/
/* 	html += '  </div>';*/
/* */
/*     html += '</div>';*/
/* */
/* 	$('#tab-general .tab-content').append(html);*/
/* */
/* 	$('select[name=\'customer_group_id\']').trigger('change');*/
/* */
/* 	$('select[name=\'address[' + address_row + '][country_id]\']').trigger('change');*/
/* */
/* 	$('#address-add').before('<li><a href="#tab-address' + address_row + '" data-toggle="tab">{{ tab_address }} ' + address_row + '</a></li>');*/
/* */
/* 	$('#address a[href=\'#tab-address' + address_row + '\']').tab('show');*/
/* */
/* 	$('.date').datetimepicker({*/
/* 		language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 		pickTime: false*/
/* 	});*/
/* */
/* 	$('.datetime').datetimepicker({*/
/* 		language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 		pickDate: true,*/
/* 		pickTime: true*/
/* 	});*/
/* */
/* 	$('.time').datetimepicker({*/
/* 		language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 		pickDate: false*/
/* 	});*/
/* */
/* 	$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {*/
/* 		if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 		}*/
/* */
/* 		if ($(this).attr('data-sort') > $('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group:last').after(this);*/
/* 		}*/
/* */
/* 		if ($(this).attr('data-sort') < -$('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group:first').before(this);*/
/* 		}*/
/* 	});*/
/* */
/* 	address_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* function country(element, index, zone_id) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + element.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'address[' + index + '][country_id]\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'address[' + index + '][country_id]\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('input[name=\'address[' + index + '][postcode]\']').parent().parent().addClass('required');*/
/* 			} else {*/
/* 				$('input[name=\'address[' + index + '][postcode]\']').parent().parent().removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == zone_id) {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'address[' + index + '][zone_id]\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* $('select[name$=\'[country_id]\']').trigger('change');*/
/* //--></script> */
/*  */
/*  */
/*  */
/* </div>*/
/* {{ footer }} */
