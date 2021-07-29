<li class="timeline-event">
    <div class="timeline-event-icon bg-modern">
        <i class="si si-speedometer"></i>
    </div>
    <div class="timeline-event-block block invisible" data-toggle="appear">
        <div class="block-header">
            <h3 class="block-title">Child Weight</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-hover table-vcenter font-size-sm mb-0">
                    <thead>
                    <tr class="text-uppercase">

                        <th class="font-w700">Year</th>
                        <th class="font-w700">Month</th>
                        <th class="font-w700">Weight</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($child->weights as $weight)
                        <tr>
                            <td class="font-w600">
                                {{ $weight->yesr }}
                            </td>
                            <td class="font-w600">
                                {{ $weight->created_at }}
                            </td>
                            <td class="font-w600">
                                {{ $weight->weight }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</li>
