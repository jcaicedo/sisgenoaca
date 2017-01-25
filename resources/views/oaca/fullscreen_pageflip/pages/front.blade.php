<div class="bb-custom-wrapper">
  <div id="bb-bookblock" class="bb-bookblock">

    <?php $count_item =1 ?>


    @foreach ($content as $key => $moment)
      @foreach ($moment as $key2 => $group)
        @foreach ($group as $key3 => $children)

          <div class="bb-item" id="item{{$count_item}}">
            <div class="content">
              <div class="scroller">

                <h2> {{trans('admin.'.$key)}}: {{trans('admin.'.$key2)}}</h2>

                <div class="row">
                  @foreach ($children as $key4 => $element)

                    @if($element->type_element == 'title')

                      <div class="col-md-12 title">
                        <h1 class="content-oaca-font-size content-title">{{$element->content}}</h1>
                      </div>

                    @endif

                    @if($element->type_element == 'textarea')

                      <div class="col-md-12 textarea">
                        <p>{{ print_r ($element->content)}}</p>
                      </div>

                    @endif

                    @if($element->type_element == 'image')

                      <div class="col-md-12 image">
                        <img src="{{ $element->content }}" alt="" style="width:50%; height:auto">
                      </div>

                    @endif

                    @if ($element->type_element == 'filehtml')
                      <div class="col-md-12 filehtml">
                        <iframe src="{{url($element->content)}}" width="100%" height="500px"></iframe>
                      </div>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <?php $count_item ++; ?>

        @endforeach

      @endforeach

    @endforeach


  </div>

  <nav>
    <span id="bb-nav-prev">&larr;</span>
    <span id="bb-nav-next">&rarr;</span>
  </nav>

  <span id="tblcontents" class="menu-button">Table of Contents</span>

</div>
