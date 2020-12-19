<div class="form-group row-md-4">
    Nama Donasi 
    <input type="text" class="form-control pt-1" required="required" value="{{ isset($item) ? $item->title : old('titlee') }}"
        name="titlee">
</div>

<div class="form-group">
    Description
    <textarea name="deskripsi" id="body" rows=3 class="form-control pt-1" required>{{ isset($item) ? $item->deskripsi : old('deskripsi') }}
    </textarea>
    {{-- <textarea name="description" id="body" rows=3 
        class="form-control pt-1 @error('body') is-invalid @enderror" required="required">
        {{ isset($item) ? $item->description : '' }}
    </textarea> --}}
    {{-- @error('body')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror --}}
</div>

<div class="form-group row-md-4">
    Tipe Donasi
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
        <input type="radio" id="donasi" name="tiped" value="donasi">
        <label for="donasi">donasi</label><br>
        <input type="radio" id="non donasi" name="tiped" value="non donasi">
        <label for="non donasi">non donasi</label><br>
        @endif
    </div>
</div>

<div class="form-group row-md-4">
    Jumlah Donasi
    <div class="input-group pt-1">
        <div class="input-group-prepend">
            <span class="input-group-text">Rp</span>
        </div>
        <input type="number" class="form-control" value="{{ isset($item) ? $item->jumlah : old('jumlah')}}" name="jumlah"
            step=".01" required>
    </div>
</div>

<div class="form-group row-md-4">
    Progress Donasi (%)
    <input type="number" class="form-control pt-1" value="{{ isset($item) ? $item->progress : old('progress') }}" name="progress"
        required>
</div>

<div class="form-group row-md-4">
    Gambar Thumbnail
    <div class="input-group pt-1">
        <input type="hidden" name="img_hddn" value="{{ isset($item) ? $item->gambar : old('img_hddn') }}">
        <input type="file" class="" accept="image/*" id="inputImage" name="img_path">
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