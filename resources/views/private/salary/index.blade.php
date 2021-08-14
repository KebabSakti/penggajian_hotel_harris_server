<x-layout>
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Penggajian</h4>
            </div>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mainModal"
                data-link="{{ route('salary.create') }}"><i class="mdi mdi-plus-circle"></i> Tambah</button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mainModal" data-link=""><i
                    class="mdi mdi-file-import"></i> Import</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mainModal" data-link=""><i
                    class="mdi mdi-file-export"></i> Export</button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mainModal" data-link=""><i
                    class="mdi mdi-email"></i> Kirim Email (0)</button>
            <div class="form-inline float-right">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-primary text-white">Periode</div>
                    </div>
                    <input type="text" name="daterange" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
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
                                    <th rowspan="2">#</th>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            var startPeriode = moment().startOf('month');
            var endPeriode = moment().endOf('month');

            var mTable = $('.datatable');

            function fullDate(month, target) {
                var m = moment(moment().year() + '-' + month);

                return target == 'start' ? m.startOf('month') : m.endOf('month');
            }

            function load(start, end) {
                mTable.hide();

                mTable.DataTable({
                    "destroy": true,
                    "responsive": false,
                    "processing": true,
                    "serverSide": true,
                    order: [
                        [0, 'desc']
                    ],
                    columns: [{
                            'searchable': false,
                            'orderable': true
                        },
                        null,
                        null,
                        null,
                        null,
                        null,
                        {
                            'searchable': false,
                            'orderable': true
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                        {
                            'searchable': false,
                            'orderable': false
                        },
                    ],
                    ajax: $.fn.dataTable.pipeline({
                        url: '/private/salary/ajax',
                        method: 'POST',
                        data: function(d) {
                            d._token = '{!! csrf_token() !!}';
                            d.dtStart = start.format('DD-MM-YYYY');
                            d.dtEnd = end.format('DD-MM-YYYY');
                        },
                        pages: 5,
                    })
                });



                mTable.show();
            }

            $('input[name="daterange"]').daterangepicker({
                showDropdowns: true,
                alwaysShowCalendars: true,
                startDate: startPeriode,
                endDate: endPeriode,
                locale: {
                    format: 'DD/MM/YYYY'
                },
                ranges: {
                    // 'Hari ini': [moment(), moment()],
                    'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                    'Tahun ini': [moment().startOf('year'), moment().endOf('year')],
                    'Triwulan I': [fullDate('01', 'start'), fullDate('03', 'end')],
                    'Triwulan II': [fullDate('04', 'start'), fullDate('06', 'end')],
                    'Triwulan III': [fullDate('07', 'start'), fullDate('09', 'end')],
                    'Triwulan IV': [fullDate('10', 'start'), fullDate('12', 'end')],
                }
            }, function(start, end, label) {
                load(start, end);
            });

            load(startPeriode, endPeriode);
        </script>
    @endpush
</x-layout>
