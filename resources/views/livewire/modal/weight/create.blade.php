<div>

    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-weight text-muted mr-1"></i> Child Weight
            </h3>
            <div class="block-options">
                <a href="#" class="btn-block-option" data-toggle="modal" data-target="#modal-create-weight">
                    <i class="si si-plus"></i>
                </a>
            </div>
        </div>
        <div class="block-content">
            @foreach($records as $record)
                <div class="media d-flex align-items-center push">
                    <div class="mr-3">
                        <a class="item item-rounded bg-info" href="javascript:void(0)">
                            <i class="fa fa-weight fa-2x text-white-75"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="font-w600">{{ $record->weight }} Kg</div>
                        <div class="font-size-sm">{{ $record->updated_at }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal" id="modal-create-weight" tabindex="-1" role="dialog" aria-labelledby="modal-create-weight" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-transparent mb-0">
                    <div class="block-header">
                        <h3 class="block-title">
                            <i class="fa fa-weight text-muted mr-1"></i>
                            Add Weight
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm">
                        @livewire('form.weight.create', ['child_id' => $child_id])
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
