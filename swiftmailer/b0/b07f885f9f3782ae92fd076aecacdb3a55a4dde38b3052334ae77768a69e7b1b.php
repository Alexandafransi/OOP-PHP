<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* email.twig */
class __TwigTemplate_38a94dd8f52fb8bbb7169f3f5f811938676f8348d1137205c344c9fc0cec80d0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\"
  style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">

<head>
  <meta name=\"viewport\" content=\"width=device-width\" />
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
  <title>Actionable emails e.g. reset password</title>


  <style type=\"text/css\">
    img {
      max-width: 100%;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      height: 100%;
      line-height: 1.6em;
    }

    body {
      background-color: rgb(21, 48, 73)!important;
      color: white;
    }

    @media only screen and (max-width: 640px) {
      body {
        padding: 0 !important;
      }

      h1 {
        font-weight: 800 !important;
        margin: 20px 0 5px !important;
      }

      h2 {
        font-weight: 800 !important;
        margin: 20px 0 5px !important;
      }

      h3 {
        font-weight: 800 !important;
        margin: 20px 0 5px !important;
      }

      h4 {
        font-weight: 800 !important;
        margin: 20px 0 5px !important;
      }

      h1 {
        font-size: 22px !important;
      }

      h2 {
        font-size: 18px !important;
      }

      h3 {
        font-size: 16px !important;
      }

      .container {
        padding: 0 !important;
        width: 100% !important;
      }

      .content {
        padding: 0 !important;
      }

      .content-wrap {
        padding: 10px !important;
      }

      .invoice {
        width: 100% !important;
      }
    }
  </style>
</head>

<body itemscope itemtype=\"http://schema.org/EmailMessage\"
  style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; margin: 0;\"
  >

  <table class=\"body-wrap\"
    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; margin: 0;border-radius: 5%;\">
    <tr
      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
      <td
        style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\"
        valign=\"top\"></td>
      <td class=\"container\" width=\"600\"
        style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\"
        valign=\"top\">
        <div class=\"content\"
          style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;margin-top:20%;\">
          <table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" itemprop=\"action\" itemscope
            itemtype=\"http://schema.org/ConfirmAction\"
            style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #152029; margin: 0; border: 1px solid #e9e9e9; border-radius: 3%;\">
            <tr
              style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
              <td class=\"content-wrap\"
                style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\"
                valign=\"top\">
                <meta itemprop=\"name\" content=\"Confirm Email\"
                  style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\" />
                <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"
                  style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; \">
                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                      Please confirm your email address by clicking the link below.
                      <hr>
                    </td>
                  </tr>
                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                        Interested: ";
        // line 127
        echo twig_escape_filter($this->env, ($context["interested"] ?? null), "html", null, true);
        echo "
                    </td>
                  </tr>
                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                        Name: ";
        // line 135
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                    </td>
                  </tr>

                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                        Username: ";
        // line 144
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "
                    </td>
                  </tr>

                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                      Email: ";
        // line 153
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "
                    </td>
                  </tr>

                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                       Company: ";
        // line 162
        echo twig_escape_filter($this->env, ($context["company"] ?? null), "html", null, true);
        echo "
                    </td>
                  </tr>

                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                      Zipcode: ";
        // line 171
        echo twig_escape_filter($this->env, ($context["zipcode"] ?? null), "html", null, true);
        echo "
                    </td>
                  </tr>

                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                       Country: ";
        // line 180
        echo twig_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo "
                    </td>
                  </tr>

                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                       Subject ";
        // line 189
        echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
        echo "
                    </td>
                  </tr>

                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                      We may need to send you critical information about our service and it is important that we have an
                      accurate email address.
                    </td>
                  </tr>
                  <tr
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                    <td class=\"content-block\" itemprop=\"handler\" itemscope
                      itemtype=\"http://schema.org/HttpActionHandler\"
                      style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\"
                      valign=\"top\">
                      <a href=\"http://www.mailgun.com\" class=\"btn-primary\" itemprop=\"url\"
                        style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #348eda; margin: 0; border-color: #348eda; border-style: solid; border-width: 10px 20px;\">Confirm
                        email address</a>
                    </td>
                  </tr>
                  
                </table>
              </td>
            </tr>
          </table>
          <div class=\"footer\"
            style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;\">
            <table width=\"100%\"
              style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
              <tr
                style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                <td class=\"aligncenter content-block\"
                  style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;\"
                  align=\"center\" valign=\"top\">Follow <a href=\"http://twitter.com/mail_gun\"
                    style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;\">@Mail_Gun</a>
                  on Twitter.</td>
              </tr>
            </table>
          </div>
        </div>
      </td>
      <td
        style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\"
        valign=\"top\"></td>
    </tr>
  </table>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 189,  236 => 180,  224 => 171,  212 => 162,  200 => 153,  188 => 144,  176 => 135,  165 => 127,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "email.twig", "/var/www/html/swiftmailer/email.twig");
    }
}
