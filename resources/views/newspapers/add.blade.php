@extends('templates.master')


@section('content')
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
			  <li>
			    <i class="ace-icon fa fa-home home-icon"></i>
			    <a href="#">Trang chủ</a>
			  </li>
			  <li class="active">Thêm bài báo/ Báo cáo</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
			  <form class="form-search">
			    <span class="input-icon">
			      <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
			      <i class="ace-icon fa fa-search nav-search-icon"></i>
			    </span>
			  </form>
			</div><!-- /.nav-search -->
		</div>

		<form class="form-horizontal" action="{{route('newspager.add')}}" method="post" role="form">
		<input type="hidden" name="_token" value="{{Session::token()}}">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Tên bài báo / Báo cáo </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1-1" placeholder="quy trinh nuôi cấy trong..." class="form-control" />
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Tên tạp chí </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1-1" placeholder="tạp chí phố wall" class="form-control" />
						</div>
					</div>

					<div class="space-4"></div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Tạp chí số </label>

						<div class="col-sm-9">
							<input type="number" id="form-field-1-1" placeholder="4" class="form-control" />
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Trang đăng </label>

						<div class="col-sm-9">
							<input type="number" id="form-field-1-1" placeholder="23" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Địa chỉ </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1-1" placeholder="quy trinh nuôi cấy trong..." class="form-control" />
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Tập </label>

						<div class="col-sm-9">
							<input type="number" id="form-field-1-1" placeholder="tạp chí phố wall" class="form-control" />
						</div>
					</div>
					

					<div class="space-4"></div>
				</div>

				<div class="col-lg-6">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Năm </label>

						<div class="col-sm-9">
							<input type="number" id="form-field-1-1" placeholder="quy trinh nuôi cấy trong..." class="form-control" />
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Phân loại </label>

						<div class="col-sm-9">
							<input type="text" name="category" id="form-field-1-1" placeholder="tạp chí phố wall" class="form-control" />
						</div>
					</div>

					<div class="space-4"></div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Địa điểm </label>

						<div class="col-sm-9">
							<input type="radio" name="location" id="form-field-1-1"   />Trong nước
							<input type="radio" name="location" id="form-field-1-1"   />Nước ngoài
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Danh sách tác giả </label>

						<div class="col-sm-9">
							<input type="text" name="list-auth" id="form-field" placeholder="23" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" placeholder="tạp chí phố wall" for="form-field-1-1"> Là tác giả TNU đầu tiên </label>

						<div class="col-sm-9">
							<input type="checkbox" name="auth-tnu" id="form-field-1-1"/>
						</div>
					</div>
				</div>
			</div>
				

				

				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							Lưu lại
						</button>

						&nbsp; &nbsp; &nbsp;
						<button class="btn" type="reset">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							Nhập lại
						</button>
					</div>
				</div>

		</form>
	</div>
</div><!-- /.main-content -->
								
@endsection