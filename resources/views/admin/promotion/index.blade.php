  @extends('admin.layout')



  @section('content')

    <div class="page-header">
      <div class="container-fluid">
        <div class="pull-right">
          <a href="{{ route('admin.promotion.create') }}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add New"><i class="fa fa-plus"></i></a>
          <!-- <button type="submit" form="form-product" formaction="http://www.licelotion.com/admin/index.php?route=catalog/product/copy&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Copy"><i class="fa fa-copy"></i></button> -->
          <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Are you sure?') ? $('#form-product').submit() : false;" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
        </div>
        <h1>Products</h1>
        <ul class="breadcrumb">
          <li><a href="http://www.licelotion.com/admin/index.php?route=common/dashboard&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4">Home</a></li>
          <li><a href="http://www.licelotion.com/admin/index.php?route=catalog/product&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4">Products</a></li>
        </ul>
      </div>
    </div>
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-list"></i> Product List</h3>
        </div>
        <div class="panel-body">
          <div class="well">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-name">Product Name</label>
                  <input type="text" name="filter_name" value="" placeholder="Product Name" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-model">Model</label>
                  <input type="text" name="filter_model" value="" placeholder="Model" id="input-model" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-price">Price</label>
                  <input type="text" name="filter_price" value="" placeholder="Price" id="input-price" class="form-control">
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-quantity">Quantity</label>
                  <input type="text" name="filter_quantity" value="" placeholder="Quantity" id="input-quantity" class="form-control">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-status">Status</label>
                  <select name="filter_status" id="input-status" class="form-control">
                    <option value="*"></option>
                    <option value="1">Enabled</option>
                    <option value="0">Disabled</option>
                  </select>
                </div>
                <button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Filter</button>
              </div>
            </div>
          </div>
          <form action="http://www.licelotion.com/admin/index.php?route=catalog/product/delete&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4" method="post" enctype="multipart/form-data" id="form-product">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                    <td class="text-center">Image</td>
                    <td class="text-left"><a href="http://www.licelotion.com/admin/index.php?route=catalog/product&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4&amp;sort=pd.name&amp;order=DESC" class="asc">Product Name</a>
                    </td>
                    <td class="text-left"><a href="http://www.licelotion.com/admin/index.php?route=catalog/product&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4&amp;sort=p.model&amp;order=DESC">Start</a>
                    </td>
                    <td class="text-left"><a href="http://www.licelotion.com/admin/index.php?route=catalog/product&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4&amp;sort=p.price&amp;order=DESC">End</a>
                    </td>
                    <td class="text-right"><a href="http://www.licelotion.com/admin/index.php?route=catalog/product&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4&amp;sort=p.quantity&amp;order=DESC">Normal Price</a>
                    </td>
                    <td class="text-right"><a href="http://www.licelotion.com/admin/index.php?route=catalog/product&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4&amp;sort=p.status&amp;order=DESC">Promotion Price</a>
                    </td>
                                      <td class="text-right"><a href="http://www.licelotion.com/admin/index.php?route=catalog/product&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4&amp;sort=p.status&amp;order=DESC">Total Saving</a>
                                      </td>
                    <td class="text-right">Action</td>
                  </tr>
                </thead>
                <tbody>

                  @foreach($promotions as $promotion)
                  <tr>
                    <td class="text-center"><input type="checkbox" name="selected[]" value="50">
                    </td>
                    <td class="text-center"><img src="http://www.licelotion.com/image/cache/catalog/licelotion-40x40.png" alt="Lice Lotion 100ml" class="img-thumbnail">
                    </td>
                    <td>{{ $promotion->Product->name }}</td>
                        <td>{{ $promotion->start }}</td>
                        <td class="text-left">{{ $promotion->end }}</td>
                        <td class="text-right">{{ $promotion->price_promo }}</td>
                        <td class="text-right">{{ $promotion->price_normal }}</td>
                        <td class="text-right">{{ $promotion->saving }}</td>
                    
                    <td class="text-right"><a href="http://www.licelotion.com/admin/index.php?route=catalog/product/edit&amp;token=f4e5734f5c8bc1923dcffb0e8ff714e4&amp;product_id=50" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </form>
          <div class="row">
            <div class="col-sm-6 text-left"></div>
            <div class="col-sm-6 text-right">Showing 1 to 2 of 2 (1 Pages)</div>
          </div>
        </div>
      </div>
    </div>
  @endsection
