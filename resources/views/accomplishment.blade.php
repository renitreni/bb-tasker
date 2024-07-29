<html>

<head>
    <style>
        html {
            margin: 0px
        }

        body {
            background-image: url("{{ public_path('img/ACCOMPLISHMENT-REPORT-01.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 10%;
            padding-left: 5%;
            padding-right: 5%;
            padding-bottom: 10%;
        }
.page-break {
    page-break-after: always;
}
    </style>
</head>

<body>
    <section>
        <p style="text-align: center;"><span style='font-family: "Arial Black", Gadget, sans-serif;'>ACCOMPLISHMENT
                REPORT</span></p>
    </section>
    <section>
        <p style="margin-left: 0pt; text-indent: 0pt; text-align: center;">
            <span style="font-family:Arial;font-size:15px;">
                *Submit Invoice Billing & Accomplishment Report on or before cut off (10th & 25th) to your Project
                Manager for approval and CC <a href="">hr@mybusybee.net</a> and <a
                    href="">kristine@mybusybee.net</a>&nbsp;
            </span>
        </p>
    </section>

    <section>
        <table style="border-collapse:collapse;width:516.7500pt;margin-left:-13.9000pt;border:none;">
            <tbody>
                <tr>
                    <td
                        style="width: 181.25pt;padding: 5pt;border-width: 1pt;border-style: solid;border-color: rgb(0, 0, 0);vertical-align: top;">
                        <p
                            style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                            <strong><span style="font-family:Arial;font-size:15px;">Task/ Accomplishment
                                    /Output</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 110.5pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: 1pt solid rgb(0, 0, 0);border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                        <p
                            style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                            <strong><span style="font-family:Arial;font-size:15px;">Status</span></strong>
                        </p>
                        <p
                            style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                            <strong><span
                                    style="font-family:Arial;font-size:12px;">&nbsp;</span></strong><strong><em><span
                                        style="font-family:Arial;color:rgb(102,102,102);font-size:12px;">(indicate if
                                        completed)</span></em></strong>
                        </p>
                    </td>
                    <td
                        style="width: 167.5pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: 1pt solid rgb(0, 0, 0);border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                        <p
                            style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                            <strong><span style="font-family:Arial;font-size:15px;">Project Task Reference</span></strong>
                        </p>
                        <p
                            style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                            <strong><span
                                    style="font-family:Arial;font-size:12px;">&nbsp;</span></strong><strong><em><span
                                        style="font-family:Arial;color:rgb(102,102,102);font-size:12px;">(add the link to the specific task)</span></em></strong>
                        </p>
                    </td>
                    <td
                        style="width: 15.5pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: 1pt solid rgb(0, 0, 0);border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                        <p
                            style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                            <strong><span style="font-family:Arial;font-size:15px;">Hours Used</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 110pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: 1pt solid rgb(0, 0, 0);border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                        <p
                            style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                            <strong><span style="font-family:Arial;font-size:15px;">Date</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 110.5pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: 1pt solid rgb(0, 0, 0);border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                        <p
                            style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                            <strong><span style="font-family:Arial;font-size:15px;">Accepted by PM</span></strong>
                        </p>
                        <p
                            style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                            <strong><span
                                    style="font-family:Arial;font-size:12px;">&nbsp;</span></strong><strong><em><span
                                        style="font-family:Arial;color:rgb(102,102,102);font-size:12px;">(filled out by PM)</span></em></strong>
                        </p>
                    </td>
                </tr>
                @foreach ($record->details as $detail)
                    <tr>
                        <td
                            style="width: 181.25pt;padding: 5pt;border-left: 1pt solid rgb(0, 0, 0);border-right: 1pt solid rgb(0, 0, 0);border-top: none;border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                                <strong><span
                                        style="font-family:Arial;font-size:15px;">{{ $detail->task_name }}</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 110.5pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: none;border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                                <strong><span
                                        style="font-family:Arial;font-size:15px;">{{ $detail->status }}</span></strong>
                            </p>
                        </td>
                        <td
                            style="max-width: 167.5pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: none;border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;word-wrap:break-word">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                                <strong><span
                                        style="font-family:Arial;font-size:15px;">{{ $detail->task_link }}</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 15.5pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: none;border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                                <strong><span
                                        style="font-family:Arial;font-size:15px;">{{ $detail->hours_spent }}</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 110pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: none;border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                                <strong><span
                                        style="font-family:Arial;font-size:15px;">{{ $detail->record_date->format('F j, Y') }}</span></strong>
                            </p>
                        </td>
                        <td
                            style="width: 110.5pt;padding: 5pt;border-left: none;border-right: 1pt solid rgb(0, 0, 0);border-top: none;border-bottom: 1pt solid rgb(0, 0, 0);vertical-align: top;">
                            <p
                                style="margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:0.0000pt;margin-left:0.0000pt;text-indent:0.0000pt;text-align:center;">
                                <strong><span
                                        style="font-family:Arial;font-size:15px;">&nbsp;</span></strong>
                            </p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

<div class="page-break"></div>
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
