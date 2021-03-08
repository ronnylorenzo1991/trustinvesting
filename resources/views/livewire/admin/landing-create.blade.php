<div>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label class="label-control"> Description </label>
                <input wire:model="name" type="text" class="form-control" placeholder="Description">
                @error('name')
                <span class="text-danger text-small">
                     {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"> +
                    Add Section
                </button>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-title">Sections</div>
        <div class="card-body">
            @foreach ($sections as $section)
                <div class="form-group">
                    <label class="label-control"> {{ $section['type'] }} </label>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> Type </label>
                        <label>
                            <select class="form-control" wire:model="sectionType">
                                <option value="0"> Select Any</option>
                                @foreach($sectionTypes as $type)
                                    <option value="{{ $type['id'] }}"> {{ $type['name'] }} </option>
                                @endforeach
                            </select>
                        </label>
                        @error('name')
                        <span class="text-danger text-small">
                           {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <hr>
                    @if ($sectionType === '1')
                        @include('livewire.admin.partials.hero')
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="addSection">Add Section</button>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .scrollable {
        overflow-y: auto;
        max-height: 300px;
    }
</style>

