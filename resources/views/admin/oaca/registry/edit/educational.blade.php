<!-- Educativo -->
<div class="box-body nomostrar" id="educational">
  <h4>{{trans('admin.educational')}}</h4>
  <br>

  <div class="form-group">
    <div class="col-md-3 col-xs-12">
      <label for="learning_resources">{{trans('admin.learning_resources')}}</label><span> *</span>
    </div>
    <div class="col-md-9 col-xs-12">
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="learning_resources[]" value="evaluation_test" {{ in_array("evaluation_test",$content_register->learning_resources)?'checked':''}}>{{trans('admin.evaluation_test')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="learning_resources[]" value="close_homework" {{ in_array("close_homework",$content_register->learning_resources)?'checked':''}}>{{trans('admin.close_homework')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="learning_resources[]" value="open_homework" {{ in_array("open_homework",$content_register->learning_resources)?'checked':''}} >{{trans('admin.open_homework')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="learning_resources[]" value="research_material" {{ in_array("research_material",$content_register->learning_resources)?'checked':''}} >{{trans('admin.research_material')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="learning_resources[]" value="manual" {{ in_array("manual",$content_register->learning_resources)?'checked':''}} >{{trans('admin.manual')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="learning_resources[]" value="source_information" {{ in_array("source_information",$content_register->learning_resources)?'checked':''}} >{{trans('admin.source_information')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="learning_resources[]" value="tool" {{ in_array("tool",$content_register->learning_resources)?'checked':''}} >{{trans('admin.tool')}}
        </label>
      </div>

    </div>
  </div>

  <div class="form-group">
    <div class="col-md-3 col-xs-12">
      <label for="ldestination_rol">{{trans('admin.destination_rol')}}</label><span> *</span>
    </div>
    <div class="col-md-9 col-xs-12">

      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="destination_rol[]" value="student" {{ in_array("student",$content_register->destination_rol)?'checked':''}} >{{trans('admin.student')}}
        </label>
      </div>

      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="destination_rol[]" value="student" {{ in_array("student",$content_register->destination_rol)?'checked':''}} >{{trans('admin.student')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="destination_rol[]" value="professor" {{ in_array("professor",$content_register->destination_rol)?'checked':''}} >{{trans('admin.professor')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="destination_rol[]" value="author" {{ in_array("author",$content_register->destination_rol)?'checked':''}} >{{trans('admin.author')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="destination_rol[]" value="manager" {{ in_array("manager",$content_register->destination_rol)?'checked':''}} >{{trans('admin.manager')}}
        </label>
      </div>

    </div>
  </div>
  <div class="form-group">
    <div class="col-md-3 col-xs-12">
      <label for="context">{{trans('admin.context')}}</label><span> *</span>
    </div>
    <div class="col-md-9 col-xs-12">

      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="context[]" value="children_educaction" {{ in_array("children_educaction",$content_register->context)?'checked':''}} >{{trans('admin.children_educaction')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="context[]" value="primary_education" {{ in_array("primary_education",$content_register->context)?'checked':''}} >{{trans('admin.primary_education')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="context[]" value="highschool_education" {{ in_array("highschool_education",$content_register->context)?'checked':''}} >{{trans('admin.highschool_education')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="context[]" value="bachillerato" {{ in_array("bachillerato",$content_register->context)?'checked':''}} >{{trans('admin.bachillerato')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="context[]" value="professional" {{ in_array("professional",$content_register->context)?'checked':''}} >{{trans('admin.professional')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="context[]" value="college" {{ in_array("college",$content_register->context)?'checked':''}} >{{trans('admin.college')}}
        </label>
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="context[]" value="postgraduate" {{ in_array("postgraduate",$content_register->context)?'checked':''}} >{{trans('admin.postgraduate')}}
        </label>
      </div>



    </div>
  </div> <!--/-form-group-->

  <div class="form-group col-md-12">
    <label for="age_range">{{trans('admin.age_range')}}</label>
    <br>
    <input type="number" name="age_range" id="age_range" class="from-control" placeholder="{{trans('admin.placeholderage_range')}}" value="{{$content_register->age_range}}">
  </div>
</div>
<!--/-box-body Educational -->
