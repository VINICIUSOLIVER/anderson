<style>
    body {
        font-size: 16px;
    }

    .table-header {
        width: 100%;
        font-size: 20px;
        font-weight: bolder;
        border-collapse: collapse;
    }

    .table-header tr:first-child td {
        padding-bottom: 10px;
    }

    .table-header td {
        width: 50%;
    }

    .table-header td:first-child {
    }

    .table-header td {
        padding-left: 10px;
    }

    .highlighting {
        background-color: #ffff00;
    }

    .write-space {
        width: 30px;
    }

    .check-content {
        display: -webkit-box;
        align-items: center;
        display: -webkit-flex; /* wkhtmltopdf uses this one */
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
        display: -webkit-flex; /* wkhtmltopdf uses this one */
        display: flex;
        align-items: center;
        justify-content: space-between
    }

</style>

<table class="table-header">
    <tr>
        <td>
            image
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
<table style="width: 100%">
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
<table style="width: 100%">
    <tr>
        <th align="left" colspan="3">
            About submitting your returns
        </th>
    </tr>
    <tr>
        <td colspan="1">
            <b>1</b>
        </td>
        <td colspan="2">
            <b>Did you personally submit your tax return for the tax year [DD MMMM YYYY]?</b>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
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
            <div style="width: 70%">
                <div class="input" style="margin-bottom: 5px;"></div>
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
            <div class="check-content">
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
            <div class="check-content">
                No &nbsp;<div class="check"></div> &nbsp;&nbsp;&nbsp;,
            </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <div class="check-content">
                Yes &nbsp;<div class="check"></div> &nbsp; Please give their full name and address
            </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <div style="margin-left: 80px">
                <div style="width: 70%;">
                    <div class="input" style="margin-bottom: 5px;"></div>
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
                    <div class="space-between">
                        <div>
                            Fixed fee
                        </div>
                        <div>
                            <div class="check"></div> 
                        </div>
                        <div>
                            <label for="">Enter amount</label><br>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px">
                                £
                            </div>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 10px"></div>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                        </div>
                    </div>
                    <div class="space-between">
                        <div>
                            Percentage
                        </div>
                        <div>
                            <div class="check"></div> 
                        </div>
                        <div>
                            <label for="">Enter percentage</label><br>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                            <div class="input" style="width: 10px; height: 15px; float: left; margin-right: 2px"></div>
                            <div>
                                %
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
</table>
