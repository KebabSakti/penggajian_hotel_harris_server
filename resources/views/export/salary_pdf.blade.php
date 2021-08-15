<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-weight: bold;
            font-size: 14px;
        }

        table td,
        table th {
            /* border: 1px solid #ddd; */
            padding: 8px;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

    </style>
</head>

<body>

    <table>
        <tr>
            <td style="text-align: center;"><img src="./images/logo_hotel.png" width="150"></td>
            <td colspan="2" style="text-align: center; padding-right:100px;">Salary Slip <br><br> PT PRIMA SUKSES JAYA
            </td>
            <td style="text-align: right;">
                {{ \Carbon\Carbon::parse($data->salary_periode)->locale('id_ID')->format('F Y') }}</td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td style="text-align: right;">{{ $data->employee_name }}</td>
            <td style="text-align: right;">Department</td>
            <td style="text-align: right;">{{ $data->employee_department }}</td>
        </tr>
        <tr>
            <td>Employee No</td>
            <td style="text-align: right;">{{ $data->employee_id }}</td>
            <td style="text-align: right;">Position</td>
            <td style="text-align: right;">{{ $data->employee_position }}</td>
        </tr>
        <tr>
            <td>Tax Status</td>
            <td style="text-align: right;">{{ $data->salary_tax_status }}</td>
            <td style="text-align: right;">Date Employment</td>
            <td style="text-align: right;">
                {{ \Carbon\Carbon::parse($data->employee_onboard_date)->locale('id_ID')->format('d F Y') }}</td>
        </tr>
        <tr>
            <td colspan="4">
                <hr style="border: 1px solid #000;">
            </td>
        </tr>
        <tr>
            <td colspan="2">Additional :</td>
            <td style="text-align: right;">Deduction :</td>
            <td></td>
        </tr>
        <tr>
            <td>Basic Salary</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_basic, 2, ',', '.') }}</td>
            <td style="text-align: right;">Income Tax Art-21</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_pph, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Guarantee Service</td>
            <td style="text-align: right;">#NA</td>
            <td style="text-align: right;">Jamsostek 2%</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_jht, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td>THR / Bonus Allow.</td>
            <td style="text-align: right;">#NA</td>
            <td style="text-align: right;">Jamsostek 1%</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_jp, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Service Charge</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_service_charge, 2, ',', '.') }}</td>
            <td style="text-align: right;">BPJS Kesehatan 1%</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_bpjs, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Jam Lembur</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_overtime, 2, ',', '.') }}</td>
            <td style="text-align: right;">Employee Ledger</td>
            <td style="text-align: right;">#NA</td>
        </tr>
        <tr>
            <td>Insentive</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_incentive, 2, ',', '.') }}</td>
            <td style="text-align: right;">Miscellaneous</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_misc, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Uang Makan</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_meal_allowance, 2, ',', '.') }}</td>
            <td style="text-align: right;">Service Charge</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_service_charge, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Tambahan Service Charge</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_additional_service, 2, ',', '.') }}</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right;">
                <hr style="border:1px solid #000;">
            </td>
            <td style="text-align: right;"></td>
            <td style="text-align: right;">
                <hr style="border:1px solid #000;">
            </td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td>Total Gross Income</td>
            <td style="text-align: right;">Rp {{ number_format($gross_income, 2, ',', '.') }}</td>
            <td style="text-align: right;">Total Deduction</td>
            <td style="text-align: right;">Rp {{ number_format($total_deduction, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td>NPWP</td>
            <td style="text-align: right;">{{ $data->salary_npwp }}</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td style="text-align: right;">Take Home Pay</td>
            <td style="text-align: right;">Rp {{ number_format($data->salary_final, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Cut Off Payroll</td>
            <td colspan="3">21 Januari - 20 Februari 2021</td>
        </tr>
        <tr>
            <td>Total Working Days</td>
            <td colspan="3" style="text-align: left;">0 Days</td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td>Cut Off Service Charge</td>
            <td colspan="3">01 Januari - 31 Januari 2021</td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" style="text-align: center;">Prepared By</td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2" style="text-align: center;">M. Alfeisyahri Fahlefi</td>
        </tr>
    </table>

</body>

</html>
