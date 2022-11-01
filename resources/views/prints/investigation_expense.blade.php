@include("prints.pdf")

<style>
    .table-header tr:first-child td {
        padding-bottom: 10px;
    }

    .table-header td {
        border: solid 1px #ccc;
    }

    table p {
        font-size: 18px;
    }

    .table-header td {
        width: 50%;
    }

    .table-header td {
        padding-left: 10px;
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
            <p>
                Indv and small Business compliance <br/>
                HMRC <br/>
                BX9 1LE
            </p>
        </td>
        <td>
            <p>
                @php
                    print($companyAddress)
                @endphp
            </p>
        </td>
    </tr>
</table>
<br>
<table>
    <tr>
        <td colspan="3">
            <p>
                <span style="border-left: solid 1px #ccc; padding-left: 10px; box-sizing: box-content">To Whom it may concern</span>
                <br><br>
                Our client has instructed us to act on their behalf as agent in responding to the expenses
                <br><br>
                {{ $clientName }}
                <br>     
                {{ $clientUTR }}
                <br>    
                {{ $clientREF }}
                <br><br>
                To respond to the compliance letter, you sent to them. Requesting additional information.
                <br><br> 
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td class="write-space"></td>
        <td valign="baseline">
            1.
        </td>
        <td>
            Company Address &nbsp;&nbsp;&nbsp; {{ $clientCompanyAddress }}
        </td>
    </tr>
    <tr>
        <td class="write-space"></td>
        <td valign="baseline">
            2.
        </td>
        <td>
            Nature of business &nbsp;&nbsp;&nbsp; {{ $natureOfBusiness }}
        </td>
    </tr>
    <tr>
        <td class="write-space"></td>
        <td valign="baseline">
            3.
        </td>
        <td>
            Other expense claimed included {{ $otherExpense }}
        </td>
    </tr>
    <tr>
        <td class="write-space"></td>
        <td valign="baseline">
            4.
        </td>
        <td>
            As far as our client is aware the employer hasn’t reimbursed any expenses for the above expenses.
        </td>
    </tr>
    <tr>
        <td class="write-space"></td>
        <td valign="baseline">
            5.
        </td>
        <td>
            Company name {{ $companyName }}
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p>
                <br><br>
                Due to this being our client’s first claim and our client not being aware he could claim at the time, he does not have original receipts, so he has provided the enclosed documents. Please find the expense form and bank statements as a form of evidence of his expenses.
                <br><br>
                Any other query please don’t hesitate to contact us, we hope you have the correct information to complete your checks and look forward to hearing from you.
                <br><br>
                Here are our bank details below for the overpayment to be transferred 
                <br><br>
                {{ $agentName }}  <br>
                {{ $agentSortCode }} <br>
                {{ $agentAccountNumber }} <br><br>
                Kind regards
            </p>
        </td>
    </tr>
</table>
