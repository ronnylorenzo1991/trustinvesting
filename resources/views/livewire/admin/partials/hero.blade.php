<div class="form-group">
    <div class="card">
        <div class="card-title"> Select An Image</div>
        <div class="card-body">
            <div class="scrollable">
                <div class="row">
                    @foreach ($images as $image)
                        <div class="col-md-3 pb-4">
                            <div class="custom-control custom-radio image-checkbox">
                                <input type="radio"
                                       class="custom-control-input"
                                       id="ck2{{ $loop->iteration }}"
                                       name="ck2"
                                       value="{{ $image->url }}"
                                       wire:model="newSection.settings.imageurl">
                                <label class="custom-control-label" for="ck2{{ $loop->iteration }}">
                                    <img src="{{ Storage::url($image->url) }}" alt="#" class="img-fluid">
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <label class="label-control"> Add Title </label>
    <input type="text" class="form-control" wire:model="newSection.settings.title">
    @error('name')
    <span class="text-danger text-small">
                               {{ $message }}
                            </span>
    @enderror
</div>
<div class="form-group">
    <label class="label-control"> Add Body Text </label>
    <input type="text" class="form-control" wire:model="newSection.settings.text">
    @error('name')
    <span class="text-danger text-small">
                               {{ $message }}
                            </span>
    @enderror
</div>
