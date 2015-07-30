  @extends('admin.layout')

  @section('content')
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-option" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Save"><i class="fa fa-save"></i></button>
        <a href="http://www.licelotion.com/admin/index.php?route=catalog/option&amp;token=b754f25c7b1711225d7d83161a385cc1" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a></div>
        <h1>Options</h1>
        <ul class="breadcrumb">
          <li><a href="http://www.licelotion.com/admin/index.php?route=common/dashboard&amp;token=b754f25c7b1711225d7d83161a385cc1">Home</a></li>
          <li><a href="http://www.licelotion.com/admin/index.php?route=catalog/option&amp;token=b754f25c7b1711225d7d83161a385cc1">Options</a></li>
        </ul>
      </div>
    </div>
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Option</h3>
        </div>
        <div class="panel-body">
          <!-- <form action="http://www.licelotion.com/admin/index.php?route=catalog/option/add&amp;token=b754f25c7b1711225d7d83161a385cc1" method="post" enctype="multipart/form-data" id="form-option" class="form-horizontal"> -->
          {{ Form::open(array('route' => array('admin.promotion.create'))) }}
            <div class="form-group required">
              <label class="col-sm-2 control-label">Option Name</label>
              <div class="col-sm-10">
                <div class="input-group"><span class="input-group-addon"><img src="view/image/flags/gb.png" title="English"></span>
                  <input type="text" name="option_description[1][name]" value="" placeholder="Option Name" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-type">Type</label>
              <div class="col-sm-10">
                <select name="type" id="input-type" class="form-control">
                  <optgroup label="Choose">
                    <option value="select">Select</option>
                    <option value="radio">Radio</option>
                    <option value="checkbox">Checkbox</option>
                    <option value="image">Image</option>
                  </optgroup>
                  <optgroup label="Input">
                    <option value="text">Text</option>
                    <option value="textarea">Textarea</option>
                  </optgroup>
                  <optgroup label="File">
                    <option value="file">File</option>
                  </optgroup>
                  <optgroup label="Date">
                    <option value="date">Date</option>
                    <option value="time">Time</option>
                    <option value="datetime">Date &amp; Time</option>
                  </optgroup>
                </select>
              </div>
            </div>
          {{ Form::close() }}
        </div>
      </div>
    </div>
    @endsection
