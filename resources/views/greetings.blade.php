<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('greets.store') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name_url" value="{{ old('name_url') }}" hidden>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="from" value="{{ old('from') }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">{{ __('Upload') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
