@include("prints.pdf")

<style>
    .table-header {
        border: none;
    }
    
    table p {
        font-size: 19px;
    }

    .table-header td {
        width: 50%;
    }

    .table-header td:last-child {
        padding-left: 10px;
    }
</style>

<table class="table-header">
    <tr>
        <td>
            <p>
                @php
                    print($companyAddress);
                @endphp
            </p>
        </td>
        <td>
            <p>
                {{ $documentDate }}
                <br>
                PAYE and Self-Assessment <br>
                Complaints Revenue and Customs <br>
                BX9 1AB
            </p>
        </td>
    </tr>
</table>
<br><br><br><br>
<table>
    <tr>
        <td width="90px">Name</td>
        <td>
            {{ $clientName }}
        </td>
    </tr>
    <tr width="90px">
        <td>UTR</td>
        <td>
            {{ $clientUTR }}
        </td>
    </tr>
</table>
<br><br><br/>
<table>
    <tr>
        <td>
            <p>
                To Whom it may concern, <br><br>
                I would like to take this opportunity to bring to your attention and make a complaint in writing concerning our client. The submission Dated {{ $complaintDate }} tax returns. <br/>
                And it was sent for security checks back in {{ $verificationDate }} with a turnaround of 6 weeks. 
                We have called HMRC and asked for an update and made a complaint due to the length of time it has took to process and still we have been given the same answer continually that it has been sent to back office to be dealt with. I have had other client in security having checked being done and they have been dealt with within the longest time scale 3 months. Our client is extremely frustrated with the <br/> continual circle of response that we are receiving and need this issue to be resolved asap 
                <br><br>
                Date of calls and complaints made 
                <br><br>
                {{ $dates }}
                <br><br><br><br>
                Kind Regards,
            </p>
        </td>
    </tr>
</table>


