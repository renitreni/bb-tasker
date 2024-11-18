<html>

<head>
    <style>
        .header {
            text-align: center;
        }

        .header {
            position: fixed;
            top: 0px;
        }

        @page {
            margin: 0;
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url('{{ public_path('fonts/Poppins-Regular.ttf') }}') format('truetype');
        }

        body {
            padding-top: 18%;
            margin: 0px;
            font-family: "Poppins", sans-serif;
        }

        .task-list table,
        .task-list th,
        .task-list td {
            border: 1px solid black;
            border-collapse: collapse;
            font-weight: 100px;
            padding: 5px;
        }
        .task-list td {
            font-size: 12px;
        }        
        .task-list th {
            font-size: 14px;
        }
        .signatures table {
            margin-top: 50px;
            width: 100%;
            margin-bottom: 70px;
        }

        .signatures td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ asset('img/accomplishment-image.png') }}" alt="" width="100%">
        <div style="text-align: center; font-size: 12px;">
            <h2>ACCOMPLISHMENT REPORT</h2>
        </div>
    </div>
    <div class="content" style="margin-left:50px; margin-right:50px;">
        <table>
            <tbody>
                <tr>
                    <td><strong>NAME:</strong> {{ $report_name ?? 'aaa' }}</td>
                </tr>
                <tr>
                    <td style="margin: 0px;"><strong>PROJECT NAME:</strong> {{ $project_name ?? 'aaa' }}</td>
                </tr>
                <tr>
                    <td style="margin: 0px;"><strong>PROJECT HANDLED:</strong> {{ $project_handled ?? 'aaa' }}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <p style=" line-height: .8; font-size: 14px">Submit Invoice Billing & Accomplishment Report on or before
                cut off (10th & 25th) to your Project
                Manager for approval and CC <br> <a href="hr@mybusybee.net">hr@mybusybee.net</a> and <a href="kristine@mybusybee.net">kristine@mybusybee.net</a>  </p>
        </div>
        <div class="task-list">
            <table style="width: 100%;">
                <thead>
                    <th>Task/Accomplishment/Output</th>
                    <th>Status </th>
                    <th>
                        Project Task Reference <br><i>(add the link to the specific task)</i>
                    </th>
                    <th>Hours Used</th>
                    <th>Date </th>
                    <th>Accepted by PM <br><i>(add the link to the specific task)</i></th>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td style="text-align: center; max-width: 120px; word-wrap: break-word;">{{ $detail['task_name']}}</td>
                            <td>{{ $detail['status']}}</td>
                            <td style="text-align: center; max-width: 120px; word-wrap: break-word;">{{ $detail['task_link']}}</td>
                            <td>{{ $detail['hours_spent']}}</td>
                            <td>{{ \Carbon\Carbon::parse($detail['record_date'])->format('Y-m-d') }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="signatures">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <hr
                                style="border: none; height: 1px; width: 150px; background-color: black; text-align:left;">
                            IC’S SIGNATURE
                        </td>
                        <td>
                            <hr
                                style="border: none; height: 1px; width: 300px; background-color: black; text-align:left;">
                            SUPERVISOR’S NAME/SIGNATURE
                        </td>
                        <td>
                            <hr
                                style="border: none; height: 1px; width: 280px; background-color: black; text-align:left;">
                            ANDREA HERNANDEZ, COO
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        _______________________________________________________________________________________
        <div style="width: 100%; text-align: center;">
            <label style="font-weight:60px; padding-top: 15px;">FOR SUPERVISOR/HR USE ONLY</label>
        </div>
        <div style="padding-left: 280px; margin-top: 60px;">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <hr
                                style="border: none; height: 1px; width: 65px; background-color: black; text-align:left; margin-top: 40px;">
                        </td>
                        <td>Approved</td>
                        <td style="width: 80px;"></td>
                        <td>Approved number of days:</td>
                        <td>
                            <hr
                                style="border: none; height: 1px; width: 65px; background-color: black; text-align:left; margin-top: 40px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr
                                style="border: none; height: 1px; width: 65px; background-color: black; text-align:left; margin-top: 40px;">
                        </td>
                        <td>Disapproved</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>

</html>
