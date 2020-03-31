@extends('admin_layout')
@section('admin_content')
    <h4 class="alert-heading">Warning!</h4>
    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
    </noscript>

    <!-- start: Content -->
    <div id="content" class="span10">
        <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li><a href="{{URL::to('/add_category')}}">Add Category</a></li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
					</div>	
                    
					<div class="box-content">
						<form class="form-horizontal" action="{{ url( '/save_categories' ) }}" method="post">
                            {{ csrf_field() }}
						  <fieldset>
                          <div class="control-group">
							  <label class="control-label" for="date01">Category Name      </label>
							  <div class="controls">
								<input type="text" class="input_xlarge" name="category_name"  required="" >
							  </div>
							</div>         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="category_description" rows="3" required=""></textarea>
							  </div>
                            </div>
                            <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status </label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" >ADD</button>
							  
							  <a class="btn btn-default" href="{{URL::to('/add_category')}}">Cancel</a>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection
