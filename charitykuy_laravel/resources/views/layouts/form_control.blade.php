<div class="form-group row-md-4">
    <label for="titlee" class="col-form-label text-md-right pl-2">{{ __('Nama Donasi') }}</label>
    <input type="text" class="form-control pt-1 rounded-pill @error('titlee') is-invalid @enderror"
        value="{{ isset($item) ? $item->title : old('titlee') }}" name="titlee" id='titlee'>
    @error('titlee')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="body" class="col-form-label text-md-right pl-2">{{ __('Description') }}</label>
    <textarea name="deskripsi" id="deskripsi" rows=3
        class="form-control pt-1 rounded-lg @error('deskripsi') is-invalid @enderror">{{ isset($item) ? $item->deskripsi : old('deskripsi') }}
    </textarea>
    {{-- <textarea name="description" id="body" rows=3 
        class="form-control pt-1 @error('body') is-invalid @enderror" required="required">
        {{ isset($item) ? $item->description : '' }}
    </textarea> --}}
    @error('deskripsi')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group row-md-4 pl-2">
    <label for="" class="col-form-label text-md-right">{{ __('Tipe Donasi') }}</label>
    <div class="row-md-4 pt-1">
        @if(isset($item))
        @if($item->tipe=='donasi')
        <input type="radio" id="donasi" name="tiped" value="donasi" checked>
        <label for="donasi">donasi</label><br>
        <input type="radio" id="non donasi" name="tiped" value="non donasi">
        <label for="non donasi">non donasi</label><br>
        @else
        <input type="radio" id="donasi" name="tiped" value="donasi">
        <label for="donasi">donasi</label><br>
        <input type="radio" id="non donasi" name="tiped" value="non donasi" checked>
        <label for="non donasi">non donasi</label><br>
        @endif
        @else
        <input type="radio" id="donasi" name="tiped" value="donasi" class="@error('tiped') is-invalid @enderror">
        <label for="donasi">donasi</label><br>
        <input type="radio" id="non donasi" name="tiped" value="non donasi"
            class="@error('tiped') is-invalid @enderror">
        <label for="non donasi">non donasi</label><br>
        @endif
        @error('tiped')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row-md-4">
    <label for="jumlah" class="col-form-label text-md-right pl-2">{{ __('Jumlah Donasi') }}</label>
    <div class="input-group pt-1">
        <div class="input-group-prepend pr-1">
            <span class="input-group-text rounded-pill">Rp</span>
        </div>
        <input type="number" class="form-control rounded-pill @error('jumlah') is-invalid @enderror"
            value="{{ isset($item) ? $item->jumlah : old('jumlah')}}" name="jumlah" id="jumlah" step=".01">
    </div>
    @error('jumlah')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group row-md-4">
    <label for="progress" class="col-form-label text-md-right pl-2">{{ __('Progress Donasi (%)') }}</label>
    <input type="number" class="form-control pt-1 rounded-pill @error('progress') is-invalid @enderror"
        value="{{ isset($item) ? $item->progress : old('progress') }}" name="progress" id='progress'>
    @error('progress')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group row-md-4">
    <label for="inputImage" class="col-form-label text-md-right pl-2">{{ __('Gambar Thumbnail') }}</label>
    <div class="input-group pt-1">
        <input type="hidden" name="img_hddn" value="{{ isset($item) ? $item->gambar : old('img_hddn') }}">
        <input type="file" class="pl-2" accept="image/*" id="inputImage" name="img_path">
        {{-- <div class="custom-file">
            <input type="hidden" name="img_hddn" value="{{ isset($item) ? $item->gambar : '' }}">
        <input type="file" class="custom-file-input" accept="image/*" id="inputImage" name="img_path">
        <label for="inputImage"
            class="custom-file-label">{{ isset($item) ? \Str::limit($item->img_path, 53) : 'Choose Image' }}</label>
    </div> --}}
</div>
</div>

<div class="form-group row d-flex pt-1">
    <div class="col-md-6 text-right">
        <button type="submit" class="btn btn-primary w-50">Submit</button>
    </div>
    <div class="col-md-6 text-left">
        <a href="{{ (request()->segment(2) == 'edit' and isset($item)) ? route('menus.detail', $item) : route('menus.index') }}"
            class="btn btn-light w-50">Cancel</a>
    </div>
</div>