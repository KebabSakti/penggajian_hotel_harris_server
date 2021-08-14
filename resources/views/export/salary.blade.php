<table class="table table-sm table-bordered table-hover datatable">
    <thead>
        <tr>
            <th rowspan="2">Periode</th>
            <th rowspan="2">ID</th>
            <th rowspan="2">Status</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Departemen</th>
            <th rowspan="2">Jabatan</th>
            <th rowspan="2">Tanggal On Board</th>
            <th rowspan="2">No. Rekening</th>
            <th rowspan="2">NPWP</th>
            <th rowspan="2">Tax Status</th>
            <th colspan="2">Kehadiran</th>
            <th rowspan="2">Total</th>
            <th rowspan="2">Gaji Per Hari</th>
            <th rowspan="2">Gaji Pokok</th>
            <th colspan="5">Additional</th>
            <th rowspan="2">Service Charge</th>
            <th colspan="5">Deduction</th>
            <th rowspan="2">Gaji Final</th>
            <th rowspan="2">Keterangan</th>
        </tr>
        <tr>
            <th>Hari Kerja</th>
            <th>Hari Mulai Kerja</th>
            <th>Jumlah Tambahan Service</th>
            <th>Jam Lembur</th>
            <th>Tunjangan Jabatan</th>
            <th>Uang Makan</th>
            <th>Insentive</th>
            <th>PPH 21</th>
            <th>JHT</th>
            <th>JP</th>
            <th>BPJS KES</th>
            <th>Miscellaneus</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $item)
            <tr>
                <td>{{ \Carbon\Carbon::parse($item->salary_periode)->locale('id_ID')->format('F Y') }}</td>
                <td>{{ $item->employee_id }}</td>
                <td>{{ $item->employee_status }}</td>
                <td>{{ $item->employee_name }}</td>
                <td>{{ $item->employee_department }}</td>
                <td>{{ $item->employee_position }}</td>
                <td>{{ \Carbon\Carbon::parse($item->employee_onboard_date)->locale('id_ID')->format('d F Y') }}</td>
                <td>{{ $item->salary_account_number }}</td>
                <td>{{ $item->salary_npwp }}</td>
                <td>{{ $item->salary_tax_status }}</td>
                <td>{{ $item->salary_working_day }}</td>
                <td>{{ $item->salary_checkin_day }}</td>
                <td>{{ $item->salary_day_total }}</td>
                <td>{{ $item->salary_per_day }}</td>
                <td>{{ $item->salary_basic }}</td>
                <td>{{ $item->salary_additional_service }}</td>
                <td>{{ $item->salary_overtime }}</td>
                <td>{{ $item->salary_allowance }}</td>
                <td>{{ $item->salary_meal_allowance }}</td>
                <td>{{ $item->salary_incentive }}</td>
                <td>{{ $item->salary_service_charge }}</td>
                <td>{{ $item->salary_pph }}</td>
                <td>{{ $item->salary_jht }}</td>
                <td>{{ $item->salary_jp }}</td>
                <td>{{ $item->salary_bpjs }}</td>
                <td>{{ $item->salary_misc }}</td>
                <td>{{ $item->salary_final }}</td>
                <td>{{ $item->salary_description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
