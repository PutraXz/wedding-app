


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upload File or Images') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('uploads.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name url</label>
                            <select name="name_url" id="">
                                <option disabled selected>Pilih</option>
                                @foreach ($name_urls as $name_url)
                                    <option value="{{$name_url->name_url}}">{{$name_url->name_url}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="filename[]" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

