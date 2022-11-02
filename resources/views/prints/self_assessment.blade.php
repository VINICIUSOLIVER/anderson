@include("prints.pdf")

@php
    $charTaxRefence = str_split($taxRefence);
    $charNationalInsuranceNumber = str_split($nationalInsuranceNumber);
    
    $getValueByIndex = function ($array, $index, $default = "") {
        if (isset($array[$index])) {
            return $array[$index];
        }

        return $default;
    };

@endphp

<style>
    table {
        font-size: 15pt;
    }

    .table-header {
        border: none;
    }

    .table-header tr:first-child td {
        padding-bottom: 10px;
    }

    .table-header td {
        width: 50%;
    }

    .table-header td {
        padding-left: 10px;
    }

    .check-content {
        display: -webkit-box;
        align-items: center;
        display: -webkit-flex;
        display: flex;
        align-items: center;
    }

    .check {
        width: 30px;
        height: 30px;
        border: solid 1px #000;
    }

    .input {
        width: 100%;
        height: 40px;
        padding: 10px;
        border: solid 1px #208f8b;
        font-size: 16pt;
        box-sizing: border-box;
        background-color: #fff;
    }

    .space-between {
        display: -webkit-box;
        align-items: center;
        display: -webkit-flex;
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    .title {
        color: #208f8b;
        font-size: 18pt;
        font-weight: bold;
    }

    .line {
        width: 100%;
        height: 3px;
        background-color: #208f8b;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .icon {
        width: 40px;
        height: 40px;
        display: block;
        position: absolute;
        background-color: #208f8b;
        border-radius: 50%;
        margin-right: 15px;
        color: #fff;
        font-size: 24pt;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        text-align: center;
    }

    .about-you, .penalty, .penalties{
        width: 100%; 
        background-color: rgba(32, 143, 139, 0.2); 
        border: solid 1px #208f8b; 
        padding: 20px; 
        box-sizing: border-box; 
        margin-top: 10px;
        font-size: 13pt !important;
    }

    .point {
        width: 5px;
        height: 5px;
        position: absolute;
        background-color: #000;
        border-radius: 50%;
        padding: 2px 2px;
        display: block;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
</style>

<table class="table-header">
    <tr>
        <td>
            <img src="" />
        </td>
        <td style="vertical-align: bottom">
            <p>
                Self Assessment: Appeal against penalties <br/>
                & Customs for late filing and late payment
            </p>
        </td>
    </tr>
</table>
<br /><br />
<table style="width: 100%;">
    <tr>
        <td class="title">
            About this form
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Please read the SA370 Notes before you fill in this form to appeal against a penalty for sending your tax return late <br/>
                or paying your tax late, or both. Using this form will help us identify your appeal and deal with it quicker. <br/>
                Send this form to Self Assessment, HM Revenue and Customs, BX9 1AS within 30 days of the date shown on the front <br/>
                of your penalty notice. Late appeals may be accepted if you explain the reason for the extra delay. <br/>
                If you haven't already done so, send us your tax return and pay any tax you owe now, to avoid further penalties. <br/>
                To find out more about Self Assessment appeals, go to www.gov.uk/tax-appeals/penalty <br/>
                Please use black or blue ink and capital letters to fill in the boxes. <br/>
            </p>
        </td>
    </tr>
</table>
<div class="line"></div>
<table style="width: 100%;">
    <tr>
        <td class="title">
            About you
        </td>
    </tr>
    <tr>
        <td>
            <p style="margin-top: 5px;">
                <div class="space-between" style="justify-content: start;">
                    <div style="position: relative; width: 50px; margin-right: 25px">
                        <span class="icon">
                            <span style="position: absolute; top: 5px; left: 0; bottom: 0; right: 0; margin: auto">
                                i
                            </span>
                        </span>
                    </div>
                    <div>
                        Enter your details unless you're making this appeal on behalf of someone else. Then you should enter their details.
                    </div>
                </div>
            </p>
        </td>
    </tr>
</table>
<div class="about-you">
    <div style="width: 50%; float: left">
        <table style="width: 100%;">
            <tr>
                <td>
                    <p style="margin-bottom: 10px;">
                        <b>Tax reference</b> <br/>
                        Enter the peiereie shown on your penalty notice
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 0) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 1) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 2) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 3) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 4) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 5) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 6) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 7) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 8) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 9) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 10) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 11) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charTaxRefence, 12) }}
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin-bottom: 10px; margin-top: 40px">
                        <b>National Insurance number if known</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charNationalInsuranceNumber, 0) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 7px">
                            {{ $getValueByIndex($charNationalInsuranceNumber, 1) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charNationalInsuranceNumber, 2) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 7px">
                            {{ $getValueByIndex($charNationalInsuranceNumber, 3) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charNationalInsuranceNumber, 4) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 7px">
                            {{ $getValueByIndex($charNationalInsuranceNumber, 5) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charNationalInsuranceNumber, 6) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 7px">
                            {{ $getValueByIndex($charNationalInsuranceNumber, 7) }}
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px">
                            {{ $getValueByIndex($charNationalInsuranceNumber, 8) }}
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="width: 50%; float: right">
        <table style="width: 100%;">
            <tr>
                <td>
                    <p style="margin-bottom: 10px;">
                        <b>Full name</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input">
                        {{ $fullName }}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin-bottom: 10px; margin-top: 40px">
                        <b>Address</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input" style="border-bottom: none; overflow: hidden">
                        {{ $addressLineOne ?? "" }}
                    </div>
                    <div class="input" style="border-bottom: none; overflow: hidden">
                        {{ $addressLineTwo ?? "" }}
                    </div>
                    <div class="input" style="border-bottom: none; overflow: hidden">
                        {{ $addressLineThree ?? "" }}
                    </div>
                    <div style="width: 100%;">
                        <div class="input" style="width: 50%; float: left; overflow: hidden; border-right: none">
                            {{ $addressLineFour ?? "" }}
                        </div>
                        <div class="input" style="width: 50%; text-align: right; overflow: hidden; border-left: none">
                            <span style="color: #ccc">Postcode</span> &nbsp; {{ $postcode }}
                        </div>
                        <div style="clear: both"></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="clear: both"></div>
</div>
<div class="line"></div>
<table style="width: 100%;">
    <tr>
        <td class="title">
            The penalty (or penalties) you want to appeal against
        </td>
    </tr>
    <tr>
        <td>
            <p style="margin-top: 10px; font-weight: 600">
                Give the tax year which the penalties are for
            </p>
        </td>
    </tr>
</table>
<div class="penalty">
    <table style="width: 100%;">
        <tr>
            <td style="vertical-align: bottom">
                <div class="space-between" style="justify-content: start;">
                    <div style="width: 330px;">
                        <b>
                            Tax year ended 5 April
                        </b>
                    </div>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
<br>
<table style="width: 100%;">
    <tr>
        <td>
            <p>
                Tell us which penalties you want to appeal against below. Enter the amount of each penalty and the date of your <br/>
                penalty notice. You'll find this at the top of the front page of your SA326D, ‘Late tax return: Notice of penalty assessment’ <br/>
                or $A370, ‘Notice of penalty assessment’. <br/><br/>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style="font-size: 18pt; font-weight: 600;">
                Penalties for filing your tax return late <br/>
            </p>
        </td>
    </tr>
</table>
<div class="penalties">
    <div style="width: 50%; float: left">
        <table style="width: 100%;">
            <tr>
                <td>
                    <p style="margin-bottom: 10px;">
                        <b>
                            1 day late - £100 penalty. To appeal against this <br/>
                            penalty put ‘X' in the box
                        </b> <br/>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 30px; margin-right: 2px"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin-bottom: 10px; margin-top: 20px">
                        <b>3 months late filing penalty amount</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 30px; margin-right: 2px; background-color: transparent; position: relative; font-size: 16pt; color: #208f8b">
                            £
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div style="position: relative; width: 20px">
                            <span class="point"></span>
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px; background-color: transparent; position: relative; font-size: 16pt; color: #208f8b">
                            0
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px; background-color: transparent; position: relative; font-size: 16pt; color: #208f8b">
                            0
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin-bottom: 10px; margin-top: 20px">
                        <b>6 months late filing penalty amount</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 35px; margin-right: 2px; background-color: transparent; position: relative; font-size: 16pt; color: #208f8b">
                            £
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div style="position: relative; width: 20px">
                            <span class="point"></span>
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px; background-color: transparent; position: relative; font-size: 16pt; color: #208f8b">
                            0
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px; background-color: transparent; position: relative; font-size: 16pt; color: #208f8b">
                            0
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin-bottom: 10px; margin-top: 20px">
                        <b>12 months late filing penalty amount</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 30px; margin-right: 2px; background-color: transparent; position: relative; font-size: 16pt; color: #208f8b">
                            £
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div style="position: relative;  width: 20px">
                            <span class="point"></span>
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px; background-color: transparent; position: relative; font-size: 16pt; color: #208f8b">
                            0
                        </div>
                        <div class="input" style="width: 35px; margin-right: 2px; background-color: transparent; position: relative; font-size: 16pt; color: #208f8b">
                            0
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="width: 50%; float: right">
        <table style="width: 100%;">
            <tr>
                <td>
                    <p style="margin-bottom: 10px;">
                        <b>Date of penalty notice DD MM YYYY</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 20px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 20px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin-bottom: 10px; margin-top: 30px">
                        <b>Date of penalty notice DD MM YYYY</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 20px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 20px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin-bottom: 10px; margin-top: 30px">
                        <b>Date of penalty notice DD MM YYYY</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 20px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 20px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="margin-bottom: 10px; margin-top: 30px">
                        <b>Date of penalty notice DD MM YYYY</b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="space-between" style="width: 100%; justify-content: start">
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 20px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 20px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                        <div class="input" style="width: 35px; margin-right: 2px"></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="clear: both"></div>
</div>