<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        @if(isset($slides) && count($slides) > 0)
            <div class="carousel-inner">
                <?php $i = 0; ?>
                @foreach($slides as $slide)
                    <?php $i++; ?>
                    <div class="item {{($i == 1) ? 'active' : ''}}">
                        <img class="img-responsive" src="{{asset($slide->thumb)}}" alt="Setup house" style="max-height: 500px;width: 100%;">
                    </div>
                @endforeach
            </div>
    @endif

    <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
