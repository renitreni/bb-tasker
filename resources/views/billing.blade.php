<html>

<head>
    <style>
        html {
            margin: 0px
        }

        body {
            /* background-image: url("{{ asset('/img/accomplishment-image.jpg') }}"); */
            /* background-size: cover;
            background-repeat: no-repeat; */
            padding-top: 10%;
            padding-left: 5%;
            padding-right: 5%;
        }

        .td-task,
        .td-task td {
            border: 1px solid rgb(230, 145, 56);
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <section>
        <div align="center"></div>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 33.3333%;">
                        <p style="margin-top:0.0000pt;margin-bottom:2.0000pt;text-align:left;">
                            <strong><span style="font-family:Aparajita;font-size:16px;">Bill From</span></strong>
                        </p>
                        <p style="margin-top:0.0000pt;margin-bottom:0.0000pt;text-align:left;">
                            <span style="font-family:Aparajita;font-size:15px;">{!! $record->bill_from !!}</span>
                        </p>
                    </td>
                    <td style="width: 33.3333%;">
                        <p style="margin-top:0.0000pt;margin-bottom:2.0000pt;text-align:left;">
                            <strong><span style="font-family:Aparajita;font-size:16px;">Bill To</span></strong>
                        </p>
                        <p style="margin-top:0.0000pt;margin-bottom:0.0000pt;text-align:left;">
                            <span style="font-family:Aparajita;font-size:15px;">{!! $record->bill_from !!}</span>
                        </p>
                    </td>
                    <td style="width: 33.3333%; background-color: rgb(230, 145, 56);">
                        <p style="margin-top:0.0000pt;margin-bottom:2.0000pt;text-align:left;">
                            <strong>
                                <span style="font-size: 28px;color: rgb(255, 255, 255);">INVOICE</span>
                            </strong>
                        </p>
                        <span style="color: rgb(255, 255, 255);">
                            <br>Invoice # {!! $record->invoice_number !!}
                            <br>Invoice Date: {!! $record->invoice_date->format('F Y') !!}
                            <br>Due Date: {!! $record->due_date->format('F Y') !!}
                        </span>
                        <br>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <section>
        <p><strong>PROJECTS:</strong></p>
        <table class="td-task" style="width: 100%; text-align: center;border: px solid black;">
            <tbody>
                <tr>
                    <td style="width: 12.7622%; background-color: rgb(230, 145, 56);">
                        <strong><span style="color: rgb(255, 255, 255);">#</span></strong>
                    </td>
                    <td style="width: 53.7879%; background-color: rgb(230, 145, 56);">
                        <div style="text-align: center;">
                            <strong><span style="color: rgb(255, 255, 255);">DESCRIPTION/TASK</span></strong>
                        </div>
                    </td>
                    <td style="width: 33.3333%; background-color: rgb(230, 145, 56);">
                        <div style="text-align: center;">
                            <span style="color: rgb(255, 255, 255);"><strong>AMOUNT</strong></span>
                        </div>
                    </td>
                </tr>
                @php
                    $totalSum = 0;
                @endphp
                @foreach ($record->details as $key => $detail)
                    <tr>
                        <td style="width: 12.7622%;">{{ $key + 1 }}</td>
                        <td style="width: 53.7879%;">{{ $detail->task_name }}</td>
                        <td style="width: 33.3333%;">{{ $detail->hours_spent }} hrs.</td>
                    </tr>
                    @php
                        $totalSum += $detail->hours_spent;
                    @endphp
                @endforeach
                <tr>
                    <td style="width: 12.7622%; border: 1px solid rgb(255, 255, 255);"></td>
                    <td style="width: 53.7879%; border: 1px solid rgb(255, 255, 255); text-align: right;">Sub-total:<br>
                    </td>
                    <td style="width: 33.3333%; border: 1px solid rgb(230, 145, 56);">{{ $totalSum }}</td>
                </tr>
                <tr>
                    <td style="width: 12.7622%; border: 1px solid rgb(255, 255, 255);"></td>
                    <td style="width: 53.7879%;border: 1px solid rgb(255, 255, 255); text-align: right;">Total:<br></td>
                    <td style="width: 33.3333%; background-color: rgb(230, 145, 56);">
                        {{ Number::format($totalSum * 300) }}</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
            </tbody>
        </table>
    </section>

    <section>
        <p>
            <strong><span style="font-family:Aparajita;color:rgb(37,37,37);font-size:15px;">Terms and
                    conditions</span></strong>
        </p>
        <p>
            <span style="font-family:Aparajita;color:rgb(63,63,63);font-size:15px;">
                {!! $record->terms_condition !!}
            </span>
        </p>
        <p>
            <strong>
                <span style="font-family:Aparajita;color:rgb(37,37,37);font-size:15px;">PLEASE MAKE A PAYMENT TO</span>
            </strong>
            <br><br>
            <span style="font-family:Aparajita;color:rgb(63,63,63);font-size:15px;">Account Name</span>
            <span style="font-family:Aparajita;color:rgb(63,63,63);font-size:15px;">:
                {{ $record->account_name }}</span><br>
            <span style="font-family:Aparajita;color:rgb(63,63,63);font-size:15px;">Account Number</span>
            <span style="font-family:Aparajita;color:rgb(63,63,63);font-size:15px;">:
                {{ $record->account_number }}</span><br>
            <span style="font-family:Aparajita;color:rgb(63,63,63);font-size:15px;">Bank Name</span>
            <span style="font-family:Aparajita;color:rgb(63,63,63);font-size:15px;">:
                {{ $record->bank_name }}</span><br>
            <span style="font-family:Aparajita;color:rgb(63,63,63);font-size:15px;">Bank Address</span>
            <span style="font-family:Aparajita;color:rgb(63,63,63);font-size:15px;">: {{ $record->bank_address }}</span>
        </p>
    </section>
    <section>
        <p style="text-align:center;line-height:114%;"><span dir="LTR"
                style="font-family:'Times New Roman';font-size:15px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>
        <p style="line-height:114%;"><span dir="LTR" style="font-family:'Times New Roman';font-size:15px;">&nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;&nbsp;</span><strong><span dir="LTR"
                    style="font-family:'Times New Roman';font-size:15px;">&nbsp; &nbsp; &nbsp; IC&rsquo;s
                    Signature&nbsp;</span></strong><strong><span dir="LTR"
                    style="font-family:'Times New Roman';font-size:15px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Supervisor&rsquo;s Name/
                    Signature</span></strong></p>
        <br>
        <br>
        <p style="line-height:114%;"><strong><span dir="LTR"
                    style="font-family:'Times New Roman';line-height:114%;font-size:13px;">&nbsp;&nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;FOR SUPERVISOR/HR USE
                    ONLY</span></strong></p>

        <p><strong><span style="font-family:Aparajita;font-size:13px;">&nbsp;</span></strong></p>
        <p style="text-indent:36.0000pt;text-align:center;"><strong><span
                    style="font-family:Aparajita;font-size:13px;">&nbsp;</span></strong></p>
        <div align="center">
            <table style="border-collapse:collapse;width:450.7500pt;border:none;">
                <tbody>
                    <tr>
                        <td
                            style="width: 75.75pt;padding: 5pt;border-left: none;border-right: none;border-top: none;border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:left;">
                                <strong><span style="font-family:Aparajita;font-size:13px;">&nbsp;</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 123pt;padding: 5pt;border-width: initial;border-style: none;border-color: initial;vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:left;">
                                <strong><span dir="LTR"
                                        style="font-family:Aparajita;font-size:13px;">Approved</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 177.75pt;padding: 5pt;border-width: initial;border-style: none;border-color: initial; vertical-align: top;text-align: right;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;">
                                <span dir="LTR"
                                        style="font-family:Aparajita;font-size:13px;">&nbsp;</span></strong><strong><span
                                        dir="LTR" style="font-family:Aparajita;font-size:13px;">Approved number of
                                        days:</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 74.25pt;padding: 5pt;border-left: none;border-right: none;border-top: none;border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:left;">
                                <strong><span style="font-family:Aparajita;font-size:13px;">&nbsp;</span></strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="width: 75.75pt;padding: 5pt;border-left: none;border-right: none;border-top: none;border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:left;">
                                <strong><span style="font-family:Aparajita;font-size:13px;">&nbsp;</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 123pt;padding: 5pt;border-width: initial;border-style: none;border-color: initial;vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:left;">
                                <strong><span dir="LTR"
                                        style="font-family:Aparajita;font-size:13px;">Disapproved</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 177.75pt;padding: 5pt;border-width: initial;border-style: none;border-color: initial;vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:left;">
                                <strong><span style="font-family:Aparajita;font-size:13px;">&nbsp;</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 74.25pt;padding: 5pt;border-width: initial;border-style: none;border-color: initial;vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:left;">
                                <br>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div align="center">
            <table style="border-collapse:collapse;width:450.7500pt;border:none;">
                <tbody>
                    <tr>
                        <td
                            style="width: 75.75pt;padding: 5pt;border-left: none;border-right: none;border-top: none; vertical-align: top;">
                            <br>
                        </td>
                        <td
                            style="width: 123pt;padding: 5pt;border-width: initial;border-style: none;border-color: initial;vertical-align: top;">
                            <br>
                        </td>
                        <td
                            style="width: 177.75pt;padding: 5pt;border-width: initial;border-style: none;border-color: initial;vertical-align: top;">
                            <br>
                        </td>
                        <td
                            style="width: 74.25pt;padding: 5pt;border-width: initial;border-style: none;border-color: initial;vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:left;">
                                <br>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
