@include("prints.pdf")

<style>
    .table-header {
        border: none;
    }

    .table-header tr:first-child td {
        padding-bottom: 10px;
    }

    table p {
        font-size: 18px;
    }

    .table-header td {
        width: 50%;
    }

    .table-header td:first-child {
    }

    .table-header td {
        padding-left: 10px;
    }

    .topic-circle {
        display: block;
        width: 12px;
        height: 12px;
        background-color: #000;
        border-radius: 50%
    }
</style>

<table class="table-header">
    <tr>
        <td>
            {{ $documentDate }}
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <p style="border: solid 1px #ccc; display: inline-block">
                HMRC <br>
                PAYE AND SA<br>
                BX9 1AS
            </p>
        </td>
        <td align="right">
            <p style="border: solid 1px #ccc; display: inline-block; text-align: left">
               @php
                   print($companyAddress);
               @endphp
            </p>
        </td>
    </tr>
</table>
<br><br><br>
<div class="font-weight-bolder" style="border: solid 1px #000; text-align: center;">
    Claim for overpayment relief.
</div>
<table style="width: 80%">
    <tr>
        <td colspan="1" style="width: 30px"></td>
        <td colspan="2">
            <p>
                <br>
                {{ $clientName }}
                <br>
                {{ $clientUTR }}
                <br><br><br>
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p class="font-size-small">
                To whom it may concern
                <br><br><br>
                I would like to state we wish to make a claim for overpayment relief for the <br> 
                {{ $taxYear }} tax year on our client’s behalf. <br><br>
                Please find a claim for overpayment relief along with the required information below:
                <br><br>
            </p>
        </td>
    </tr>
</table>
<div class="font-weight-bolder" style="border: solid 1px #000; padding: 5px 10px; text-align: center; display:inline-block; width: 83%">
    <p style="border: solid 1px #ccc; margin: 0">
        {{ $taxYear }} TAX YEAR
    </p>
</div>
<br><br>
<div style="margin-left: 20px">
    <table>
        <tr>
            <td colspan="3">
                <p class="font-size-small">
                    I wish to state I am making an overpayment relief claim for the {{ $taxYear }} tax year under the below schedules: 
                    <br><br>
                </p>
            </td>
        </tr>
        <tr>
            <td style="width: 30px"></td>
            <td class="font-weight-bolder" style="width: 15px">1.</td>
            <td class="font-weight-bolder">Para 1(4) Schedule 1AB TMA 1970</td>
        </tr>
        <tr>
            <td style="width: 30px"></td>
            <td class="font-weight-bolder" style="width: 15px">2.</td>
            <td class="font-weight-bolder">Para 51(4) Schedule 18 FA 1998 as amended</td>
        </tr>
        <tr>
            <td class="font-weight-bolder" colspan="3">
                <p>
                    <br>
                    Overpayment {{ $overpayment }}
                    <br><br>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <p class="font-size-small">
                    This is a claim for overpayment relief under schedule 1AB (Section 3A) taxes management act <br>
                    1970 For individuals).
                    <br><br>
                </p>
            </td>
        </tr>
        <tr>
            <td style="width: 30px"></td>
            <td valign="baseline" style="width: 30px">
                <span class="topic-circle"></span>
            </td>
            <td>
                <p class="font-size-small">
                    The years concerned is {{ $taxYear }}.
                </p>
            </td>
        </tr>
        <tr>
            <td style="width: 30px"></td>
            <td valign="baseline" style="width: 30px">
                <span class="topic-circle"></span>
            </td>
            <td>
                <p class="font-size-small">
                    All particulars in this claim are correctly stated and to the best of our knowledge and <br> 
                    belief.
                </p>
            </td>
        </tr>
        <tr>
            <td style="width: 30px"></td>
            <td valign="baseline" style="width: 30px">
                <span class="topic-circle"></span>
            </td>
            <td>
                <p class="font-size-small">
                    This is our first claim for overpayment relief or any relief under the previous equitable <br> 
                    liability concession.  
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <p class="font-size-small">
                    <br>
                    Having amended the tax return with income and expenses I have incurred an <br> 
                    overpayment resulting in a refund of {{ $overpayment }} <br><br>
                    Please make an overpayment relief payment to our agent bank details on the <br> 
                    original tax returns. These are confirmed at the bottom of the letter.    
                </p>
            </td>
        </tr>
    </table>
    <br>
    <table style="font-weight: bolder">
        <tr>
            <td nowrap="nowrap">
                NAME
            </td>
            <td>
                {{ $agentName }}
            </td>
        </tr>
        <tr>
            <td nowrap="nowrap">
                Sort code
            </td>
            <td>
                {{ $agentSortCode }}
            </td>
        </tr>
        <tr>
            <td nowrap="nowrap">
                Account
            </td>
            <td>
                {{ $agentAccountNumber }}
            </td>
        </tr>
    </table>

    <div style="page-break-after: always;"></div>

    <table>
        <tr>
            <td>
                <p class="font-size-small">
                    I hope this is all you need, if you require any more information, please let me <br>
                    know.
                    <br><br><br>
                    I declare the information given in the claim is correct and complete to the best of <br> 
                    my knowledge and belief.
                    <br><br><br><br>
                    Kind Regards
                    <br><br><br><br>
                </p>
                <p class="font-weight-bolder">
                    Tommy McNally
                    <br><br>
                </p>
            </td>
        </tr>
        <tr>
            <td align="right" style="color: rgb(158, 158, 158)">
                Client: {{ $clientName }}
            </td>
        </tr>
    </table>
</div>
