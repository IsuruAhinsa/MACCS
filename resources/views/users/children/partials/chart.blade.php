<div class="col-sm-12">
    <div class="block block-rounded block-mode-loading-oneui">
        <div class="block-header">
            <h3 class="block-title">Weights</h3>
        </div>

        <div class="block-content p-0 bg-body-light text-center">

            {!! $chart->container() !!}

        </div>


        <div class="block-content">
            <div class="row items-push text-center py-3">
                <div class="col-6 col-xl-3">
                    <i class="fa fa-wallet fa-2x text-muted"></i>
                    <div class="text-muted mt-3">$148,000</div>
                </div>
                <div class="col-6 col-xl-3">
                    <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                    <div class="text-muted mt-3">+9% Earnings</div>
                </div>
                <div class="col-6 col-xl-3">
                    <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                    <div class="text-muted mt-3">+20% Tickets</div>
                </div>
                <div class="col-6 col-xl-3">
                    <i class="fa fa-users fa-2x text-muted"></i>
                    <div class="text-muted mt-3">+46% Clients</div>
                </div>
            </div>
        </div>
    </div>
</div>

@if($chart)
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        {!! $chart->script() !!}
    @endpush
@endif

