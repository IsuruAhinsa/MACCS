<li class="timeline-event">
    <div class="timeline-event-icon bg-amethyst">
        <i class="fas fa-arrow-alt-circle-up"></i>
    </div>
    <div class="timeline-event-block block invisible" data-toggle="appear">
        <div class="block-header">
            <h3 class="block-title">Child Height</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-hover table-vcenter font-size-sm mb-0">
                    <thead>
                    <tr class="text-uppercase">

                        <th class="font-w700">Year</th>
                        <th class="font-w700">Height</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($child->heights as $height)
                        <tr>
                            <td class="font-w600">
                                {{ $height->created_at }}
                            </td>
                            <td class="font-w600">
                                {{ $height->height }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</li>
