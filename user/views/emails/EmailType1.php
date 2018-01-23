<?php

/**
 * Created by PhpStorm.
 * User: Nk-concept
 * Date: 22/07/2017
 * Time: 19:45
 */
class EmailType1
{
    private $title, $body, $btn_href, $btn_text, $from, $footer;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getBtnHref()
    {
        return $this->btn_href;
    }

    /**
     * @param mixed $btn_href
     */
    public function setBtnHref($btn_href)
    {
        $this->btn_href = $btn_href;
    }

    /**
     * @return mixed
     */
    public function getBtnText()
    {
        return $this->btn_text;
    }

    /**
     * @param mixed $btn_text
     */
    public function setBtnText($btn_text)
    {
        $this->btn_text = $btn_text;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return mixed
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param mixed $footer
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
    }

    public function __toString()
    {
        return "<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title></title>
    <style type=\"text/css\">

        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table, td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }

    </style>
    <!--[if !mso]><!-->
    <style type=\"text/css\">
        @import url(https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300);
    </style>
    <style type=\"text/css\">
        @media only screen and (max-width: 480px) {
            @-ms-viewport {
                width: 320px;
            }
            @viewport {
                width: 320px;
            }
        }
    </style>
    <link href=\"https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300\" rel=\"stylesheet\" type=\"text/css\">
    <!--<![endif]-->
    <style type=\"text/css\">
        @media only screen and (min-width: 480px) {
            .mj-column-per-100, * [aria-labelledby=\"mj-column-per-100\"] {
                width: 100% !important;
            }
        }</style>
</head>
<body id=\"YIELD_MJML\" style=\"background: #eceff4;\">
<div class=\"mj-body\" style=\"background-color:#eceff4;\"><!--[if mso]>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"width:700px;\">
        <tr>
            <td>
    <![endif]-->
    <div style=\"margin:0 auto;max-width:700px;\">
        <table class=\"\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;font-size:0px;\" align=\"center\">
            <tbody>
            <tr>
                <td style=\"text-align:center;vertical-align:top;font-size:0;padding:20px 0;padding-top:0px;padding-bottom:24px;\"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso]>
    </td></tr></table>
    <![endif]-->
    <!--[if mso]>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"width:700px;\">
        <tr>
            <td>
    <![endif]-->
    <div style=\"margin:0 auto;max-width:700px;background:#d8e2e7;\">
        <table class=\"\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;font-size:0px;background:#d8e2e7;\"
               align=\"center\">
            <tbody>
            <tr>
                <td style=\"text-align:center;vertical-align:top;font-size:0;padding:1px;\"><!--[if mso]>
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td style=\"width:700px;\">
                    <![endif]-->
                    <div style=\"vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;\"
                         class=\"mj-column-per-100\" aria-labelledby=\"mj-column-per-100\">
                        <table style=\"background:white;\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"font-size:0;padding:30px 30px 16px;\" align=\"left\">
                                    <div class=\"mj-content\"
                                         style=\"cursor:auto;color:#000000;font-family:Proxima Nova, Arial, Arial, Helvetica, sans-serif;font-size:15px;line-height:22px;\">
                                        {$this->getTitle()}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"font-size:0;padding:0 30px 6px;\" align=\"left\">
                                    <div class=\"mj-content\"
                                         style=\"cursor:auto;color:#000000;font-family:Proxima Nova, Arial, Arial, Helvetica, sans-serif;font-size:15px;line-height:22px;\">
                                        {$this->getBody()}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"font-size:0;padding:8px 16px 10px;padding-bottom:16px;padding-right:30px;padding-left:30px;\"
                                    align=\"left\">
                                    <table cellpadding=\"0\" cellspacing=\"0\" style=\"border:none;border-radius:25px;\"
                                           align=\"left\">
                                        <tbody>
                                        <tr>
                                            <td style=\"background:#00a8ff;border-radius:25px;color:white;cursor:auto;\"
                                                align=\"center\" valign=\"middle\" bgcolor=\"#00a8ff\">
                                                <a class=\"mj-content\"
                                                   href=\"{$this->getBtnHref()}\"
                                                   style=\"display:inline-block;text-decoration:none;background:#00a8ff;border:1px solid #00a8ff;border-radius:25px;color:white;font-family:Proxima Nova, Arial, Arial, Helvetica, sans-serif;font-size:15px;font-weight:400;padding:8px 16px 10px;\"
                                                   target=\"_blank\">
                                                    {$this->getBtnText()}
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"font-size:0;padding:0 30px 30px 30px;\" align=\"left\">
                                    <div class=\"mj-content\"
                                         style=\"cursor:auto;color:#000000;font-family:Proxima Nova, Arial, Arial, Helvetica, sans-serif;font-size:15px;line-height:22px;\">
                                        — {$this->getFrom()}
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]--></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso]>
    </td></tr></table>
    <![endif]-->
    <!--[if mso]>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"width:700px;\">
        <tr>
            <td>
    <![endif]-->
    <div style=\"margin:0 auto;max-width:700px;\">
        <table class=\"\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;font-size:0px;\" align=\"center\">
            <tbody>
            <tr>
                <td style=\"text-align:center;vertical-align:top;font-size:0;padding:20px 0 0;\"><!--[if mso]>
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td style=\"width:700px;\">
                    <![endif]-->
                    <div style=\"vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;\"
                         class=\"mj-column-per-100\" aria-labelledby=\"mj-column-per-100\">
                        <table width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"font-size:0;padding:0px;\" align=\"center\">
                                    <div class=\"mj-content\"
                                         style=\"cursor:auto;color:#6b7a85;font-family:Proxima Nova, Arial, Arial, Helvetica, sans-serif;font-size:15px;line-height:22px;\">
                                        {$this->getFooter()}
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]--></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso]>
    </td></tr></table>
    <![endif]-->
    <!--[if mso]>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" style=\"width:700px;\">
        <tr>
            <td>
    <![endif]-->
    <div style=\"margin:0 auto;max-width:700px;\">
        <table class=\"\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;font-size:0px;\" align=\"center\">
            <tbody>
            <tr>
                <td style=\"text-align:center;vertical-align:top;font-size:0;padding:20px 0;padding-top:0px;padding-bottom:24px;\"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso]>
    </td></tr></table>
    <![endif]--></div>
</body>
</html>
";
    }
}