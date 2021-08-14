<form method="POST" action="{{ route('salary.store') }}" class="form-horizontal form-label-left">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Karyawan</label>
        <div class="col-sm-10">
            <select name="employee_id" class="form-control" required>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->employee_id }}">{{ $employee->employee_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Rekening</label>
        <div class="col-sm-10">
            <input name="salary_account_number" type="text" class="form-control" placeholder="Nomor Rekening">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">NPWP</label>
        <div class="col-sm-10">
            <input name="salary_npwp" type="text" class="form-control" placeholder="NPWP">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tax Status</label>
        <div class="col-sm-10">
            <select name="salary_tax_status" class="form-control">
                @foreach ($tax_status as $tax)
                    <option value="{{ $tax->tax_name }}">{{ $tax->tax_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-success mr-2">Submit</button>
</form>
