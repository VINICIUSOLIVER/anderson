@include("prints.pdf")

<style>
    table {
        font-size: 12pt !important;
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
        height: 15px;
        padding: 10px;
        border: solid 1px #000;
        font-size: 14px;
        color: rgb(170, 168, 168)
    }

    .space-between {
        display: -webkit-box;
        align-items: center;
        display: -webkit-flex;
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    .questionnaire {
        border: solid 1px #000;
        padding: 40px 10px;
    }

    .write-space {
        width: 80px;
    }

</style>

<table class="table-header">
    <tr>
        <td>
            <img src="" />
        </td>
        <td style="vertical-align: bottom">
            <p>
                Repayment questionnaire
            </p>
        </td>
    </tr>
</table>
<br>
<table style="border-collapse: collapse; width: 55%" border="1">
    <tr>
        <th nowrap="nowrap" align="left">
            Name:
        </th>
        <td style="width: 80%"></td>
    </tr>
    <tr>
        <th nowrap="nowrap" align="left">
            Reference:
        </th>
        <td style="width: 80%"></td>
    </tr>
    <tr>
        <th nowrap="nowrap" align="left">
            NI number:
        </th>
        <td style="width: 80%"></td>
    </tr>
</table>
<table style="width: 100%; margin-bottom: 10px">
    <tr>
        <p style="margin: 5px 0">
            Please read each question carefully.
        </p>
        <p style="margin: 0">
            If you need to give further information, please make sure it is full and complete. This will help me complete my <br>
            check of your repayment claim.
        </p>
    </tr>
</table>
<div class="questionnaire">
    <table style="width: 100%">
        <tr>
            <th align="left" colspan="3">
                <div style="margin-bottom: 10px;">
                    About submitting your returns
                </div>
            </th>
        </tr>
        <tr>
            <td class="write-space" colspan="1">
                <b>1</b>
            </td>
            <td colspan="2">
                <div style="margin-bottom: 10px;">
                <b>Did you personally submit your tax return for the tax year <span style="color: #008000"> &nbsp;[DD MMMM YYYY]</span>?</b>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 90px">
                <div class="check-content">
                    No &nbsp; <div class="check"></div>
                </div>
            </td>
            <td>
                Who submitted your tax return? Please give their full name and address
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <div style="width: 60%">
                    <div class="input" style="margin-bottom: 10px;"></div>
                    <div class="input" style="border-bottom: none">
                        Address
                    </div>
                    <div class="input" style="border-bottom: none"></div>
                    <div class="input" style="border-bottom: none"></div>
                    <div class="input" style="border-bottom: none"></div>
                    <div class="input">
                        Postcode
                    </div>
                    <br>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                Did they ask you to give them your records so they could submit your return?
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <div class="check-content" style="margin-bottom: 10px;">
                    No &nbsp;<div class="check"></div> &nbsp; Yes &nbsp; <div class="check"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="check-content">
                    Yes &nbsp;<div class="check"></div>
                </div>
            </td>
            <td>
                Did anyone help you to complete the tax return?
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <div class="space-between" style="justify-content: start; align-items: center; margin-bottom: 20px">
                    <div style="width: 50px;">
                        No
                    </div>
                    <div style="margin-right: 50px;">
                        <div class="check"></div>
                    </div>
                    <div>,</div>
                </div>
                <div class="space-between" style="justify-content: start; align-items: center">
                    <div style="width: 50px;">
                        Yes
                    </div>
                    <div style="width: 50px;">
                        <div class="check"></div> 
                    </div>
                    <div>
                        Please give their full name and address
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <div style="margin-left: 100px">
                    <div style="width: 65%;">
                        <div class="input" style="margin-bottom: 10px;"></div>
                        <div class="input" style="border-bottom: none">
                            Address
                        </div>
                        <div class="input" style="border-bottom: none"></div>
                        <div class="input" style="border-bottom: none"></div>
                        <div class="input" style="border-bottom: none"></div>
                        <div class="input">
                            Postcode
                        </div>
                        <br>
                    </div>
                    <p>
                        Did they charge you a fee or percentage of the repayment?
                    </p>
                    <div>
                        <div class="space-between" style="justify-content: start;">
                            <div style="width: 100px">
                                Fixed fee
                            </div>
                            <div style="width: 150px">
                                <div class="check"></div> 
                            </div>
                            <div>
                                <label for="">Enter amount</label><br>
                                <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px">
                                    £
                                </div>
                                <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                                <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                                <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                                <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                                <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                                <div class="input" style="width: 10px; height: 15px; margin-right: 5px; float: left"></div>
                                <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left">
                                    0
                                </div>
                                <div class="input" style="width: 10px; height: 15px; float: left">
                                    0
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="page-break"></div>

<div class="questionnaire" style="margin-top: 10px;">
    <table style="width: 100%">
        <tr>
            <th align="left" colspan="3">
                <div style="margin-bottom: 10px;">
                    About submitting your returns
                </div>
            </th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <div style="margin-left: 270px">
                    <div>
                        <div class="space-between" style="justify-content: start; margin-bottom: 20px">
                            <div style="width: 250px">
                                Percentage
                            </div>
                            <div style="width: 150px">
                                <div class="check"></div> 
                            </div>
                            <div>
                                <label for="">Enter percentage</label><br>
                                <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                                <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                                <div style="margin-top: 20px">
                                    %
                                </div>
                            </div>
                        </div>
                        <div class="space-between" style="justify-content: start;">
                            <div style="width: 250px">
                                No fee or percentage
                            </div>
                            <div>
                                <div class="check"></div> 
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <br><br><br><br>
    <table style="width: 100%;">
        <tr>
            <td class="write-space" colspan="1">
                <b>2</b>
            </td>
            <td colspan="2">
                <b>How was your tax return submitted ?</b> Put “X” in one box only
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="space-between" style="margin-bottom: 30px; margin-top: 20px;">
                    <div style="width: 250px">
                        Online Tax Accounts
                    </div>
                    <div>
                        <div class="check"></div>
                    </div>
                </div>
                <div class="space-between" style="margin-bottom: 30px;">
                    <div style="width: 250px">
                        Online Agent Portal
                    </div>
                    <div>
                        <div class="check"></div>
                    </div>
                </div>
                <div class="space-between" style="margin-bottom: 30px;">
                    <div style="width: 250px">
                        Online Tax Accounts
                    </div>
                    <div>
                        <div class="check"></div>
                    </div>
                </div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <label for="">Please explain other bellow, if selected</label><br/>
                <div style="width: 93%; margin-bottom: 40px">
                    <div class="input"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="1">
                <b>3</b>
            </td>
            <td colspan="2" style="font-size: 11pt;">
                <b>
                    Have you ever given your HMRC or Government Gateway user ID and password to anyone else so they <br/>
                    could submit your tax return?
                </b> (Do not give your ID or password details below)
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="space-between" style="margin-bottom: 40px; margin-top: 20px">
                    <div style="width: 100px;">
                        No
                    </div>
                    <div>
                        <div class="check"></div>
                    </div>
                </div>
                <div class="space-between" style="margin-bottom: 40px">
                    <div style="width: 100px;">
                        Yes
                    </div>
                    <div class="space-between">
                        <div style="margin-right: 50px;">
                            <div class="check"></div>
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <div style="width: 400px;">
                            <label for="">Enter their name</label><br/>
                            <div class="input"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td colspan="1">
                <b>4</b>
            </td>
            <td colspan="2">
                <b>Before submitting the tax return, were you satisfied the figures were accurate?</b>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="space-between" style="margin-top: 20px; margin-bottom: 40px">
                    <div style="width: 150px;">
                        No
                    </div>
                    <div>
                        <div class="check"></div>
                    </div>
                </div>
                <div class="space-between" style="margin-bottom: 40px">
                    <div style="width: 150px;">
                        Yes
                    </div>
                    <div>
                        <div class="check"></div>
                    </div>
                </div>
            </td>
            <td></td>
        </tr>
    </table>
</div>

<div class="page-break"></div>

<div class="questionnaire" style="margin-bottom: 40px;">
    <table style="width: 100%">
        <tr>
            <th align="left" colspan="3">
                Repayment details
            </th>
        </tr>
        <tr>
            <td class="write-space" colspan="1">
                <b>5</b>
            </td>
            <td colspan="2">
                <b>Did you authorise anyone to receive the repayment on your behalf?</b>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="space-between" style="margin-top: 20px; margin-bottom: 40px">
                    <div style="width: 100px;">
                        No
                    </div>
                    <div>
                        <div class="check"></div>
                    </div>
                </div>
                <div class="space-between" style="align-items: start; margin-bottom: 40px">
                    <div style="width: 100px;">
                        Yes
                    </div>
                    <div class="space-between" style="align-items: start;">
                        <div>
                            <div class="check"></div>
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <div style="margin-top: 10px;">
                            <label for="" style="margin-bottom: 10px;">Please give their full name and address</label><br/>
                            <div style="width: 350px">
                                <div class="input" style="margin-bottom: 5px"></div>
                                <div class="input" style="border-bottom: none">
                                    Address
                                </div>
                                <div class="input" style="border-bottom: none"></div>
                                <div class="input" style="border-bottom: none"></div>
                                <div class="input" style="border-bottom: none"></div>
                                <div class="input" style="margin-bottom: 10px">
                                    Postcode
                                </div>
                            </div>
                            <div style="width: 550px">
                                <label for="" style="margin-bottom: 5px">What is your relationship/connection to your repayment nominee?</label> <br/>
                                <div class="input" style="border-bottom: none"></div>
                                <div class="input"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="font-size: 11pt;">
                    <b>
                        Please enter any additional information about submitting your return or repayment details that you think <br/>
                        might help me with my check. Continue on a separate sheet if necessary.
                    </b>
                </div>
                <div style="width: 700px;">
                    <div class="input"></div>
                    <div class="input"></div>
                    <div class="input"></div>
                    <div class="input"></div>
                    <div class="input"></div>
                    <div class="input"></div>
                    <div class="input"></div>
                </div>
            </td>
            <td></td>
        </tr>
    </table>
</div>

<div class="questionnaire">
    <table style="width: 100%">
        <tr>
            <th align="left" colspan="3">
                Declaration
            </th>
        </tr>
        <tr>
            <td colspan="1" class="write-space">
                <b>6</b>
            </td>
            <td colspan="2" style="font-size: 11pt;">
                <b>
                    Please make sure you have answered all the relevant questions. Then sign and date below and return the <br/>
                    questionnaire to me, with all of the information and documents I have asked for in my enclosed letter.
                </b>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                Signature
            </td>
            <td>
                Date
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 300px">
                <div class="input" style="width: 90%; height: 50px;"></div>
            </td>
            <td style="vertical-align: bottom;">
                <div>
                    <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                    <div class="input" style="width: 10px; height: 15px; margin-right: 10px; float: left"></div>

                    <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                    <div class="input" style="width: 10px; height: 15px; margin-right: 10px; float: left"></div>

                    <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                    <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                    <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left"></div>
                    <div class="input" style="width: 10px; height: 15px; margin-right: 1px; float: left">
                </div>
            </td>
        </tr>
    </table>
</div>